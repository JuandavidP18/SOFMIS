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

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];

    // Insertar el nuevo producto en la base de datos
    $query = "INSERT INTO productos (nombre, precio, stock) VALUES ('$nombre', '$precio', '$stock')";
    
    if (mysqli_query($conn, $query)) {
        echo "<center>";
        echo "El producto se ha agregado correctamente.";
        echo "</center>";
    } else {
        echo "Error al agregar el producto: " . mysqli_error($conn);
    }
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: auto;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
            color: #333;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }
        
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        
        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        input[type="submit"]:hover {
            background-color: #34ecf9;
        }

        button{
            width: 100px;
            height: 40px;
            border-radius: 15px;
            background-color: #303030;
            color: white;
            margin-top: 2rem;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Agregar nuevo producto</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            
            <label for="precio">Precio:</label>
            <input type="number" name="precio" step="0.01" required>
            
            <label for="stock">Stock:</label>
            <input type="number" name="stock" required>
            
            <input type="submit" value="Agregar producto">
        </form>
    </div>
    <center><a href="..\Views\inventario.php"><button>Volver</button></a></center>
</body>
</html>
