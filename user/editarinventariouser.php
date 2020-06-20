<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/style.css">
		<title>INVENTARIO</title>

	</head>
	<body>
		
		<?php
		include("../querys/conexion.php");
		$query="SELECT * FROM base_actual WHERE id=".$_GET['id'];

		$resultado=mysqli_query($conexion,$query);

		$registro=mysqli_fetch_array($resultado);	

		?>

		
		<div class="container">	
		<img src="../imagenes/encabezado.png">

		<?php
				include 'menuuser.php';


session_start();
if (isset($_SESSION['usuariou'])) {

}
else {
	header('location:index.php');
	}

?>	

		</nav>
			<h1 class="text-center">Editar</h1>
			
			<form action="actualizarinventariouser.php" method="POST" class="form-vertical" role="form">
				
				<div class="form-group">
					<label for="num_inventario">Numero inventario:</label>
					<input value="<?php echo $registro['num_inventario']; ?>" type="text" class="form-control" name="num_inventario" id="num_inventario" required>
				</div>

				<div class="form-group">
					<label for="niv_4">Nivel 4:</label>
					<input value="<?php echo $registro['niv_4']; ?>" class="form-control" type="text" name="niv_4" id="niv_4" required>
				</div>

				<div class="form-group">
					<label for="descripcion">Descripcion:</label>
					<input value="<?php echo $registro['descripcion']; ?>" class="form-control" type="text" name="descripcion" id="descripcion" required>
				</div>

				<div class="form-group">
					<label for="observacion">Observacion:</label>
					<input value="<?php echo $registro['observacion']; ?>" class="form-control" type="text" name="observacion" id="observacion" required>
				</div>

				<div class="form-group">
					<label for="serie">Serie:</label>
					<input value="<?php echo $registro['serie']; ?>" type="text" class="form-control" name="serie" id="serie" required>
				</div>

				<div class="form-group">
					<label for="marca">Marca:</label>
					<input value="<?php echo $registro['marca']; ?>" type="text" class="form-control" name="marca" id="marca" required>
				</div>		

				<div class="form-group">
					<label for="modelo">Modelo:</label>
					<input value="<?php echo $registro['modelo']; ?>" type="text" class="form-control" name="modelo" id="modelo" required>
				</div>

				<div class="form-group">
					<label for="departamento">Departamento:</label>
					<input value="<?php echo $registro['departamento']; ?>" type="text" class="form-control" name="departamento" id="departamento" required>
				</div>

					<div class="form-group">
					<label for="obs_del_bien">Observacion general:</label>
					<input value="<?php echo $registro['obs_del_bien']; ?>" type="text" class="form-control" name="obs_del_bien" id="obs_del_bien" required>
					</div>

					<div class="form-group">
					<label for="nom_usuario">Nombre de Usuario:</label>
					<input value="<?php echo $registro['nom_usuario']; ?>" type="text" class="form-control" name="nom_usuario" id="nom_usuario" required>
				</div>								

					<input type="hidden" name="id" value="<?php echo $registro['id']; ?>">

				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</div>
			</form>
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>