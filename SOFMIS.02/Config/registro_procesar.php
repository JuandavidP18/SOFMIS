<?php
// Obtener los datos del formulario
$email = $_POST['email'];
$username = $_POST['username'];
$role = $_POST['role'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

// Validar que las contraseñas coincidan
if ($password !== $confirmPassword) {
    echo "<script>parent.showModalError();</script>";
    exit;
}

// Conectarse a la base de datos (actualiza los valores de host, nombre de usuario, contraseña y nombre de la base de datos según tu configuración)
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sofmis';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Verificar si el usuario ya existe en la base de datos
$query = "SELECT * FROM usuarios WHERE email = '$email' OR username = '$username'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    echo "<script>parent.showModalError();</script>";
    exit;
}

// Insertar el nuevo usuario en la base de datos
$hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash de la contraseña
$query = "INSERT INTO usuarios (email, username, role, password) VALUES ('$email', '$username', '$role', '$hashedPassword')";
if ($conn->query($query) === TRUE) {
    echo "<script>parent.showModalSuccess();</script>";
    header("Location: ..\Views\login.php");
exit;
} else {
    echo "<script>parent.showModalError();</script>";
}

$conn->close();
?>
