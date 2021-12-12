<?php
//include("seguridad.php");
require("connection.php");



$producto = $_POST["producto"];
$temperatura_optima = $_POST["temperatura_optima"];
$comision_compra = $_POST["comision_compra"];
$comision_venta = $_POST["comision_venta"];

$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];

if ($id !='') {

	if ($stmt = $conn->prepare("UPDATE producto SET producto=?, temperatura_optima=?, comision_compra=?, comision_venta=? WHERE id=?"))
	{
		$stmt->bind_param("ssssi",  $producto, $temperatura_optima, $comision_compra, $comision_venta, $id);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado el Producto", "success");
		    	$("#contenido").load("resumen_producto.php");
		    	
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM producto WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado el Producto", "success");
		    	$("#contenido").load("resumen_producto.php");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/*Preparar la consulta*/


	if ($stmt = $conn->prepare("INSERT INTO producto (producto, temperatura_optima, comision_compra, comision_venta) VALUES (?,?,?,?)")) {
		$stmt->bind_param("ssss", $producto, $temperatura_optima, $comision_compra, $comision_venta);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado el Producto", "success");
		    	$("#contenido").load("resumen_producto.php");

			</script>';
		}else{
			echo $stmt->error;
		}
		
		$stmt->close();
	}

  
}




