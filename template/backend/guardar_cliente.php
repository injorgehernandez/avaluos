<?php
//include("seguridad.php");
require("connection.php");



$nombre_fiscal = $_POST["nombre_fiscal"];
$direccion_fiscal = $_POST["direccion_fiscal"];
$nombre_corto = $_POST["nombre_corto"];
$cp = $_POST["cp"];
$municipio = $_POST["municipio"];
$pais = $_POST["pais"];
$eori_vat = $_POST["eori_vat"];
$iva = $_POST["iva"];

$banco_moneda = $_POST["banco_moneda"];
$banco_nombre = $_POST["banco_nombre"];
$banco_cuenta = $_POST["banco_cuenta"];
$banco_swift = $_POST["banco_swift"];
$banco_bic = $_POST["banco_bic"];
//$banco_pdf = $_POST["banco_pdf"];

$email_pagos = $_POST["email_pagos"];

$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];

if ($id !='') {

	if ($stmt = $conn->prepare("UPDATE cliente SET nombre_fiscal=?, direccion_fiscal=?, nombre_corto=?, cp=?, municipio=?, pais=?, eori_vat=?, iva=?, banco_moneda=?, banco_nombre=?, banco_cuenta=?, banco_swift=?, banco_bic=?, banco_pdf=?, email_pagos=? WHERE id=?"))
	{
		$stmt->bind_param("sssssssssssssssi",  $nombre_fiscal, $direccion_fiscal, $nombre_corto, $cp, $municipio, $pais, $eori_vat, $iva, $banco_moneda, $banco_nombre, $banco_cuenta, $banco_swift, $banco_bic,$banco_pdf, $email_pagos, $id);

		if ($stmt->execute()) {

			$ruta = $_SERVER['DOCUMENT_ROOT'].'/sifresh/sifresh/template/uploads/clientes/'.$id_cliente.'/';

		    if (!file_exists($ruta)) {
		      mkdir($ruta, 0777, true);
		    }

		    $nombre_archivo = $_FILES["banco_pdf"]['name'];
		    if ($nombre_archivo !='') {

		        $tipoArchivo = strtolower(pathinfo($_FILES["banco_pdf"]["name"], PATHINFO_EXTENSION));

		        $nombre_archivo = $nombre_corto."_".$banco_cuenta;

		        $nombre_archivo = str_replace(' ', '', $nombre_archivo);

		        $nombre_archivo = eliminar_acentos($nombre_archivo);

		        $nombre = $nombre_archivo.".".$tipoArchivo;

		       
		        move_uploaded_file($_FILES['banco_pdf']['tmp_name'], $ruta.$nombre);

		        $banco_pdf = $ruta.$nombre;

				$stmt = $conn->prepare("UPDATE cliente SET  banco_pdf=? WHERE id=?");
				$stmt->bind_param("si",  $banco_pdf, $id_cliente);
				$stmt->execute();
				
					
		    }

			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado el cliente", "success");
		    	$("#contenido").load("resumen_cliente.php");
		    	
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM cliente WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado el cliente", "success");
		    	$("#contenido").load("resumen_cliente.php");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/* INSERTAR */


	if ($stmt = $conn->prepare("INSERT INTO cliente (nombre_fiscal, direccion_fiscal, nombre_corto, cp, municipio, pais, eori_vat, iva, banco_moneda, banco_nombre, banco_cuenta, banco_swift, banco_bic, banco_pdf, email_pagos) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("sssssssssssssss", $nombre_fiscal, $direccion_fiscal, $nombre_corto, $cp, $municipio, $pais, $eori_vat, $iva, $banco_moneda, $banco_nombre, $banco_cuenta, $banco_swift, $banco_bic,$banco_pdf, $email_pagos);

		if ($stmt->execute()) {

			/* SUBIR ARCHIVO */

			$id_cliente = $stmt->insert_id;

		    $ruta = $_SERVER['DOCUMENT_ROOT'].'/sifresh/sifresh/template/uploads/clientes/'.$id_cliente.'/';

		    if (!file_exists($ruta)) {
		      mkdir($ruta, 0777, true);
		    }

		    $nombre_archivo = $_FILES["banco_pdf"]['name'];
		    if ($nombre_archivo !='') {

		        $tipoArchivo = strtolower(pathinfo($_FILES["banco_pdf"]["name"], PATHINFO_EXTENSION));

		        $nombre_archivo = $nombre_corto."_".$banco_cuenta;

		        $nombre_archivo = str_replace(' ', '', $nombre_archivo);

		        $nombre_archivo = eliminar_acentos($nombre_archivo);

		        $nombre = $nombre_archivo.".".$tipoArchivo;

		       
		        move_uploaded_file($_FILES['banco_pdf']['tmp_name'], $ruta.$nombre);

		        $banco_pdf = $ruta.$nombre;

				$stmt = $conn->prepare("UPDATE cliente SET  banco_pdf=? WHERE id=?");
				$stmt->bind_param("si",  $banco_pdf, $id_cliente);
				$stmt->execute();
				
					
		    }
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado el cliente", "success");
		    	$("#contenido").load("resumen_cliente.php");

			</script>';
		}else{
			echo $stmt->error;
		}
		
		$stmt->close();
	}

  
}



function eliminar_acentos($cadena){
        
    //Reemplazamos la A y a
    $cadena = str_replace(
    array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
    array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
    $cadena
    );

    //Reemplazamos la E y e
    $cadena = str_replace(
    array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
    array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
    $cadena );

    //Reemplazamos la I y i
    $cadena = str_replace(
    array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
    array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
    $cadena );

    //Reemplazamos la O y o
    $cadena = str_replace(
    array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
    array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
    $cadena );

    //Reemplazamos la U y u
    $cadena = str_replace(
    array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
    array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
    $cadena );

    //Reemplazamos la N, n, C y c
    /*$cadena = str_replace(
    array('Ñ', 'ñ', 'Ç', 'ç'),
    array('N', 'n', 'C', 'c'),
    $cadena
    );*/

    $cadena = str_replace(" ", "", $cadena);
    
    return $cadena;
}




