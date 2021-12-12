<?php
//include("seguridad.php");
require("connection.php");

$id_cliente = $_GET["id_cliente"];



$sql = "SELECT cliente_producto.id, producto.producto, precio_venta, email_comercial_compra, telefono, usuario.nombre, comision FROM cliente_producto INNER JOIN producto ON cliente_producto.id_producto = producto.id INNER JOIN usuario ON cliente_producto.id_comercial_venta = usuario.id where id_cliente = '".$id_cliente."'";


if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
