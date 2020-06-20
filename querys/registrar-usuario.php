<?php
	 
include 'conexion.php';
	 
	 if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}
	 
	 $buscarUsuario = "SELECT * FROM usuarios
	 WHERE usuario = '$_POST[username]' ";
	 
	 $result = $conexion->query($buscarUsuario);
	 
	 $count = mysqli_num_rows($result);
	 
	 if ($count == 1) {
	 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
	 
	 echo "<a href='agregarusuario.php'>Por favor escoga otro Nombre</a>";
	 }
	 else{
	 
	 $query = "INSERT INTO usuarios (usuario, password, tipo, nombre, ape_pat, ape_mat, departamento)
	           VALUES ('$_POST[username]', '$_POST[password]', '$_POST[tipo]', '$_POST[nombre]', '$_POST[paterno]', '$_POST[materno]', '$_POST[depa]')";
	 
	 if ($conexion->query($query) === TRUE) {
	  
	 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
	 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
	 echo "<script>location.href='../admin/usuarios.php'</script>";
	 }
	 
	 else {
	 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
	   }
	 }
	 mysqli_close($conexion);
	?>
