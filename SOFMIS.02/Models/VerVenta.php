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

// Obtener el ID de la venta desde el parámetro en la URL
$ventaId = $_GET["id"];

// Consulta SQL para obtener los detalles de la venta y los productos comprados
$sql = "SELECT v.cliente, p.nombre, dv.cantidad, dv.subtotal
        FROM ventas v
        INNER JOIN detalles_venta dv ON v.id = dv.venta_id
        INNER JOIN productos p ON dv.producto_id = p.id
        WHERE v.id = $ventaId";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    h2{
        text-align: center;
        font-size: 25px;
        text-transform: uppercase;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      margin: 1rem;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    a button{
    height: 25px;
    width: 100px;
    background-color: #303030;
    color: black;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    border: none;
    text-decoration: none;
    color: white;
    cursor: pointer;
    text-align: center;
}
  </style>
</head>
<body>

<h2>Detalles de la Venta</h2>

<table>
  <tr>
    <th>Cliente</th>
    <th>Producto</th>
    <th>Cantidad</th>
    <th>Subtotal</th>
  </tr>
  <?php
  if ($result->num_rows > 0) {
      // Imprimir datos de cada fila
      while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["cliente"] . "</td>";
          echo "<td>" . $row["nombre"] . "</td>";
          echo "<td>" . $row["cantidad"] . "</td>";
          echo "<td>" . $row["subtotal"] . "</td>";
          echo "</tr>";
      }
  } else {
      echo "<tr><td colspan='4'>No se encontraron detalles de la venta.</td></tr>";
  }
  ?>
</table>
<center>
<a href="..\Views\ventas.php"><button>Volver</button></a>

</center>
<?php
// Cerrar conexión
$conn->close();
?>

</body>
</html>
