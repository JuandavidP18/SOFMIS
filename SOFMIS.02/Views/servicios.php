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
                Servicios
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
            <div class="botones_principales">
                <div class="tarjetas">
                    <div class="item add-product">
                        <div id="btn-abrir-modal">
                            <i class='bx bxs-phone-call'></i>
                            <h3>Recargas</h3>
                        </div>
                    </div>
                </div>
                <div class="tarjetas">
                    <div class="item add-product">
                        <div id="btn-abrir-modal-editar">
                            <i class='bx bxs-phone-call'></i>
                            <h3>Registrar transaccion
                            </h3>
                        </div>
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
            </div>
            <div class="tabla_inventarios">
                <div class="Productos">
                    <div class="card">
                        <div class="card-header">
                            <h3>Transacciones Realizadas</h3>
                            <div class="buscar_produc">
                                <input type="search" placeholder="Buscar Transacción">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nombre</td>
                                            <td>Cantidad Retirada</td>
                                            <td>Costo</td>
                                            <td>Fecha</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Daniel alexander</td>
                                            <td>$ 120.000</td>
                                            <td>$2.500</td>
                                            <td>20/03/2004</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel alexander</td>
                                            <td>$ 120.000</td>
                                            <td>$2.500</td>
                                            <td>20/03/2004</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel alexander</td>
                                            <td>$ 120.000</td>
                                            <td>$2.500</td>
                                            <td>20/03/2004</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel alexander</td>
                                            <td>$ 120.000</td>
                                            <td>$2.500</td>
                                            <td>20/03/2004</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel alexander</td>
                                            <td>$ 120.000</td>
                                            <td>$2.500</td>
                                            <td>20/03/2004</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel alexander</td>
                                            <td>$ 120.000</td>
                                            <td>$2.500</td>
                                            <td>20/03/2004</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel alexander</td>
                                            <td>$ 120.000</td>
                                            <td>$2.500</td>
                                            <td>20/03/2004</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="boton_agregar"></div>
                    <div class="card-header">
                        <h3>Recargas Realizadas</h3>
                        <button>Ver mas<span class="las la-arrow-right"></span></button>
                    </div>
                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                                <div class="recarga">

                                </div>
                                <div>
                                    <h3>Daniel</h3>
                                    <small>Recarga Normal claro</small>
                                </div>
                            </div>
                            <div>
                                10.0000
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="recarga">

                                </div>
                                <div>
                                    <h3>Jorge </h3>
                                    <small>Paquete Tigo</small>
                                </div>
                            </div>
                            <div>
                                5.000
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="recarga">

                                </div>
                                <div>
                                    <h3>Jorge </h3>
                                    <small>Paquete Tigo</small>
                                </div>
                            </div>
                            <div>
                                5.000
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="recarga">

                                </div>
                                <div>
                                    <h3>Jorge </h3>
                                    <small>Paquete Tigo</small>
                                </div>
                            </div>
                            <div>
                                5.000
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="recarga">

                                </div>
                                <div>
                                    <h3>Jorge </h3>
                                    <small>Paquete Tigo</small>
                                </div>
                            </div>
                            <div>
                                5.000
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <div class="recarga">

                                </div>
                                <div>
                                    <h3>Jorge </h3>
                                    <small>Paquete Tigo</small>
                                </div>
                            </div>
                            <div>
                                5.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <dialog id="modal" class="modal-add-produc">
                <div class="ag-produc">
                    <header>Registrar recarga</header>
                    <form action="form first">
                        <div class="details personal">
                            <div class="fields">
                                <div class="input-field">
                                    <label>Tipo de recarga</label>
                                    <input type="text" placeholder="Tipo de Recargas" required>
                                    <label>Precio de Recarga</label>
                                    <input type="text" placeholder="Precio de recarga" required>
                                    <label>Fecha de recarga</label>
                                    <input type="date" placeholder="Ingresa la fecha" value="2017-06-01" required>
                                    <label>Ingresa el Estado de la recarga:</label>
                                    <input type="text" placeholder="Estado producto" required><br>
                                    <button id="btn-cerrar-modal" class="boton_guardar">Cerrar</button>
                                    <button type="submit" class="boton_guardar"> Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </dialog>
            <dialog id="editar" class="editar-add-produc">
                    <div class="ag-produc isos">
                        <header>Registrar Transaccion</header>
                        <form action="form first">
                            <div class="details personal">
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Nombre Cliente</label>
                                        <input type="text" placeholder="Tipo de Recargas" required>
                                        <label>Cantidad a Retirar</label>
                                        <input type="text" placeholder="Precio de recarga" required>
                                        <label>Fecha de Transacción</label>
                                        <input type="date" placeholder="Ingresa la fecha" value="2017-06-01" required>
                                        <label>Total de costo de la transacción</label>
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