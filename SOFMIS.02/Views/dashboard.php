<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Assets\css\dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="..\Assets\img\logo.png" type="image/x-icon">
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
                Dashboard
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
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>Pedidos Diarios</h1>
                        <span>14 Pedidos</span>
                    </div>
                    <div>
                        <i class='bx bxs-shopping-bag icon-pedido' ></i>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Cupo Disponible</h1>
                        <span>$ 1.263.000</span>
                    </div>
                    <div>
                        <i class='bx bx-money-withdraw icon-monto' ></i>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Clientes Nuevos</h1>
                        <span>32 Clientes</span>
                    </div>
                    <div>
                        <i class='bx bx-male-female icon-clientes_nuevos'></i>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Nuevos Productos</h1>
                        <span>14 Productos</span>
                    </div>
                    <div>
                        <i class='bx bx-store icon-nueva_mercancia'></i>
                    </div>
                </div>
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Clientes</h3>

                            <button>Ver mas<span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nombre CLiente</td>
                                            <td>Id cliente</td>
                                            <td>Pedidos</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Juan David Sierra</td>
                                            <td>100546</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Julian Albarez Suarez</td>
                                            <td>100489</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Will Elmer Fonseca</td>
                                            <td>100546</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel Valencia</td>
                                            <td>100784</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>Andres Sebastian</td>
                                            <td>100546</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Will Elmer Fonseca</td>
                                            <td>100546</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Will Elmer Fonseca</td>
                                            <td>100546</td>
                                            <td>2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Productos Agotados</h3>
                        <button>Ver mas<span class="las la-arrow-right"></span></button>
                    </div>
                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                                <div class="produc-agot2">
                                        
                                </div>
                                <div>
                                    <h3>Lapiz norma</h3>
                                    <small>Agotado</small>
                                </div>
                            </div>
                            <div>
                                0 unidades
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="produc-agot1">
                                        
                                </div>
                                <div>
                                    <h3>Block cuadriculado</h3>
                                    <small>Proximo agotado</small>
                                </div>
                            </div>
                            <div>
                                3 unidades
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="produc-agot2">
                                        
                                </div>
                                <div>
                                    <h3>Lapicero offi-esco</h3>
                                    <small>Agotado</small>
                                </div>
                            </div>
                            <div>
                                0 unidades
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="produc-agot1">
                                        
                                </div>
                                <div>
                                    <h3>Boligrafo Semi Gel</h3>
                                    <small>Proximo agotado</small>
                                </div>
                            </div>
                            <div>
                                4 unidades
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="produc-agot2">
                                        
                                </div>
                                <div>
                                    <h3>Marcador Borrable</h3>
                                    <small>Agotado</small>
                                </div>
                            </div>
                            <div>
                                0 unidades
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="produc-agot2">
                                        
                                </div>
                                <div>
                                    <h3>Plumones Lavables</h3>
                                    <small>Agotado</small>
                                </div>
                            </div>
                            <div>
                                0 unidades
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <script src="..\Controllers\scrip.js"></script>
</body>
</html>