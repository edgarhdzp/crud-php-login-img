<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="ISO-8859-2">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.css">	
		<link rel="stylesheet" href="../css/style.css">	
		<title>INVENTARIO</title>
	
	</head>
	<body>
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


			<form action="iniciouser.php" method="post">
				
				<input type="text" name="buscar" autofocus
				<?php 
					if (isset($_POST['buscar'])){ 
						echo "value=". $_POST['buscar']; 
					} 
				?>
				>
				<input type="submit" value="BUSCAR">
			</form>

			<div class="table-responsive">
  			<table class="table">
			<table class="table table-striped table-hover">
			<tr>

				<th>NUMERO INVENTARIO</th>
				<th>DESCRIPCION</th>
				<th>SERIE</th>
				<th>MARCA</th>
				<th>DETALLES</th>
				<th>EDITAR</th>

			</tr>
			
			<?php 
			include '../querys/funcionesuser.php';

			if (isset($_POST['buscar'])) {
				search();
			}else{
				getAll();
			}
			
			?>

		</table>
		</div>

  </table>
  				<div class="form-group">
					<div class="col-sm-12">
						<form action="agregarinventariouser.php">
						<center><button type="submit" class="btn btn-primary" href="agregarinventariouser.php">Agregar</button></center>
						</form>
					</div>
					
</div>
	<br><br>
	 


		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
</html>