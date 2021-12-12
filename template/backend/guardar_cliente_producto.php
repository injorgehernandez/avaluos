<?php
//include("seguridad.php");
require("connection.php");


$id_cliente = $_POST["id_cliente"];
$id_producto = $_POST["id_producto"];
$precio_venta = $_POST["precio_venta"];
$email_comercial_compra = $_POST["email_comercial_compra"];
$prefijo_pais = $_POST["prefijo_pais"];
$telefono = $_POST["telefono"];
$id_comercial_venta = $_POST["id_comercial_venta"];
$comision = $_POST["comision"];

$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];

if ($id !='') {

	

	if ($stmt = $conn->prepare("UPDATE cliente_producto SET id_cliente = ?, id_producto=?, precio_venta=?, email_comercial_compra=?, prefijo_pais=?, telefono=?, id_comercial_venta=?, comision=? WHERE id=?")) {
		$stmt->bind_param("ssssssssi",  $id_cliente, $id_producto, $precio_venta, $email_comercial_compra, $prefijo_pais, $telefono, $id_comercial_venta, $comision, $id);

		if ($stmt->execute()) {

			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado el Producto del Cliente", "success");
		    	$("#tabla_productos").load("tabla_cliente_productos.php?id_cliente='.$id_cliente.'");
		    	
			</script>';
		}else{
			echo $stmt->error;

		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM cliente_producto WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado el Producto del Cliente", "success");
		    	$("#tabla_productos").load("tabla_cliente_productos.php?id_cliente='.$id_cliente.'");
		   
			</script>';
		}else{
			$stmt->error;
		}
		
		$stmt->close();
	}


    
}else{
	/*Preparar la consulta*/

	if ($stmt = $conn->prepare("INSERT INTO cliente_producto (id_cliente, id_producto, precio_venta, email_comercial_compra, prefijo_pais, telefono, id_comercial_venta, comision) VALUES (?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("ssssssss", $id_cliente, $id_producto, $precio_venta, $email_comercial_compra, $prefijo_pais, $telefono, $id_comercial_venta, $comision);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado el Producto del Cliente", "success");
		    	$("#tabla_productos").load("tabla_cliente_productos.php?id_cliente='.$id_cliente.'");

			</script>';
		}else{
			$stmt->error;
		}
		
		$stmt->close();
	}

  
}




