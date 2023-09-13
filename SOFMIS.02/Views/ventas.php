<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Assets\css\dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="img\logo.jpg" type="image/x-icon">
    <title>SOFMIS</title>
</head>

<body>
<input type="checkbox" id="nav-toggle">
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="..\Assets\img\logo.png"
                        alt="logo_sofmis">
                </span>
                <div class="text header-text">
                    <span class="name">SOFTMIS</span>
                    <span class="profession">Papeleria </span>
                </div>
            </div>
            <i class='bx bxs-chevrons-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search-alt icon'></i>
                    <input type="search" placeholder="Buscar">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../Views/dashboard.php">
                            <i class='bx bxs-dashboard icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../Views/ventas.php">
                            <i class='bx bx-cart-add icon'></i>
                            <span class="text nav-text">Ventas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../Views/compras.php">
                            <i class='bx bx-cart-download icon'></i>
                            <span class="text nav-text">Compras</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../Views/inventario.php">
                            <i class='bx bx-package icon'></i>
                            <span class="text nav-text">Inventarios</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../Views/servicios.php">
                            <i class='bx bxs-basket icon'></i>
                            <span class="text nav-text">Servicios</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="index.html">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Cerrar sesion</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Tema</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <section class="home">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Ventas
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <i class='bx bx-search-alt icon'></i>
                <input type="search" placeholder="Buscar">
            </div>
            <div class="user-wrapper">
                <img src="img\foto_perfil.jpg"
                    alt="admin" width="40px" height="40px">
                <div>
                    <h4>Juan David</h4>
                    <small>Super admin</small>
                </div>
        </header>
        <main>
            <a href="..\Models\agregarVenta.php" class="link_buton">
                <div class="tarjetas">
                    <div class="item add-product">
                        <div  id="btn-abrir-modal">
                            <i class='bx bxs-phone-call'></i>
                            <h3>Nueva Venta</h3>
                        </div>
                    </div>
                </div>
            </a>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ventas Recientes</h3>
                            <div class="buscar_produc">
                                <input type="search" placeholder="Buscar Venta">
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>id</td>
                                            <td>Nombre Cliente</td>
                                            <td>Total Venta</td>
                                            <td>Ver mas</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "sofmis";

                                                // Crear conexión
                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Verificar conexión
                                                if ($conn->connect_error) {
                                                    die("Conexión fallida: " . $conn->connect_error);
                                                }

                                                // Consulta SQL
                                                $sql = "SELECT id, cliente, total FROM ventas";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // Imprimir datos de cada fila
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row["id"] . "</td>";
                                                        echo "<td>" . $row["cliente"] . "</td>";
                                                        echo "<td>" . $row["total"] . "</td>";
                                                        echo "<td><a  class='boton_vermas' href='..\Models\VerVenta.php?id=" . $row["id"] . "'>Ver más</a></td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
                                                }
                                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Actividad</h3>
                        <button>Ver mas<span class="las la-arrow-right"></span></button>
                    </div>
                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                                <img src="..\Assets\img\img_perfil.png"
                                    alt="producto" width="40px" height="40px">
                                <div>
                                    <h4>Will Morales</h4>
                                    <small>Cajero</small>
                                </div>
                            </div>
                            <div>
                                <button class="button-admin">
                                    Activo                                    
                                </button>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="..\Assets\img\img_perfil.png"
                                    alt="producto" width="40px" height="40px">
                                <div>
                                    <h4>Juan David</h4>
                                    <small>Super Admin</small>
                                </div>
                            </div>
                            <div>
                                <button class="button-admin">
                                    Activo                                    
                                </button>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="..\Assets\img\img_perfil.png"
                                    alt="producto" width="40px" height="40px">
                                <div>
                                    <h4>Will Morales</h4>
                                    <small>Cajero</small>
                                </div>
                            </div>
                            <div>
                                <button class="button-admin">
                                    Activo                                    
                                </button>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="..\Assets\img\img_perfil.png"
                                    alt="producto" width="40px" height="40px">
                                <div>
                                    <h4>Juan David</h4>
                                    <small>Super Admin</small>
                                </div>
                            </div>
                            <div>
                                <button class="button-admin">
                                    Activo                                    
                                </button>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="..\Assets\img\img_perfil.png"
                                    alt="producto" width="40px" height="40px">
                                <div>
                                    <h4>Juan David</h4>
                                    <small>Super Admin</small>
                                </div>
                            </div>
                            <div>
                                <button class="button-admin">
                                    Activo                                    
                                </button>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            </dialog>
        </main>
    </section>
    <div id="modal" class="modal">
        <div id="modal-content">
            <!-- Contenido de la ventana modal -->
        </div>
    </div>
    <script src="../Controllers\scrip.js"></script>
</body>
</html>