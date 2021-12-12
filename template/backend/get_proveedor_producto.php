<?php
//include("seguridad.php");
require("connection.php");

$id_proveedor = $_GET["id_proveedor"];



$sql = "SELECT proveedor_producto.id, producto.producto, precio_venta, email_comercial_vende, telefono, usuario.nombre, comision FROM proveedor_producto INNER JOIN producto ON proveedor_producto.id_producto = producto.id INNER JOIN usuario ON proveedor_producto.id_comercial_compra = usuario.id where id_proveedor='".$id_proveedor."'";


if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
