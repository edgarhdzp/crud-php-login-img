<?php
	
	header('Location:../user/iniciouser.php');

	include 'conexion.php';

	$query = "UPDATE base_actual SET 
	num_inventario='".$_POST['num_inventario']."',
	descripcion='".$_POST['descripcion']."',
	niv_4='".$_POST['niv_4']."',
	observacion='".$_POST['observacion']."',
	serie='".$_POST['serie']."',
	marca='".$_POST['marca']."',
	modelo='".$_POST['modelo']."',
	departamento='".$_POST['departamento']."',
	obs_del_bien='".$_POST['obs_del_bien']."',
	nom_usuario='".$_POST['nom_usuario']."'
	WHERE id=".$_POST['id'];
	echo $query;
	mysqli_query($conexion,$query);

	mysqli_close($conexion);
