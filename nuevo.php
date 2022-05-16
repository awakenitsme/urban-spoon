<html lang="es">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./css/style.css">
	</head>
	
	<body class="Body">
	<form  method="POST"  autocomplete="off" class="form">
		<div class="container">
		
				<h3 >NUEVO REGISTRO</h3>
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
		
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					<label for="Curso" class="col-sm-2 control-label">Curso</label>
				
						<input type="text" class="form-control" id="curso" name="curso" placeholder="Curso" required>
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
				
						<input type="text" class="form-control" id="telefono" name="telefono"  placeholder="Telefono">
					<label for="combo" class="col-sm-2 control-label" required>Combo</label>
					
						<select class="form-control" id="combo" name="combo">
							<option value="Combo1">Pizza con refresco</option>
							<option value="Combo2">Nachos con queso y refresco</option>
							<option value="Combo3">1 Croqueta, 1 Quipe, 1 Pastelito</option>
                            <option value="Combo4">Palomitas con refresco</option>
						</select>
				<div class="form-group">
				
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button  class="btn btn-primary">Guardar</button>
						<?php

include("./guardar.php");
?>
				</div>
				</div>
			</form>
	
	</body>
</html>