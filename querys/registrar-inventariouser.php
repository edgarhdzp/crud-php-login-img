<?php
	 
include 'conexion.php';
	 
	 if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}
	 else{
	 
	 $query = "INSERT INTO base_actual (num_inventario, niv_4, descripcion, observacion, serie, marca, modelo, departamento, nom_usuario, obs_del_bien)
	           VALUES ('$_POST[num_invent]', '$_POST[niv_]', '$_POST[desc]', '$_POST[obs]',  '$_POST[ser]', '$_POST[mar]', '$_POST[mod]', '$_POST[depa]', '$_POST[nom_usu]', '$_POST[obs_del]')";
	 
	 if ($conexion->query($query) === TRUE) {
	  
	 echo "<br />" . "<h2>" . "INVENTARIO AGREGADO!" . "</h2>";
	 echo "<script>location.href='../user/iniciouser.php'</script>";
	 }
	 
	 else {
	 echo "Error al in." . $query . "<br>" . $conexion->error; 
	   }
	 }
	 mysqli_close($conexion);
	?>
