<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/style.css">
		<title>INVENTARIO</title>

	</head>
	<body>
		<div class="container">
		<img src="../imagenes/encabezado.png">

		<?php
		include 'menuuser.php';

session_start();
if (isset($_SESSION['usuariou'])) {


}
else {
	header('location:index.php');
	}

?>	

		</nav>			
			<h1 class="text-center">AÑADIR INVENTARIO</h1>
			<hr>
			<form action="registrar-inventariouser.php" method="post">
				
				<div class="form-group">
					<label for="num_invent">Numero inventario:</label>
					<input  type="text" class="form-control" name="num_invent" id="num_invent" required>
				</div>

				<div class="form-group">
					<label for="niv_">Nivel 4:</label>
					<input  type="text" class="form-control" name="niv_" id="niv_" required>
				</div>				

				<div class="form-group">
					<label for="desc">Descripcion:</label>
					<input  type="text" class="form-control" name="desc" id="desc" required>
				</div>

				<div class="form-group">
					<label for="obs">Observacion:</label>
					<input  type="text" class="form-control" name="obs" id="obs" required>
				</div>

				<div class="form-group">
					<label for="ser">Serie:</label>
					<input  type="text" class="form-control" name="ser" id="ser" required>
				</div>

				<div class="form-group">
					<label for="mar">Marca:</label>
					<input  type="text" class="form-control" name="mar" id="mar" required>
				</div>				

				<div class="form-group">
					<label for="mod">Modelo:</label>
					<input  type="text" class="form-control" name="mod" id="mod" required>
				</div>		
				
				<br>
				<label>DEPARTAMENTO:</label><select name="depa" >
	                                                  <option value="Atención ciudadana">Atencion ciudadana</option>
	                                                  <option value="Cabildos">Cabildos</option>
	                                                  <option value="Catastro">Catastro</option>
	                                                   <option value="Coordinación Medica">Coordinación medica</option>
	                                                   <option value="Centro de Copiado">Centro de copiado</option>
	                                                  <option value="Compras">Compras</option>
	                                                   <option value="Comunicación Social">Comunicación Social</option>
	                                                    <option value="Consultorio Medico">Consultorio Medico</option>
	                                                  <option value="Conmutador">Conmutador</option>
	                                                   <option value="Contraloria Municipal">Contraloria</option>
	                                                   <option value="Control Interno">Control Interno</option>
	                                                  <option value="Cuenta Publica">Cuenta Publica</option>
	                                                   <option value="Mejora Regulatoria">Mejora Regulatoria</option>
	                                                   <option value="Desarrollo Social">Desarrollo Social</option>
	                                                  <option value="Desarrollo Urbano y Ordemaniento Territorial">Desarrollo Urbano</option>
	                                                   <option value="Egresos">Egresos</option>
	                                                   <option value="Juez Calificador">Juez Calificador</option>
	                                                  <option value="Credito y Cobranza">Credito y Cobranza</option>
	                                                   <option value="Fiscalizacion">Fiscalizacion</option>
	                                                    <option value="Juridico">Juridico</option>
	                                                  <option value="Informatica">Informatica</option>
	                                                   <option value="Ingresos">Ingresos</option>
	                                                   <option value="Instituto de la Mujer">Instituto de la Mujer</option>
	                                                  <option value="Contabilidad y Presupuesto">Contabilidad y Presupuesto</option>
	                                                   <option value="Obras Publicas Municipales">Obras Publicas Municipales</option>
	                                                   <option value="Oficialia Mayor Administrativa">Oficialia Mayor</option>
	                                                  <option value="Oficialia de Partes">Oficialia de Partes</option>
	                                                   <option value="Predial">Predial</option>
	                                                   <option value="Programas Especiales">Programas Especiales</option>
	                                                  <option value="Imuvi">Imuvi</option>
	                                                   <option value="relacionesexteriores">Relaciones Exteriores</option>
	                                                    <option value="Presidencia Municipal">Presidencia Municipal</option>
	                                                  <option value="OFS">Of´s</option>
	                                                   <option value="Recursos Humanos">Recursos Humanos</option>
	                                                   <option value="Regidores del H. Ayuntamiento">Regidores</option>
	                                                  <option value="Secretaria del Ayuntamiento">Secretaria del Ayuntamiento</option>
	                                                   <option value="Servicio Militar">Servicio Militar</option>
	                                                   <option value="Servicios Publicos">Servicios Publicos</option>
	                                                  <option value="Sindicatura">Sindicatura</option>
	                                                   <option value="Tesoreria Municipal">Tesoreria Municipal</option>
	                                                   <option value="Transito y Transporte">Transito y Transporte</option>
	                                                  <option value="Dirección ONG y Atención a extranjeros">Direccion Ong y atencion a extranjeros</option>
	                                                   <option value="Ecologia">Ecologia</option>
	                                                    <option value="Pasaportes">Pasaportes</option>
	                                                  <option value="Bomberos">Bomberos</option>
	                                                   <option value="Seguridad Publica">Seguridad Publica</option>
	                                                   <option value="Instituto de la Mujer">Instituto de la Mujer</option>
	                                                  <option value="Contabilidad y Presupuesto">Contabilidad y Presupuesto</option>
	                                                   <option value="Obras Publicas">Obras Publicas</option>
	                                                  <option value="Instituto Municipal de Allende para las Mujeres">Instituto Municipal de Allende para las mujeres x</option>
	                                                   <option value="Rastro Municipal">Rastro Municipal</option>
	                                                   <option value="Coordinacion de Salud">Coordinacion de Salud</option>
	                                                  <option value="Secretaria del H. Ayuntamiento">Secretaria del H. Ayuntamiento</option>
	                                                   <option value="Biblioteca Municipal">Biblioteca Municipal</option>
	                                                    <option value="Coordinacion Juridica">Coordinacion Juridica</option>
	                                                  <option value="Asesoria Juridica">Asesoria Juridica</option>
	                                                   <option value="Programas Especiales">Programas Especiles</option>
	                                                   <option values="Placas y Documentos">Placas y Documentos</option>
	                                                  <option value="Consejo Turistico">Consejo Turistico</option>
	                                                   <option value="Operativo">Operativo</option>
	                                                   <option value="Educacion Vial">Educacion Vial</option>
	                                                  <option value="Trasporte Publico">Transporte Publico</option>
	                                                   <option value="Direcccion">Direccion</option>
	                                                   <option value="Comandancia Administrativa">Comandancia Administrativa</option>
	                                                  <option value="Resguardo Canino">Resguardo Canino</option>
	                                                   <option value="Panteon Luz Eterna">Panteon Luz Eterna</option>
	                                                    <option value="teatro">Teatro</option>
	                                                  <option value="casa de la cultura"> Casa de la Cultura</option>
	                                                   <option value="Educacion y cultura">Educacion y Cultura</option>
	                                                   <option value="Comision MUnicipal del Deporte y Atencion a la Juventud">COMUDE</option>
	                                                  <option value= "Alumbrado Publico Municipal"> Alumbrado Publico Municipal</option>
	                                                   <option value="Servicios Publicos Municipales">Servicios Publicos MUnicipales</option>
	                                                   <option value="Informatica y Estadistica">Informatica y Estadistica</option>
	                                                  <option value="Servicio Militar">Servicio Militar</option>
	                                                   <option value="Taller Mecanico">Taller Mecanico</option>
	                                                   <option value="Alcaldia">Alcaldia</option>
	                                                  <option value="Academia de Policia">Academia de Policia</option>
	                                                   <option value="Regidores del H. Ayuntamiento">Regidores del H. Ayuntamiento</option>
	                                                    <option value="Presidencia Municipal">Presidencia Municipal</option>
	                                                  <option value="Acentamientos Humanos">Acentamientos Humanos</option>
	                                                   <option value="Consejo Turistico">Consejo Turistico</option>
	                                                   <option value="Archivo Historico">Archivo HIstorico</option>
	                                                  <option value="Calidad del Aire y Agua">Calidad de Aire y Agua</option>
	                                                   <option value="Señalizacion">Señalizacion</option>
	                                                   <option value="Presidente">Presidente</option>
	                                                  <option value="Vivero Municipal">Vivero Municipal</option>
	                                                   <option value="Relaciones Exteriores">Relaciones Exteriores</option>
	                                                   <option value="Relaciones Internacionales">Relaciones Internacionales</option>
	                                                  <option value="Proteccion Civil">Proteccion Civil</option>
	                                                   <option value="Fomento Internacional">Fomento INternacional</option>
	                                                    <option value="Proyectos Viales">Proyectos Viales</option>
	                                                  <option value="Jarques y Jardines">Parques y Jardines</option>
	                                                   <option value="Coordinacion Juridica">Coordinacion Juridica</option>
	                                                   <option value="Oficina de Presidencia">Oficina de Presidencia</option>
	                                                  <option value="Juzgado Administrativo y Municipal">Juzgado Administrativo y Municipal</option></select> 
					<br><br>

					<div class="form-group">
					<label for="obs_del">Observacion general:</label required>
					<input  type="text" class="form-control" name="obs_del" id="obs_del">
					</div>

					<div class="form-group">
					<label for="nom_usu">Nombre de Usurio:</label required>
					<input  type="text" class="form-control" name="nom_usu" id="nom_usu">
					</div>

						 <center><input type="submit" name="submit" value="AGREGAR">
						 <input type="reset" name="clear" value="LIMPIAR"></center>
					</form>
				
						<div class="col-sm-12"></div>
				</div>
			
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>