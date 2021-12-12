<?php
include("seguridad.php");
require("connection.php");



$nombre_fiscal = $_POST["nombre_fiscal"];
$direccion_fiscal = $_POST["direccion_fiscal"];
$eori_vat = $_POST["eori_vat"];
$pais = $_POST["pais"];
$email = $_POST["email"];
$banco_nombre = $_POST["banco_nombre"];
$banco_cuenta = $_POST["banco_cuenta"];
$banco_swift = $_POST["banco_swift"];
$banco_bic = $_POST["banco_bic"];

$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];

if ($id !='') {

	if ($stmt = $conn->prepare("UPDATE transportista SET nombre_fiscal = ?, direccion_fiscal=?, eori_vat=?, pais=?, email=?, banco_nombre=?, banco_cuenta=?, banco_swift=?, banco_bic=? WHERE id=?")) {
		$stmt->bind_param("sssssssssi",  $nombre_fiscal, $direccion_fiscal, $eori_vat, $pais, $email, $banco_nombre, $banco_cuenta, $banco_swift, $banco_bic, $id);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado el Transportista", "success");
		    	$("#contenido").load("resumen_ubicaciones.php");
		    	
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM transportista WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado el Transportista", "success");
		    	$("#contenido").load("resumen_ubicaciones.php");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/*Preparar la consulta*/

	if ($stmt = $conn->prepare("INSERT INTO transportista (nombre_fiscal, direccion_fiscal, eori_vat, pais, email,banco_nombre, banco_cuenta, banco_swift, banco_bic) VALUES (?,?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("sssssssss", $nombre_fiscal, $direccion_fiscal, $eori_vat, $pais, $email,$banco_nombre, $banco_cuenta, $banco_swift, $banco_bic);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado el Transportista", "success");
		    	$("#contenido").load("resumen_ubicaciones.php");

			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}

  
}




