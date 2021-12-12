<?php
include("seguridad.php");
require("connection.php");



$servicio_que_presta = $_POST["servicio_que_presta"];
$nombre_fiscal = $_POST["nombre_fiscal"];
$nombre_corto = $_POST["nombre_corto"];


$direccion_fiscal = $_POST["direccion_fiscal"];
$cp = $_POST["cp"];
$municipio = $_POST["municipio"];
$pais = $_POST["pais"];
$eori_vat = $_POST["eori_vat"];


$email_pagos = $_POST["email_pagos"];
$email_comercial = $_POST["email_comercial"];
$telefono_comercial = $_POST["telefono_comercial"];



$banco_moneda = $_POST["banco_moneda"];
$banco_nombre = $_POST["banco_nombre"];
$banco_cuenta = $_POST["banco_cuenta"];
$banco_swift = $_POST["banco_swift"];
$banco_bic = $_POST["banco_bic"];



$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];

if ($id !='') {

	if ($stmt = $conn->prepare("UPDATE prestador_servicios SET servicio_que_presta = ?, nombre_fiscal = ?, nombre_corto=?, direccion_fiscal=?, cp=?, municipio=?, pais=?, eori_vat=?, email_comercial=?, email_pagos=?,telefono_comercial=?, banco_moneda=?, banco_nombre=?, banco_cuenta=?, banco_swift=?, banco_bic=? WHERE id=?")) {
		$stmt->bind_param("ssssssssssssssssi", $servicio_que_presta, $nombre_fiscal, $nombre_corto, $direccion_fiscal, $cp, $municipio, $pais, $eori_vat, $email_comercial, $email_pagos, $telefono_comercial, $banco_moneda, $banco_nombre, $banco_cuenta, $banco_swift, $banco_bic, $id);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado el Prestador de servicios", "success");
		    	$("#contenido").load("resumen_prestador_servicios.php");
		    	
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM prestador_servicios WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado el Prestador de servicios", "success");
		    	$("#contenido").load("resumen_prestador_servicios.php");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/*Preparar la consulta*/

	if ($stmt = $conn->prepare("INSERT INTO prestador_servicios ( servicio_que_presta,nombre_fiscal, nombre_corto, direccion_fiscal, cp, municipio, pais, eori_vat, email_comercial, email_pagos, telefono_comercial, banco_moneda, banco_nombre, banco_cuenta, banco_swift, banco_bic) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("ssssssssssssssss",$servicio_que_presta, $nombre_fiscal, $nombre_corto, $direccion_fiscal, $cp, $municipio, $pais, $eori_vat, $email_comercial, $email_pagos, $telefono_comercial, $banco_moneda, $banco_nombre, $banco_cuenta, $banco_swift, $banco_bic);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado el Prestador de servicios", "success");
		    	$("#contenido").load("resumen_prestador_servicios.php");

			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}

  
}




