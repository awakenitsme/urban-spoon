<?php
	
	require 'conexion.php';
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$curso = $_POST['curso'];
	$telefono = $_POST['telefono'];
	$combo = $_POST['combo'];
	$sql = "UPDATE personas SET Nombre='$nombre', Curso='$curso', Telefono='$telefono', Combo='$combo' WHERE ID = '$id'";
	$resultado = $mysqli->query($sql);
	
	 if($resultado) { ?>
	 <script>
		 alert("REGISTRO MODIFICADO");
		 open('./index.php', "_self");
	 </script>|
	
		<?php } else { ?>
			<script>
		 alert("ERROR AL MODIFICAR");
	 </script>
		
	<?php } 
?>
 
