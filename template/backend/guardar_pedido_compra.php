<?php
//include("seguridad.php");
require("connection.php");



$id_comercial_compra = $_POST["id_comercial_compra"];

$id_producto = $_POST["id_producto"];
$id_proveedor = $_POST["id_proveedor"];
$precio_compra = $_POST["precio_compra"];
$fecha_carga_estimada = $_POST["fecha_carga_estimada"];
$numero_pallets = $_POST["numero_pallets"];
$peso_neto_estimado = $_POST["peso_neto_estimado"];

$peso_neto_real = $_POST["peso_neto_real"];
$referencia_carga = $_POST["referencia_carga"];
$id_direccion = $_POST["id_direccion"];

$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];



$id_factura = $_POST["id_factura"];
$no_factura = $_POST["no_factura"];

$base_imponible = $_POST["base_imponible"];
$iva = $_POST["iva"];


if ($id !='') {

	if ($stmt = $conn->prepare("UPDATE pedido_compra SET id_comercial_compra=? , id_producto=?, id_proveedor=?, precio_compra=?, fecha_carga_estimada=?, numero_pallets=?, peso_neto_estimado=?, peso_neto_real=?, referencia_carga=?, id_direccion=?  WHERE id=?"))
	{
		$stmt->bind_param("ssssssssssi",  $id_comercial_compra, $id_producto, $id_proveedor, $precio_compra, $fecha_carga_estimada, $numero_pallets, $peso_neto_estimado, $peso_neto_real, $referencia_carga, $id_direccion, $id);

		if ($stmt->execute()) {

			$id_pedido_compra = $id;

			if ($stmt2 = $conn->prepare("UPDATE pedido_compra_factura  SET no_factura=?, base_imponible=?, iva=? WHERE id_pedido=?")) {
					$stmt2->bind_param("sssi", $no_factura, $base_imponible, $iva, $id);

				if ($stmt2->execute()) {
					

					

				    $ruta = $_SERVER['DOCUMENT_ROOT'].'/sifresh/sifresh/template/uploads/pedido_compra/factura/'.$id_pedido_compra.'/';

				    if (!file_exists($ruta)) {
				      mkdir($ruta, 0777, true);
				    }

				    $nombre_archivo = $_FILES["factura"]['name'];
				    if ($nombre_archivo !='') {

				        $tipoArchivo = strtolower(pathinfo($_FILES["factura"]["name"], PATHINFO_EXTENSION));

				        $nombre_archivo = $no_factura;

				        $nombre_archivo = str_replace(' ', '', $nombre_archivo);

				        $nombre_archivo = eliminar_acentos($nombre_archivo);

				        $nombre = $nombre_archivo.".".$tipoArchivo;

				       
				        move_uploaded_file($_FILES['factura']['tmp_name'], $ruta.$nombre);

				        $factura_pdf = $ruta.$nombre;

						$stmt = $conn->prepare("UPDATE pedido_compra_factura SET  factura=? WHERE id=?");
						$stmt->bind_param("si",  $factura_pdf, $id_factura);
						$stmt->execute();
							
				    }
				}else{
					echo $stmt2->error;
				}
				
				$stmt2->close();
			}
	

			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado el Pedido de compra", "success");
		    	$("#contenido").load("resumen_pedidos.php");
		    	
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM pedido_compra WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado el Pedido de compra", "success");
		    	$("#contenido").load("resumen_pedidos.php");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/* INSERTAR */


	if ($stmt = $conn->prepare("INSERT INTO pedido_compra (id_comercial_compra, id_producto, id_proveedor, precio_compra, fecha_carga_estimada, numero_pallets, peso_neto_estimado, peso_neto_real, referencia_carga, id_direccion) VALUES (?,?,?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("ssssssssss",  $id_comercial_compra, $id_producto, $id_proveedor, $precio_compra, $fecha_carga_estimada, $numero_pallets, $peso_neto_estimado, $peso_neto_real, $referencia_carga, $id_direccion);

		

		if ($stmt->execute()) {


			$id_pedido_compra = $stmt->insert_id;

			if ($stmt2 = $conn->prepare("INSERT INTO pedido_compra_factura (id_pedido, no_factura, base_imponible, iva) VALUES (?,?,?,?)")) {
					$stmt2->bind_param("ssss",  $id_pedido_compra, $no_factura, $base_imponible, $iva);

				if ($stmt2->execute()) {
					

					$id_factura = $stmt2->insert_id;

				    $ruta = $_SERVER['DOCUMENT_ROOT'].'/sifresh/sifresh/template/uploads/pedido_compra/factura/'.$id_pedido_compra.'/';

				    if (!file_exists($ruta)) {
				      mkdir($ruta, 0777, true);
				    }

				    $nombre_archivo = $_FILES["factura"]['name'];
				    if ($nombre_archivo !='') {

				        $tipoArchivo = strtolower(pathinfo($_FILES["factura"]["name"], PATHINFO_EXTENSION));

				        $nombre_archivo = $no_factura;

				        $nombre_archivo = str_replace(' ', '', $nombre_archivo);

				        $nombre_archivo = eliminar_acentos($nombre_archivo);

				        $nombre = $nombre_archivo.".".$tipoArchivo;

				       
				        move_uploaded_file($_FILES['factura']['tmp_name'], $ruta.$nombre);

				        $factura_pdf = $ruta.$nombre;

						$stmt = $conn->prepare("UPDATE pedido_compra_factura SET  factura=? WHERE id=?");
						$stmt->bind_param("si",  $factura_pdf, $id_factura);
						$stmt->execute();
							
				    }
				}else{
					echo $stmt2->error;
				}
				
				$stmt2->close();
			}
	
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado el Pedido de compra", "success");
		    	$("#contenido").load("resumen_pedidos.php");

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




