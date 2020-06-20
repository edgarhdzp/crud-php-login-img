<?php
session_start();
	require("querys/conexion.php");

	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$query="SELECT * FROM usuarios WHERE usuario='$user' AND tipo='admin'";
	$resultado=mysqli_query($conexion,$query);
	while($fila=mysqli_fetch_array($resultado)){
		if($pass==$fila['password']){
			$_SESSION['id']=$fila['id'];
			$_SESSION['usuarioa']=$fila['usuario'];
			echo "<script>location.href='admin/inicioadmin.php'</script>";

}
}
$query="SELECT * FROM usuarios  WHERE tipo='user'";
	$resultado=mysqli_query($conexion,$query);
	while($fila=mysqli_fetch_array($resultado)){
		if($pass==$fila['password']){
			$_SESSION['id']=$fila['id'];
			$_SESSION['usuariou']=$fila['usuario'];
			echo "<script>location.href='user/iniciouser.php'</script>";

}
}


			echo '<script>alert("CONTRASEÑA O USUARIO INCORRECTO")</script> ';
			echo "<script>location.href='index.php'</script>";

?>