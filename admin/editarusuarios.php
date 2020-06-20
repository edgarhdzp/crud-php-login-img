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
	$query="SELECT * FROM usuarios WHERE id=".$_GET['id'];

		$resultado=mysqli_query($conexion,$query);

		$registro=mysqli_fetch_array($resultado);	

		?>

		
		<div class="container">	
		<img src="../imagenes/encabezado.png">

		<?php
		include 'menuadmin.php';

session_start();
if (isset($_SESSION['usuarioa'])) {

}
else {
	header('location:index.php');
	}

?>	

		</nav>
			<h1 class="text-center">Editar</h1>
			
			<form action="../querys/actualizarusuarios.php" method="POST" class="form-vertical" role="form">
				
				<div class="form-group">
					<label for="usuario">USUARIO</label>
					<input value="<?php echo $registro['usuario']; ?>" type="text" class="form-control" name="usuario" id="usuario">
				</div>

				<div class="form-group">
					<label for="password">CONTRASEÑA</label>
					<input value="<?php echo $registro['password']; ?>" class="form-control" type="text" name="password" id="password">
				</div>

				<div class="form-group">
					<label for="tipo">TIPO</label>
					<input value="<?php echo $registro['tipo']; ?>" type="text" class="form-control" name="tipo" id="tipo" placeholder="USER/ADMIN">
				</div>

				<div class="form-group">
					<label for="nombre">NOMBRE</label>
					<input value="<?php echo $registro['nombre']; ?>" type="text" class="form-control" name="nombre" id="nombre" >
				</div>	

				<div class="form-group">
					<label for="ape_pat">APELLIDO PATERNO</label>
					<input value="<?php echo $registro['ape_pat']; ?>" type="text" class="form-control" name="ape_pat" id="ape_pat">
				</div>

				<div class="form-group">
					<label for="ape_mat">APELLIDO MATERNO</label>
					<input value="<?php echo $registro['ape_mat']; ?>" class="form-control" type="text" name="ape_mat" id="ape_mat">
				</div>

					<div class="form-group">
					<label for="departamento">DEPARTAMENTO</label>
					<input value="<?php echo $registro['departamento']; ?>" type="text" class="form-control" name="departamento" id="departamento">
				</div>									

					<input type="hidden" name="id" value="<?php echo $registro['id']; ?>">

				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</div>
			</form>
		</div>

		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>