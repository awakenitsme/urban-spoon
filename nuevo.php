<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.1.1.js"
		integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./css/style.css">
</head>

<body class="Body">
	<form method="POST" autocomplete="off" class="form">
		<div class="container">

			<h3>NUEVO REGISTRO</h3>
			<label for="nombre" class="col-sm-2 control-label">Nombre</label>

			<input type="text" class="form-control" id="nombre" name="nombre" required>
			<label for="Curso" class="col-sm-2 control-label">Curso</label>

			<select class="form-control" id="curso" name="curso" required>
				<optgroup label="Primaria">
					<option>1ro de primaria</option>
					<option>2do de primaria</option>
					<option>3ro de primaria</option>
					<option>4to de primaria</option>
					<option>5to de primaria</option>
					<option>6to de primaria</option>
				</optgroup>
				<optgroup label="Secundaria">
					<option>1ro de secundaria</option>
					<option>2do de secundaria</option>
					<option>3ro de secundaria</option>
					<option>4to de secundaria</option>
					<option>5to de secundaria</option>
					<option>6to de secundaria</option>
				</optgroup>
				<option>Ninguno</option>
			</select>
			<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>

			<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
			<label for="combo" class="col-sm-2 control-label" required>Combo</label>

			<select class="form-control" id="combo" name="combo" required>
				<option>Pizza con refresco</option>
				<option>Nachos con queso y refresco</option>
				<option>1 Croqueta, 1 Quipe, 1 Pastelito</option>
				<option>Palomitas con refresco</option>
				<option>Donas con refresco</option>
				<option>Sandwich con jugo natural</option>
				<option>Sandwich de pizza con refresco</option>
				<option>1 Croissant relleno de crema de avellana + jugo natural de 16oz</option>
				<option>1 Croissant relleno de crema de queso + jugo natural de 16oz</option>
				<option>1 Churro relleno de dulce de leche + refresco de 16oz</option>
				<option>1 Pedazo de pizza con bordes de queso + refresco de 16oz</option>
			</select>
			<div class="form-group">

				<a href="index.php" class="btn btn-default">Regresar</a>
				<button class="btn btn-primary" name='btn_enviar'>Guardar</button>

			</div>
		</div>
	</form>
	<?php
	include("guardar.php")
	?>
</body>

</html>