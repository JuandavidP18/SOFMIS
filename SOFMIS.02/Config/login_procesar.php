<?php
// Obtener los datos del formulario
$usernameOrEmail = $_POST['username_or_email'];
$password = $_POST['password'];

// Conectarse a la base de datos (actualiza los valores de host, nombre de usuario, contraseña y nombre de la base de datos según tu configuración)
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sofmis';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Buscar el usuario en la base de datos
$query = "SELECT * FROM usuarios WHERE email = '$usernameOrEmail' OR username = '$usernameOrEmail'";
$result = $conn->query($query);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];

    // Verificar la contraseña
    if (password_verify($password, $hashedPassword)) {
        // Iniciar sesión y redirigir al dashboard
        session_start();
        $_SESSION['username'] = $row['username'];
        header("Location: ..\Views\dashboard.php");
        exit;
    }
}

echo "<script>parent.showModalError();</script>";
header("Location: ..\Views\login.php");
exit;
$conn->close();
?>
