<?php
	
	require 'conexion.php';
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$curso = $_POST['curso'];
	$descripcion = $_POST['descripcion'];
	$combo = $_POST['combo'];
	$sql = "UPDATE personas SET Nombre='$nombre', Curso='$curso', Descripcion='$descripcion', Combo='$combo' WHERE ID = '$id'";
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
 
