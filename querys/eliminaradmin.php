<?php

header('Location:../admin/inicioadmin.php');

include 'conexion.php';

$query='DELETE FROM base_actual WHERE id='.$_GET['id'];

mysqli_query($conexion,$query);

mysqli_close($conexion);