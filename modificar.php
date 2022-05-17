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
	<script src="https://code.jquery.com/jquery-3.1.1.js"
		integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
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

			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
				value="<?php echo $row['Nombre']; ?>" required>

			<input type="hidden" id="id" name="id" value="<?php echo $row['ID']; ?>" />


			<label for="curso" class="col-sm-2 control-label">Curso</label>

			<select class="form-control" id="curso" name="curso" required>
				<optgroup label="Primaria">
						<option <?php if($row['Curso']=='1ro de primaria' ) echo 'selected' ; ?>>1ro de primaria</option>
						<option <?php if($row['Curso']=='2do de primaria' ) echo 'selected' ; ?>>2do de primaria</option>
						<option <?php if($row['Curso']=='3ro de primaria' ) echo 'selected' ; ?>>3ro de primaria</option>
						<option <?php if($row['Curso']=='4to de primaria' ) echo 'selected' ; ?>>4to de primaria</option>
						<option <?php if($row['Curso']=='5to de primaria' ) echo 'selected' ; ?>>5to de primaria</option>
						<option <?php if($row['Curso']=='6to de primaria' ) echo 'selected' ; ?>>6to de primaria</option>
					</optgroup>
					<optgroup label="Secundaria">
						<option <?php if($row['Curso']=='1ro de secundaria' ) echo 'selected' ; ?>>1ro de secundaria</option>
						<option <?php if($row['Curso']=='2do de secundaria' ) echo 'selected' ; ?>>2do de secundaria</option>
						<option <?php if($row['Curso']=='3ro de secundaria' ) echo 'selected' ; ?>>3ro de secundaria</option>
						<option <?php if($row['Curso']=='4to de secundaria' ) echo 'selected' ; ?>>4to de secundaria</option>
						<option <?php if($row['Curso']=='5to de secundaria' ) echo 'selected' ; ?>>5to de secundaria</option>
						<option <?php if($row['Curso']=='6to de secundaria' ) echo 'selected' ; ?>>6to de secundaria</option>
					</optgroup>
				<option <?php if($row['Curso']=='Ninguno' ) echo 'selected' ; ?>>Ninguno</option>
			</select>



			<label for="telefono" class="col-sm-2 control-label">Telefono</label>

			<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono"
				value="<?php echo $row['Telefono']; ?>">




			<label for="combo" class="col-sm-2 control-label">Combo</label>

			<select class="form-control" id="combo" name="combo">
				<option <?php if($row['Combo']=='Pizza con refresco' ) echo 'selected' ; ?>>Pizza con refresco</option>
				<option <?php if($row['Combo']=='Nachos con queso y refresco' ) echo 'selected' ; ?>>Nachos con queso y
					refresco</option>
				<option <?php if($row['Combo']=='1 Croqueta, 1 Quipe, 1 Pastelito' ) echo 'selected' ; ?>>1 Croqueta, 1
					Quipe, 1 Pastelito</option>
				<option <?php if($row['Combo']=='Palomitas con refresco' ) echo 'selected' ; ?>>Palomitas con refresco
				</option>
				<option <?php if($row['Combo']=='Donas con refresco' ) echo 'selected' ; ?>>Donas con refresco</option>
				<option <?php if($row['Combo']=='Sandwich con jugo natural' ) echo 'selected' ; ?>>Sandwich con jugo
					natural</option>
				<option <?php if($row['Combo']=='Sandwich de pizza con refresco' ) echo 'selected' ; ?>>Sandwich de
					pizza con refresco</option>
				<option <?php if($row['Combo']=='1 Croissant relleno de crema de avellana + jugo natural de 16oz' ) echo 'selected' ; ?>>1 Croissant relleno de crema de avellana + jugo natural de 16oz</option>
				<option <?php if($row['Combo']=='1 Croissant relleno de crema de queso + jugo natural de 16oz' ) echo 'selected' ; ?>>1 Croissant relleno de crema de queso + jugo natural de 16oz</option>
				<option <?php if($row['Combo']=='1 Churro relleno de dulce de leche + refresco de 16oz' ) echo 'selected' ; ?>>1 Churro relleno de dulce de leche + refresco de 16oz</option>
				<option <?php if($row['Combo']=='1 Pedazo de pizza con bordes de queso + refresco de 16oz' ) echo 'selected' ; ?>>1 Pedazo de pizza con bordes de queso + refresco de 16oz</option>
			</select>


			<div class="form-group">

				<a href="index.php" class="btn btn-default">Regresar</a>
				<button type="submit" class="btn btn-primary">Guardar</button>

			</div>

		</div>
	</form>
</body>

</html>