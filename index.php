<?php
	require 'conexion.php';
	
	$where = "";

	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE Nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM personas $where";
	$resultado = $mysqli->query($sql);
	
?>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/tabla.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <h2 style="text-align:center">Jambriento!</h2>
        </div>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="row">
            <div class="content">
                <div class="add-btn">
                    <a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
                </div>
                <div class="search-bar">
                    <b>Nombre: </b><input type="text" id="campo" name="campo" />
                    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                </div>
            </div>
            </form>
        </div>

        <br>

        <div class="row table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Curso</th>
                        <th>Descripcion</th>
                        <th>Combo</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Nombre']; ?></td>
                        <td><?php echo $row['Curso']; ?></td>
                        <td><?php echo $row['Descripcion']; ?></td>
                        <td><?php echo $row['Combo']; ?></td>
                        <td><a href="modificar.php?id=<?php echo $row['ID']; ?>"><span
                                    class="btn btn-primary"></span></a></td>
                        <td><a href="eliminar.php?id=<?php echo $row['ID']; ?>" data-toggle="modal"><span
                                    class="btn btn-warning"></span></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
                </div>

                <div class="modal-body">
                    ¿Desea eliminar este registro?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>