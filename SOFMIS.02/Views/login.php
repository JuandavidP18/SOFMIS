<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Assets\css\login.css">
    <link rel="shortcut icon" href="..\Assets\img\logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>SOFMIS</title>
</head>

<body>
    <section>
        <div class="container-fluid fondo">
            <div class="banner">
                <img src="..\Assets\img\login_img.png" alt="">
            </div>
            <div class="derecha">
                <div class="inicio">
                    <div class="formulario">
                        <h1>BIENVENIDO</h1>
                        <form action="..\Config\login_procesar.php" method="POST">
                            <label for="username_or_email"><b>Usuario</b></label><br>
                            <div class="campos">
                                <span class="material-symbols-outlined">person</span><input type="text" id="username_or_email" name="username_or_email" placeholder="">
                            </div>
                            <hr>
                            <label for="password"><b>Contraseña</b></label><br>
                            <div class="campos">
                                <span class="material-symbols-outlined">key</span><input type="password" id="password" name="password" placeholder="">
                            </div>
                            <hr>
                            <h5>Olvidaste la contraseña</h5>
                            <button><b>INGRESAR</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ventana modal para mostrar mensajes de éxito o error -->
    <div id="modalSuccess" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Inicio de sesión exitoso.</p>
        </div>
    </div>

    <div id="modalError" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Credenciales de usuario incorrectas.</p>
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