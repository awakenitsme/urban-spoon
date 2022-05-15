<?php
	$mysqli = new mysqli('localhost', 'root', '1324', 'jambriento');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);	
	}
?>