<?php
//include("seguridad.php");
require("connection.php");

$id_proveedor = $_GET["id_proveedor"];



$sql = "SELECT id, calle, numero_interior, numero_exterior, cp, municipio, estado, pais FROM proveedor_direccion where id_proveedor = '".$id_proveedor."'";


if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
