<?php
//include("seguridad.php");
require("connection.php");

$sql = "SELECT id, producto, temperatura_optima, comision_compra,comision_venta FROM producto";


if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
