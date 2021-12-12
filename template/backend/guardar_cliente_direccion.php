<?php
//include("seguridad.php");
require("connection.php");


$id_cliente = $_POST["id_cliente"];
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

	
	if ($stmt = $conn->prepare("UPDATE cliente_direccion SET id_cliente = ?, calle=?, numero_interior=?, numero_exterior=?, cp=?, municipio=?, estado=?, pais=? WHERE id=?")) {
		$stmt->bind_param("ssssssssi",  $id_cliente, $calle, $numero_interior, $numero_exterior, $cp, $municipio, $estado, $pais, $id);

		if ($stmt->execute()) {

			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha actualizado la Dirección del Cliente", "success");
		    	$("#tabla_direcciones").load("tabla_cliente_direcciones.php?id_cliente='.$id_cliente.'");
		    	
			</script>';
		}else{
			echo $stmt->error;

			echo "Error";
		}
		
		$stmt->close();
	}
	
    
}else if (isset($id_borrar)) {


    if ($stmt = $conn->prepare("DELETE FROM cliente_direccion WHERE id = ?")) {
		$stmt->bind_param("i", $id_borrar);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha eliminado la Direccion del Cliente", "success");
		    	$("#tabla_direcciones").load("tabla_cliente_direcciones.php?id_cliente='.$id_cliente.'");
		   
			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}


    
}else{
	/*Preparar la consulta*/

	if ($stmt = $conn->prepare("INSERT INTO cliente_direccion (id_cliente, calle, numero_interior, numero_exterior, cp, municipio, estado, pais) VALUES (?,?,?,?,?,?,?,?)")) {
		$stmt->bind_param("ssssssss", $id_cliente, $calle, $numero_interior, $numero_exterior, $cp, $municipio, $estado, $pais);

		if ($stmt->execute()) {
			echo '
		    <script type="text/javascript">

		    	swal("¡Buen trabajo!", "Se ha registrado la Dirección del Cliente", "success");
		    	$("#tabla_direcciones").load("tabla_cliente_direcciones.php?id_cliente='.$id_cliente.'");

			</script>';
		}else{
			echo "error";
		}
		
		$stmt->close();
	}

  
}




