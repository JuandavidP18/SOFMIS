<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sofmis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener la lista de productos
$sql = "SELECT id, nombre, precio, stock FROM productos";
$result = $conn->query($sql);

// Procesar la solicitud de venta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = $_POST["cliente"];
    $productos = $_POST["productos"];
    $cantidades = $_POST["cantidades"];
    $total = 0;

    // Crear una nueva venta en la base de datos
    $sql = "INSERT INTO ventas (cliente) VALUES ('$cliente')";
    $conn->query($sql);
    $ventaId = $conn->insert_id;

    // Recorrer los productos y cantidades para guardar los detalles de la venta
    for ($i = 0; $i < count($productos); $i++) {
        $productoId = $productos[$i];
        $cantidad = $cantidades[$i];

        // Obtener el precio del producto
        $sql = "SELECT precio FROM productos WHERE id = $productoId";
        $resultPrecio = $conn->query($sql);
        $row = $resultPrecio->fetch_assoc();
        $precio = $row["precio"];

        // Calcular el subtotal del producto y actualizar el stock
        $subtotal = $precio * $cantidad;
        $total += $subtotal;

        // Guardar los detalles de la venta en la base de datos
        $sql = "INSERT INTO detalles_venta (venta_id, producto_id, cantidad, subtotal) VALUES ($ventaId, $productoId, $cantidad, $subtotal)";
        $conn->query($sql);

        // Actualizar el stock del producto
        $sql = "UPDATE productos SET stock = stock - $cantidad WHERE id = $productoId";
        $conn->query($sql);
    }

    // Actualizar el total de la venta en la tabla de ventas
    $sql = "UPDATE ventas SET total = $total WHERE id = $ventaId";
    $conn->query($sql);
}

// Cerrar la conexión
$conn->close();
?>

<script>
    // Función para agregar una casilla de producto
    function agregarProducto() {
        var container = document.getElementById("productos-container");

        // Crear elementos HTML para la casilla de producto
        var div = document.createElement("div");
        var select = document.createElement("select");
        var cantidadInput = document.createElement("input");
        var eliminarButton = document.createElement("button");

        // Configurar atributos y eventos
        div.className = "producto";
        select.name = "productos[]";
        cantidadInput.type = "number";
        cantidadInput.name = "cantidades[]";
        cantidadInput.min = "1";
        cantidadInput.required = true;
        cantidadInput.addEventListener("input", actualizarTotal); // Agrega el evento de actualización al cambiar la cantidad
        eliminarButton.innerHTML = "Eliminar";
        eliminarButton.type = "button";
        eliminarButton.addEventListener("click", function() {
            div.remove();
            actualizarTotal(); // Actualiza el total al eliminar un producto
        });

        // Agregar opciones al select con los productos de la base de datos
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $producto_id = $row["id"];
                $nombre = $row["nombre"];
                $precio = $row["precio"];
                echo "var option = document.createElement('option');";
                echo "option.value = '{$producto_id}';";
                echo "option.setAttribute('data-precio', '{$precio}');"; // Agrega un atributo de datos con el precio
                echo "option.innerHTML = '{$nombre}';";
                echo "select.appendChild(option);";
            }
        }
        ?>

        // Agregar elementos al contenedor
        div.appendChild(select);
        div.appendChild(cantidadInput);
        div.appendChild(eliminarButton);
        container.appendChild(div);

        actualizarTotal(); // Actualiza el total al agregar un nuevo producto
    }

    // Función para actualizar el total de la venta
    function actualizarTotal() {
        var cantidades = document.getElementsByName("cantidades[]");
        var total = 0;

        for (var i = 0; i < cantidades.length; i++) {
            var cantidad = parseInt(cantidades[i].value);
            var option = cantidades[i].previousElementSibling.options[cantidades[i].previousElementSibling.selectedIndex];
            var precio = parseFloat(option.getAttribute("data-precio"));

            if (!isNaN(cantidad) && !isNaN(precio)) {
                total += cantidad * precio;
            }
        }

        document.getElementById("total").innerHTML = "Total: " + total.toFixed(2);
    }
</script>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Assets\css\agregarVenta.css">
    <link rel="shortcut icon" href="..\Assets\img\logo.png" type="image/x-icon">
    <title>Ventas</title>
</head>

<body>
    <div class="container">
        <div class="formulario">
            <h1>Agregar Venta</h1>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <label for="cliente">Nombre del Cliente:</label>
                <input class="nombre_cliente" type="text" name="cliente" id="cliente" required><br><br>

                <label for="productos">Productos:</label><br>
                <div id="productos-container">
                    <!-- Casillas de productos generadas dinámicamente se agregarán aquí -->
                </div>
                <button type="button" class="agregar_produc" onclick="agregarProducto()">Agregar Producto</button>
                <br><br>
                <input type="submit" value="Realizar Venta" class="realizarVenta">
            </form>

            <p id="total">Total: 0</p>

        </div>
        <a href="..\Views\ventas.php"><button>Volver</button></a>
    </div>
        

        <script src="..\Controllers\modal.js"></script>
</body>

</html>