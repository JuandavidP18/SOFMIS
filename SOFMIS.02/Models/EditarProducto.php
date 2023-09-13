<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "sofmis";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener el ID del producto a editar si se ha enviado la solicitud
if (isset($_POST['editar'])) {
    $idEditar = $_POST['editar'];
    
    // Obtener los detalles del producto a editar
    $query = "SELECT * FROM productos WHERE id = $idEditar";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $producto = mysqli_fetch_assoc($result);
        
        // Comprobar si se ha enviado el formulario de edición
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $stock = $_POST["stock"];

            // Actualizar los datos del producto en la base de datos
            $updateQuery = "UPDATE productos SET nombre='$nombre', precio='$precio', stock='$stock' WHERE id='$idEditar'";
            if (mysqli_query($conn, $updateQuery)) {
                echo "El producto ha sido actualizado correctamente.";
            } else {
                echo "Error al actualizar el producto: " . mysqli_error($conn);
            }
        }
    } else {
        echo "No se encontró el producto en la base de datos.";
    }
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 200px;
        }
        input[type="submit"] {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Editar producto</h2>
    <?php if (isset($producto)) : ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="hidden" name="editar" value="<?php echo $producto['id']; ?>">
            
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>" required>
            
            <label for="precio">Precio:</label>
            <input type="number" name="precio" step="0.01" value="<?php echo $producto['precio']; ?>" required>
            
            <label for="stock">Stock:</label>
            <input type="number" name="stock" value="<?php echo $producto['stock']; ?>" required>
            
            <input type="submit" value="Guardar cambios">
        </form>
    <?php endif; ?>
</body>
</html>
