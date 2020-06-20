<?php
	
	header('Location:../admin/usuarios.php');

	include 'conexion.php';

	

	$query = "UPDATE usuarios SET 
	usuario='".$_POST['usuario']."',
	password='".$_POST['password']."',
	tipo='".$_POST['tipo']."',
	nombre='".$_POST['nombre']."',
	ape_pat='".$_POST['ape_pat']."',
	ape_mat='".$_POST['ape_mat']."',
	departamento='".$_POST['departamento']."'
	WHERE id=".$_POST['id'];
	echo $query;
	mysqli_query($conexion,$query);

	mysqli_close($conexion);

