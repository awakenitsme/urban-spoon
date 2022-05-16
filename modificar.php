<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM personas WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>	
		<link rel="stylesheet" href="./css/style.css">
	</head>
	
	<body class="modificar">
	<form class="form-horizontal" method="POST" action="update.php" autocomplete="off" class="form">
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
		
			
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
				
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>" required>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['ID']; ?>" />
				
				
					<label for="email" class="col-sm-2 control-label">Curso</label>
			
						<input type="text" class="form-control" id="curso" name="curso" placeholder="Curso" value="<?php echo $row['Curso']; ?>"  required>
				
				
		
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
			
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['Telefono']; ?>" >
		
			
				
			
					<label for="combo" class="col-sm-2 control-label">Combo</label>
				
						<select class="form-control" id="combo" name="combo">
<<<<<<< HEAD
							<option <?php if($row['Combo']=='PIZZA CON REFRESCO') echo 'selected'; ?>>Pizza con refresco</option>
							<option <?php if($row['Combo']=='NACHOS CON QUESO Y REFRESCO') echo 'selected'; ?>>Nachos con queso y refresco</option>
							<option <?php if($row['Combo']=='1 CROQUETA, 1 QUIPE, 1 PASTELITO') echo 'selected'; ?>>1 Croqueta, 1 Quipe, 1 Pastelito</option>
							<option <?php if($row['Combo']=='PALOMITAS CON REFRESCO') echo 'selected'; ?>>Palomitas con refresco</option>
							<option <?php if($row['Combo']=='DONAS CON REFRESCO') echo 'selected'; ?>>Donas con refresco</option>
							<option <?php if($row['Combo']=='SANDWICH CON JUGO NATURAL') echo 'selected'; ?>>Sandwich con jugo natural</option>
							<option <?php if($row['Combo']=='SANDWICH DE PIZZA CON REFRESCO') echo 'selected'; ?>>Sandwich de pizza con refresco</option>

=======
							<option value="Combo1" <?php if($row['Combo']=='PIZZA CON REFRESCO') echo 'selected'; ?>>Pizza con refresco</option>
							<option value="Combo2" <?php if($row['Combo']=='NACHOS CON QUESO Y REFRESCO') echo 'selected'; ?>>Nachos con queso y refresco</option>
							<option value="Combo3" <?php if($row['Combo']=='1 CROQUETA, 1 QUIPE, 1 PASTELITO') echo 'selected'; ?>>1 Croqueta, 1 Quipe, 1 Pastelito</option>
							<option value="Combo4" <?php if($row['Combo']=='PALOMITAS CON REFRESCO') echo 'selected'; ?>>Palomitas con refresco</option>
>>>>>>> 25433f7fd6228db301ceeacedfb31b76c03fd604
						</select>
					
				
				<div class="form-group">
				
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
				
				</div>
	
		</div>
		</form>
	</body>
</html>