<?php
//include("seguridad.php");
require("connection.php");

$sql = "SELECT id, nombre_fiscal, direccion_fiscal,eori_vat,pais FROM proveedor";


if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
