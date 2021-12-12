<?php
//include("seguridad.php");
require("connection.php");



$sql = "SELECT pedido_compra.id, proveedor.nombre_fiscal, id_producto, fecha_carga_estimada,numero_pallets, peso_neto_estimado FROM pedido_compra INNER JOIN proveedor ON pedido_compra.id_proveedor = proveedor.id";


if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
