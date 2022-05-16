<?php
	require 'conexion.php';
<<<<<<< HEAD
	if(isset($_POST['btn_enviar'])){
		$nombre = $_POST['nombre'];
		$curso = $_POST['curso'];
		$telefono = $_POST['telefono'];
		$combo = $_POST['combo'];
		
		$sql = "INSERT INTO personas (Nombre, Curso, Telefono, Combo) VALUES ('$nombre', '$curso', '$telefono', '$combo');";
		$resultado = $mysqli->query($sql);
		
	
		 if($resultado) { ?>
		 <script>
			 alert("REGISTRO GUARDADO");
	
			 
		 </script>
			
			<?php } else { ?>
				<script>
			 alert("ERROR AL GUARDAR");
		 </script>
		
		<?php } 
	}
?>
=======
	
	$nombre = $_POST['nombre'];
	$curso = $_POST['curso'];
	$telefono = $_POST['telefono'];
	$combo = $_POST['combo'];
	
	$sql = "INSERT INTO personas (Nombre, Curso, Telefono, Combo) VALUES ('$nombre', '$curso', '$telefono', '$combo');";
	$resultado = $mysqli->query($sql);
	

	 if($resultado) { ?>
	 <script>
		 alert("REGISTRO GUARDADO");
		 
	 </script>
		
		<?php } else { ?>
			<script>
		 alert("ERROR AL GUARDAR");
	 </script>
	
	<?php } ?>
>>>>>>> 25433f7fd6228db301ceeacedfb31b76c03fd604

 
