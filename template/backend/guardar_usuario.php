<?php
include("seguridad.php");
require("connection.php");



$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$nombre_corto = $_POST["nombre_corto"];


$direccion_residencia = $_POST["direccion_residencia"];
$cp = $_POST["cp"];
$municipio = $_POST["municipio"];
$pais = $_POST["pais"];
$eori_vat = $_POST["eori_vat"];

$email_sifresh = $_POST["email_sifresh"];
$email_pagos = $_POST["email_pagos"];



$banco_moneda = $_POST["banco_moneda"];
$banco_nombre = $_POST["banco_nombre"];
$banco_cuenta = $_POST["banco_cuenta"];
$banco_swift = $_POST["banco_swift"];
$banco_bic = $_POST["banco_bic"];

$tipo_usuario = $_POST["tipo_usuario"];
$password = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT);





$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];

if ($id !='') {

	if ($stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellidos = ?, nombre_corto=?, direccion_residencia=?, cp=?, municipio=?, pais=?, eori_vat=?, email_sifresh=?, email_pagos=?, banco_moneda=?, banco_nombre=?, banco_cuenta=?, banco_swift=?, banco_bic=?, tipo_usuario=?, password=? WHERE id=?")) {
		$stmt->bind_param("sssssssssssssssssi",  $nombre, $apellidos, $nombre_corto, $direccion_residencia, $cp, $municipio, $pais, $eori_vat, $email_sifresh, $email_pagos, $banco_moneda, $banco_nombre, $banco_cuenta, $banco_swift, $banco_bic, $tipo_usuario, $password, $id);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado el Usuario", "success");
		    	$("#contenido").load("resumen_usuarios.php");
		    	
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM usuario WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado el Usuario", "success");
		    	$("#contenido").load("resumen_usuarios.php");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/*Preparar la consulta*/

	if ($stmt = $conn->prepare("INSERT INTO usuario (nombre, apellidos, nombre_corto, direccion_residencia, cp, municipio, pais, eori_vat, email_sifresh, email_pagos, banco_moneda, banco_nombre, banco_cuenta, banco_swift, banco_bic, tipo_usuario, password) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("sssssssssssssssss",$nombre, $apellidos, $nombre_corto, $direccion_residencia, $cp, $municipio, $pais, $eori_vat, $email_sifresh, $email_pagos, $banco_moneda, $banco_nombre, $banco_cuenta, $banco_swift, $banco_bic, $tipo_usuario, $password);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado el Usuario", "success");
		    	$("#contenido").load("resumen_usuarios.php");

			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}

  
}




