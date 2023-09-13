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
                                <i class='bx bx-log-out icon' ></i>
                                <span class="text nav-text">Cerrar sesion</span> 
                            </a>
                        </li>
                        <li class="mode">
                                <div class="moon-sun">
                                    <i class='bx bx-moon icon moon' ></i>
                                    <i class='bx bx-sun icon sun' ></i>
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
                Compras
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
            <div class="tarjetas">
                <div class="item add-product">
                    <div id="btn-abrir-modal">
                        <i class='bx bxs-phone-call'></i>
                        <h3>Agregar proveedor</h3>
                    </div>
                </div>
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Proveedores</h3>
                            <div class="buscar_produc">
                                <input type="search" placeholder="Buscar Proveedor">
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nombre Provedor</td>
                                            <td>Info</td>
                                            <td>Productos</td>
                                            <td>Estado</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Krunchy-Krunchy</td>
                                            <td><Button class="button-info-provedores">Ver Info</Button></td>
                                            <td><i class='bx bx-low-vision'></i></td>
                                            <td><div class="estado_venta"></div></td>
                                        </tr>
                                        <tr>
                                            <td>LifeStyle Dogs</td>
                                            <td><Button class="button-info-provedores">Ver Info</Button></td>
                                            <td><i class='bx bx-low-vision'></i></td>
                                            <td><div class="estado_venta1"></div></td>
                                        </tr>
                                        <tr>
                                            <td>Weekly Dog.</td>
                                            <td><Button class="button-info-provedores">Ver Info</Button></td>
                                            <td><i class='bx bx-low-vision'></i></td>
                                            <td><div class="estado_venta"></div></td>
                                        </tr>
                                        <tr>
                                            <td>Pet Hipermercado</td>
                                            <td><Button class="button-info-provedores">Ver Info</Button></td>
                                            <td><i class='bx bx-low-vision'></i></td>
                                            <td><div class="estado_venta1"></div></td>
                                        </tr>
                                        <tr>
                                            <td>Cats Marketplace</td>
                                            <td><Button class="button-info-provedores">Ver Info</Button></td>
                                            <td><i class='bx bx-low-vision'></i></td>
                                            <td><div class="estado_venta1"></div></td>
                                        </tr>
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
                                <div>
                                    <h3>Krunchy-Krunchy</h3>
                                    <small>Productos cargados</small>
                                </div>
                            </div>
                            <div>
                                4 productos
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div>
                                    <h3>LifeStyle Dogs</h3>
                                    <small>Productos cargados</small>
                                </div>
                            </div>
                            <div>
                                9 productos
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div>
                                    <h3>Weekly Dog.</h3>
                                    <small>Productos cargados</small>
                                </div>
                            </div>
                            <div>
                                10 productos
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div>
                                    <h3>Krunchy-Krunchy</h3>
                                    <small>Productos cargados</small>
                                </div>
                            </div>
                            <div>
                                16 productos
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div>
                                    <h3>Pet Hipermercado</h3>
                                    <small>Productos cargados</small>
                                </div>
                            </div>
                            <div>
                                11 productos
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div>
                                    <h3>Krunchy-Krunchy</h3>
                                    <small>Productos cargados</small>
                                </div>
                            </div>
                            <div>
                                16 productos
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div>
                                    <h3>Coca cola</h3>
                                    <small>Productos cargados</small>
                                </div>
                            </div>
                            <div>
                                23 productos
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <dialog id="modal" class="modal-add-produc">
                <div class="ag-produc">
                    <header>Registrar Proveedor</header>
                    <form action="form first">
                        <div class="details personal">
                            <div class="fields">
                                <div class="input-field">
                                    <label>Nombre de la Empresa:</label>
                                    <input type="text" placeholder="Nombre producto" required>
                                    <label>Nit Empresa</label>
                                    <input type="text" placeholder="Precio producto" required>
                                    <label>Telefono Proveedor</label>
                                    <input type="text" placeholder="Cantidad producto" required>
                                    <label>Correo Proveedor:</label>
                                    <input type="text" placeholder="Estado producto" required><br>
                                    <button id="btn-cerrar-modal" class="boton_guardar">Cerrar</button>
                                    <button type="submit" class="boton_guardar"> Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </dialog>
        </main>
    </section>
    

    <script src="..\Controllers\scrip.js"></script>
</body>
</html>