<?php
	
	header('Location:../admin/inicioadmin.php');

	include 'conexion.php';
	$code = substr(md5(uniqid(rand(), true)),0, 5);

$imagen=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$extension = end(explode(".", $imagen));

$destino="../imagenes/".$code.".".$extension;

copy($ruta,$destino);

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
	nom_usuario='".$_POST['nom_usuario']."',
	foto='$destino'
	WHERE id=".$_POST['id'];
	echo $query;
	mysqli_query($conexion,$query);

	mysqli_close($conexion);




	/*UPDATE IMAGEN
	CODIGO QUE SUBE LA IMAGEN
	$query = "UPDATE base_actual SET foto = $var_foto 
	WHERE id=$var_id";*/


