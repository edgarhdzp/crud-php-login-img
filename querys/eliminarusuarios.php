<?php

header('Location:../admin/usuarios.php');

include 'conexion.php';

$query='DELETE FROM usuarios WHERE id='.$_GET['id'];

mysqli_query($conexion,$query);

mysqli_close($conexion);