<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Assets\css\registro.css">
    <link rel="shortcut icon" href="..\Assets\img\logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>SOFMIS</title>
</head>

<body>
    <section>
        <div class="container-fluid fondo">
            <div class="banner">
                <img src="..\Assets\img\imagen_registro_trans-removebg-preview (1).png" alt="">
            </div>
            <div class="derecha">
                <div class="inicio">
                    <div class="formulario">
                        <h1>REGISTRATE</h1>
                        <form action="..\Config\registro_procesar.php" method="POST">
                            <label for="email"><b>E-mail</b></label><br>
                            <div class="campos">
                                <span class="material-symbols-outlined">mail</span><input type="email" name="email" id="email" placeholder="" required>
                            </div>
                            <hr>
                            <label for="username"><b>Nombre Usuario</b></label><br>
                            <div class="campos">
                                <span class="material-symbols-outlined">person</span><input type="text" name="username" id="username" required>
                            </div>
                            <hr>
                            <label for="role"><b>Rol a utilizar</b></label><br>
                            <div class="campos">
                                <span class="material-symbols-outlined">person</span>
                                <select name="role" id="role">
                                    <option value="admin">Administrador</option>
                                    <option value="cajero">Cajero</option>
                                </select>
                            </div>
                            <hr>
                            <label for="password"><b>Contraseña</b></label><br>
                            <div class="campos">
                                <span class="material-symbols-outlined">key</span><input type="password" name="password" minlength="4" placeholder="" required>
                            </div>
                            <hr>
                            <label for=""><b>Confirmar Contraseña</b></label><br>
                            <div class="campos">
                                <span class="material-symbols-outlined">key</span><input type="password" name="confirm_password" minlength="4" placeholder="" required>
                            </div>
                            <hr>
                            <h5>Ya tienes cuenta<a href="../Views/login.php">Ingresar</a></h5>
                            <button type="submit" value="Registrarse"><b>REGISTRAR</b></button>
                        </form>
                        <!-- Ventana modal para mostrar mensajes -->
                        <div id="modalSuccess" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Registro exitoso.</p>
                            </div>
                        </div>

                        <div id="modalError" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Error en el registro.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ventana modal para mostrar mensajes de éxito o error -->
    <div id="modalSuccess" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Registro exitoso.</p>
        </div>
    </div>

    <div id="modalError" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Error en el registro.</p>
        </div>
    </div>

    <script>
        // Mostrar la ventana modal de éxito
        function showModalSuccess() {
            var modal = document.getElementById("modalSuccess");
                modal.style.display = "block";

            // Cerrar la ventana modal al hacer clic en la "x"
            var closeBtn = modal.getElementsByClassName("close")[0];
            closeBtn.onclick = function() {
                modal.style.display = "none";
            };
        }

        // Mostrar la ventana modal de error
        function showModalError() {
            var modal = document.getElementById("modalError");
            modal.style.display = "block";

            // Cerrar la ventana modal al hacer clic en la "x"
            var closeBtn = modal.getElementsByClassName("close")[0];
            closeBtn.onclick = function() {
                modal.style.display = "none";
            };
        }
    </script>

</body>

</html>