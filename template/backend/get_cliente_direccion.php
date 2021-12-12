<?php
//include("seguridad.php");
require("connection.php");

$id_cliente = $_GET["id_cliente"];



$sql = "SELECT id, calle, numero_interior, numero_exterior, cp, municipio, estado, pais FROM cliente_direccion where id_cliente = '".$id_cliente."'";


if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }
  echo json_encode($rows);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
