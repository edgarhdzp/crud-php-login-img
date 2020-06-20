<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="ISO-8859-2">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">  
    <link rel="stylesheet" href="../css/style.css">  
    <title>INVENTARIO</title>
  
  </head>
  <body>

    <?php
    include("../querys/conexion.php");
    $query="SELECT * FROM base_actual WHERE id=".$_GET['id'];

    $resultado=mysqli_query($conexion,$query);

    $inventario=mysqli_fetch_array($resultado); 
  

    ?>

    <div class="container"> 
    <img src="../imagenes/encabezado.png">

    <?php
include 'menuadmin.php';
session_start();
if (isset($_SESSION['usuarioa'])) {

}
else {
  header('location:index.php');
  }

?>  


<div class="table">
<table width="850" border="0" cellspacing="5">
 <th colspan="12">DETALLES DEL BIEN</th>

  <tr><td>N° inventario:<?php echo $inventario['num_inventario']; ?></td></tr>

  <tr><td>N° Nivel 4::<?php echo $inventario['niv_4']; ?></td></tr>

  <tr><td>Descripción:<?php echo $inventario['descripcion']; ?></td></tr>

  <tr><td>Generales del Activo:<?php echo $inventario['observacion']; ?></td></tr>

  <tr><td>Marca:<?php echo $inventario['marca']; ?></td></tr>
  
  <tr><td>Modelo:<?php echo $inventario['modelo']; ?></td></tr>
 
  <tr><td>Serie:<?php echo $inventario['serie']; ?></td></tr>

  <tr><td>Area o departamento:<?php echo $inventario['departamento']; ?></td></tr>

  <tr><td>Observacion General:<?php echo $inventario['obs_del_bien']; ?></td></tr>

  <tr><td>Foto: 
  <?php 
    if( empty($inventario['foto']) ){
      echo "<img width='350px' height='350px' src='../imagenes/no_photo.png' />";
    }else{
      echo "<img width='350px' height='350px' src='" . $inventario['foto'] ."' />";
    }
  ?>
  </td></tr>

  <tr>
    <td colspan="4">Usuario de Inventario:<?php echo $inventario['nom_usuario']; ?>
    <p><h5>RECIBI A MI CARGO PARA EL SERVICIO DEL DEPARTAMENTO LO QUE ESTE RESGUARDO INDICA, POR LO QUE LO FIRMO DE CONFORMIDAD, DE ACUERDO CON LO QUE ESTABLECE EL ART.11 FRACCIÓN. 4ta, CAPITULO 1ro DE LA LEY DE RESPONSABILIDADES ADMINISTRATIVAS DE LOS SERVIDORES PUBLICOS DEL ESTADO DE GUANAJUATO Y SUS MUNICIPIOS. EL PRESENTE RESGUARDO ES EMITIDO ATENDIENDO A LO QUE SE ESTABLECE EN EL ARICULO 255 DE LA LEY DE HACIENDO PARA LOS MUNICIPIOS DE ESTADO DE GUANAJUATO<h5></p></td>
  </tr>
</table>
<br><br>
<center><a href="../querys/imprimir.php?id=<?php echo $inventario[0] ?>" class="btn btn-info btn-lg">
<span class="glyphicon glyphicon-print"></span> IMPRIMIR</a></center>



</div>
</body>
</html>


