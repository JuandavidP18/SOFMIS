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

// Función para eliminar un producto por su ID
function eliminarProducto($id) {
    global $conn;
    
    // Desactivar restricciones de clave externa
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");
    
    // Eliminar el producto de la tabla productos
    $deleteQuery = "DELETE FROM productos WHERE id = $id";
    if (mysqli_query($conn, $deleteQuery)) {
        echo "El producto ha sido eliminado correctamente.";
        header("Location: ..\Views\inventario.php");
    } else {
        echo "Error al eliminar el producto: " . mysqli_error($conn);
    }
    
    // Volver a activar restricciones de clave externa
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");
}


// Obtener el ID del producto a eliminar si se ha enviado la solicitud
if (isset($_POST['eliminar'])) {
    $idEliminar = $_POST['eliminar'];
    eliminarProducto($idEliminar);
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
?>
