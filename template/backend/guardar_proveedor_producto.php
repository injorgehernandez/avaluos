<?php
//include("seguridad.php");
require("connection.php");


$id_proveedor = $_POST["id_proveedor"];
$id_producto = $_POST["id_producto"];
$precio_venta = $_POST["precio_venta"];
$email_comercial_vende = $_POST["email_comercial_vende"];
$prefijo_pais = $_POST["prefijo_pais"];
$telefono = $_POST["telefono"];
$id_comercial_compra = $_POST["id_comercial_compra"];
$comision = $_POST["comision"];

$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];

if ($id !='') {

	

	if ($stmt = $conn->prepare("UPDATE proveedor_producto SET id_proveedor = ?, id_producto=?, precio_venta=?, email_comercial_vende=?, prefijo_pais=?, telefono=?, id_comercial_compra=?, comision=? WHERE id=?")) {
		$stmt->bind_param("ssssssssi",  $id_proveedor, $id_producto, $precio_venta, $email_comercial_vende, $prefijo_pais, $telefono, $id_comercial_compra, $comision, $id);

		if ($stmt->execute()) {

			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado el Producto del Proveedor", "success");
		    	$("#tabla_productos").load("tabla_proveedor_productos.php?id_proveedor='.$id_proveedor.'");
		    	
			</script>';
		}else{
			echo $stmt->error;

			echo "Error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM proveedor_producto WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado el Producto del Proveedor", "success");
		    	$("#tabla_productos").load("tabla_proveedor_productos.php?id_proveedor='.$id_proveedor.'");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/*Preparar la consulta*/

	if ($stmt = $conn->prepare("INSERT INTO proveedor_producto (id_proveedor, id_producto, precio_venta, email_comercial_vende, prefijo_pais, telefono, id_comercial_compra, comision) VALUES (?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("ssssssss", $id_proveedor, $id_producto, $precio_venta, $email_comercial_vende, $prefijo_pais, $telefono, $id_comercial_compra, $comision);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado el Producto del Proveedor", "success");
		    	$("#tabla_productos").load("tabla_proveedor_productos.php?id_proveedor='.$id_proveedor.'");

			</script>';
		}else{
			$stmt->error;
		}
		
		$stmt->close();
	}

  
}




