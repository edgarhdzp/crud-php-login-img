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
		<div class="container">
		<img src="../imagenes/encabezado.png">

		<?php
include 'menuadmin.php';
session_start();
if (isset($_SESSION['usuarioa'])) {

}
else {
	header('location:../index.php');
	}

?>	

	

			 <header>
	 <h1>AGREGAR NUEVO USUARIO</h1>
	 </header>

<form action="../querys/registrar-usuario.php" method="post"> 
	 
	 <hr />
	 
	 <div class="form-group">
	 <label for="nombre">Usuario:</label><br>
	 <input type="text" name="username" class="form-control" required>
	 </div>

	 <div class="form-group">
	 <label for="pass">Password:</label><br>
	 <input type="password" name="password" class="form-control" required>
	</div>

	<br>
	<label>Tipo:</label><select name="tipo" required>
	                            <option value="admin">Administrador</option>
	                            <option value="user">Usuario</option>
	                            <option value="consulta">Consultante</option></select> 
	<br><br>

	 <div class="form-group">
	 <label for="nombre">Nombre del Usuario:</label><br>
	 <input type="text" name="nombre" class="form-control" required>
	</div>

	<div class="form-group">
	 <label for="paterno">Apellido Paterno:</label><br>
	 <input type="text" name="paterno" class="form-control" required>
	</div>

	<div class="form-group">
	 <label for="materno">Apellido Materno:</label><br>
	 <input type="text" name="materno" class="form-control" required>
	</div>

	<div class="form-group">
	 <label for="depa">Departamento:</label><br>
	 <input type="text" name="depa" class="form-control" required>
	</div>
	
	 <center><input type="submit" name="submit" value="Registrarme">
	 <input type="reset" name="clear" value="Borrar"></center>
	 
	 </form>
	 
<br>
<br>
</body>
</html>