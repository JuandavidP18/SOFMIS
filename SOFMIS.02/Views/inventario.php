<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Assets\css\dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>SOFMIS</title>
    <link rel="shortcut icon" href="img\logo.jpg" type="image/x-icon">
</head>

<body>
<header>
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
                Inventarios
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
            <a href="..\Models\agregarProducto.php" class="link_buton">
            <div class="botones_principales">
                <div class="tarjetas">
                    <div class="item add-product">
                            <div class="contens_12">
                                <i class='bx bxs-phone-call'></i>
                                <h3>Nuevo producto</h3>
                            </div>
                    </div>
                </div>
            </a>
                <div class="tarjetas">
                    <div class="item add-product">
                        <div id="btn-abrir-modal-editar">
                            <i class='bx bxs-phone-call'></i>
                            <h3>Editar producto</h3>
                        </div>
                    </div>
                </div>
                <div class="tarjetas">
                    <div class="item add-product">
                        <div id="btn-abrir-modal">
                            <i class='bx bxs-phone-call'></i>
                            <h3>Descontinuar producto</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabla_inventarios">
                <div class="Productos">
                    <div class="card">
                        <div class="card-header">
                            <h3>Productos</h3>
                            <div class="buscar_produc">
                                <input type="search" placeholder="Buscar Producto">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nombre</td>
                                            <td>Cantidad Und</td>
                                            <td>Precio</td>
                                            <td>Id</td>
                                            <td>Actividades</td>
                                        </tr>
                                    </thead>
                                    <tbody>
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

// Consulta para obtener los datos de la tabla productos
$query = "SELECT id, nombre, precio, stock FROM productos";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["stock"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td><form action='..\Models\EliminarProducto.php' method='post'>";
        echo "<input type='hidden' name='eliminar' value='" . $row["id"] . "'>";
        echo "<input type='submit' value='Eliminar'>";
        echo "</form></td>";
        echo "<td><form action='..\Models\EditarProducto.php' method='post'>";
        echo "<input type='hidden' name='editar' value='" . $row["id"] . "'>";
        echo "<input type='submit' value='Editar'>";
        echo "</form></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron productos en la base de datos.";
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="boton_agregar"></div>
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
            </div>
            <dialog id="editar" class="editar-add-produc">
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Cantidad Und</td>
                                    <td>Precio</td>
                                    <td>Borrar</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Block iris</td>
                                    <td>12 und</td>
                                    <td>$2.500</td>
                                    <td><i class='bx bxs-trash borrar'></i></td>
                                </tr>
                                <tr>
                                    <td>Block iris</td>
                                    <td>12 und</td>
                                    <td>$2.500</td>
                                    <td><i class='bx bxs-trash borrar'></i></td>
                                </tr>
                                <tr>
                                    <td>Block iris</td>
                                    <td>12 und</td>
                                    <td>$2.500</td>
                                    <td><i class='bx bxs-trash borrar'></i></td>
                                </tr>
                                <tr>
                                    <td>Block iris</td>
                                    <td>12 und</td>
                                    <td>$2.500</td>
                                    <td><i class='bx bxs-trash borrar'></i></td>
                                </tr>
                                <tr>
                                    <td>Block iris</td>
                                    <td>12 und</td>
                                    <td>$2.500</td>
                                    <td><i class='bx bxs-trash borrar'></i></td>
                                </tr>
                                <tr>
                                    <td>Block iris</td>
                                    <td>12 und</td>
                                    <td>$2.500</td>
                                    <td><i class='bx bxs-trash borrar'></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <button id="btn-cerrar-modal-editar" class="boton_guardar">Cerrar</button>
                    </div>
                </div>

            </dialog>
            <dialog id="modal" class="modal-add-produc">
                <div class="ag-produc">
                    <header>Registrar Producto</header>
                    <form action="form first">
                        <div class="details personal">
                            <div class="fields">
                                <div class="input-field">
                                    <label>Ingresa el nombre del producto:</label>
                                    <input type="text" placeholder="Nombre producto" required>
                                    <label>Ingresa el precio del producto</label>
                                    <input type="text" placeholder="Precio producto" required>
                                    <label>Ingresa la cantidad de unidades habiles</label>
                                    <input type="text" placeholder="Cantidad producto" required>
                                    <label>Ingresa el Estado del producto:</label>
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