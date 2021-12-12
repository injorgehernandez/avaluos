<?php

require("connection.php");

$password = $_POST["password"];
$correo = $_POST["correo"];




$validate =false;
/* Validate password hash*/
if ($stmt = $conn->prepare("SELECT password, nombre, apellidos FROM usuario where email_sifresh='".$correo."'")) {
	
	$stmt->execute();
	$stmt->bind_result($hash_bdd, $nombre_bdd, $apellidos_bdd);

	/* fetch values */
	while ($stmt->fetch()) {
		$hash = $hash_bdd;
		$usuario = $nombre_bdd." ".$apellidos_bdd;





		if (password_verify($password, $hash_bdd)) {
			session_start();
			$_SESSION["password"] = $password;

			$_SESSION["usuario"] = $usuario;
			
			$validate == true;
			
			header("Location: ../app/index.php");

		}
	}

	
	if ($validate == false){
		echo "<script>alert('Datos incorrectos');window.history.back();</script>";
	}

	$stmt->close();
	
	
	
}else{
	$stmt->error;
}




?>