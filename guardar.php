<?php
	require 'conexion.php';
	if(isset($_POST['btn_enviar'])){
		$nombre = $_POST['nombre'];
		$curso = $_POST['curso'];
		$descripcion = $_POST['descripcion'];
		$combo = $_POST['combo'];
		
		$sql = "INSERT INTO personas (Nombre, Curso, Descripcion, Combo) VALUES ('$nombre', '$curso', '$descripcion', '$combo');";
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

 
