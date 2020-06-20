<?php
	 
include 'conexion.php';


$code = substr(md5(uniqid(rand(), true)),0, 5);

$imagen=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$extension = end(explode(".", $imagen));

$destino="../imagenes/".$code.".".$extension;

// if( empty($ruta) )
// {
// 	echo "La imagen seleccionada no es soportada";
	

// }

copy($ruta,$destino);

	 
	if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}
	 else{
	 
	 $query = "INSERT INTO base_actual (num_inventario, niv_4, descripcion, observacion, serie, marca, modelo, departamento, nom_usuario, obs_del_bien, foto)
	           VALUES ('$_POST[num_invent]', '$_POST[niv_]', '$_POST[desc]', '$_POST[obs]',  '$_POST[ser]', '$_POST[mar]', '$_POST[mod]', '$_POST[depa]', '$_POST[nom_usu]', '$_POST[obs_del]', '$destino')";
	 
	 if ($conexion->query($query) === TRUE) {
	  
	 echo "<br />" . "<h2>" . "INVENTARIO AGREGADO!" . "</h2>";
	 echo "<script>location.href='../admin/inicioadmin.php'</script>";
	 }
	 
	 }
	 mysqli_close($conexion);
	?>
