<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="ISO-8859-2">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">  
    <link rel="stylesheet" href="../css/style.css">  
    <title>INVENTARIO</title>
   <script type="text/javascript">
window.print();
</script>
  </head>
  <body>

    <?php
    include("../querys/conexion.php");
    $query="SELECT * FROM base_actual WHERE id=".$_GET['id'];

    $resultado=mysqli_query($conexion,$query);

    $inventario=mysqli_fetch_array($resultado); 

    ?>

<div class="table">
<table width="750" border="0" cellspacing="5">

  <tr>
   <td colspan="2"><img src="../imagenes/logo.jpg" /></td>
    <td colspan="2" ><h3 align="center">MUNICIPIO DE SAN MIGUEL DE ALLENDE GTO.TESORERÍA MUNICIPAL ALTA INVENTARIO ACTIVO FIJO</h3></td>
  </tr>
    <td colspan="2"><b>Descripción:<?php echo $inventario['descripcion']; ?></td>
    <td><b>N° inventario:<?php echo $inventario['num_inventario']; ?></td>
  <tr>
    <td colspan="4"><b>Generales del Activo:<?php echo $inventario['observacion']; ?></td>
  </tr>
  <tr>
    <td><b>Nivel 4:<?php echo $inventario['niv_4']; ?></td>
    <td><b>Marca:<?php echo $inventario['marca']; ?></td>
  </tr>
  <tr>
    <td><b>Modelo:<?php echo $inventario['modelo']; ?></td>
    <td><b>Serie:<?php echo $inventario['serie']; ?></td>
  </tr>
  <tr>
    <td><b>Area o departamento:<?php echo $inventario['departamento']; ?></td>
    <td><b>Observacion general:<?php echo $inventario['obs_del_bien']; ?></td>
  </tr>
  <tr>
    <td><b>Foto:<?php  
    if( empty($inventario['foto']) ){
      echo "<img width='500px' height='300px' src='../imagenes/no_photo.png' />";
    }else{
      echo "<img width='500px' height='300px' src='" . $inventario['foto'] ."' />";
    }
  ;?></b></td>
  </tr>
  <tr>
    <td colspan="4"><br><br><center>Resguardo de Inventario<br></center>
   <p> <h5 align="justify">RECIBI A MI CARGO PARA EL SERVICIO DEL DEPARTAMENTO LO QUE ESTE RESGUARDO INDICA, POR LO QUE LO FIRMO DE CONFORMIDAD, DE ACUERDO CON LO QUE ESTABLECE EL ART.11 FRACCIÓN. IV DE LA LEY DE RESPONSABILIDADES ADMINISTRATIVAS DE LOS SERVIDORES PUBLICOS DEL ESTADO DE GUANAJUATO Y SUS MUNICIPIOS. EL PRESENTE RESGUARDO ES EMITIDO ATENDIENDO A LO QUE SE ESTABLECE LAS REGLAS ESPECIFICAS DEL REGISTRO Y VALORACION DEL PATRIMONIO, EMITIDAS POR EL CONSEJO NACIONAL DE ARMONIZACION CONTABLE.<h5></p><br><br></td> 
  </tr>
    <td colspan="2"><center><b>USUARIO:<p><br><?php echo $inventario['nom_usuario']; ?></td></center>
      </tr>
</table>


</body>
</html>    