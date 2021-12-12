<?php
//include("seguridad.php");
require("connection.php");


$id_proveedor = $_POST["id_proveedor"];
$calle = $_POST["calle"];
$numero_interior = $_POST["numero_interior"];
$numero_exterior = $_POST["numero_exterior"];
$cp = $_POST["cp"];
$municipio = $_POST["municipio"];
$estado = $_POST["estado"];
$pais = $_POST["pais"];

$id = $_POST["id"];
$id_borrar = $_GET["id_borrar"];

if ($id !='') {

	
	if ($stmt = $conn->prepare("UPDATE proveedor_direccion SET id_proveedor = ?, calle=?, numero_interior=?, numero_exterior=?, cp=?, municipio=?, estado=?, pais=? WHERE id=?")) {
		$stmt->bind_param("ssssssssi",  $id_proveedor, $calle, $numero_interior, $numero_exterior, $cp, $municipio, $estado, $pais, $id);

		if ($stmt->execute()) {

			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado la Dirección del Provedor", "success");
		    	$("#tabla_direcciones").load("tabla_proveedor_direcciones.php?id_proveedor='.$id_proveedor.'");
		    	
			</script>';
		}else{
			echo $stmt->error;

			echo "Error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM proveedor_direccion WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado la Direccion del Provedor", "success");
		    	$("#tabla_direcciones").load("tabla_proveedor_direcciones.php?id_proveedor='.$id_proveedor.'");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/*Preparar la consulta*/

	if ($stmt = $conn->prepare("INSERT INTO proveedor_direccion (id_proveedor, calle, numero_interior, numero_exterior, cp, municipio, estado, pais) VALUES (?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("ssssssss", $id_proveedor, $calle, $numero_interior, $numero_exterior, $cp, $municipio, $estado, $pais);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado la Dirección del Provedor", "success");
		    	$("#tabla_direcciones").load("tabla_proveedor_direcciones.php?id_proveedor='.$id_proveedor.'");

			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}

  
}




