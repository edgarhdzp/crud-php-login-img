<?php

function getAll(){

		include 'conexion.php';
		$query="SELECT * FROM base_actual";
		$resultado=mysqli_query($conexion,$query);
		while ($fila=mysqli_fetch_array($resultado)) {
			echo "<tr>";
			echo "<td>".$fila['num_inventario']."</td>";
			echo "<td>".$fila['descripcion']."</td>";
			echo "<td>".$fila['serie']."</td>";
			echo "<td>".$fila['marca']."</td>";
			echo "<td> <a href='verinventariouser.php?id=".$fila['id']."'><span class='glyphicon glyphicon-eye-open'></span></td></a>";
			echo "<td> <a href='editarinventariouser.php?id=".$fila['id']."'><span class='glyphicon glyphicon-pencil'></span></td></a>";
			echo "</tr>";
		}
		mysqli_close($conexion);

}


function search(){
	include 'conexion.php';

		$query="SELECT * FROM base_actual WHERE 
		num_inventario LIKE'%".$_POST['buscar']."%'
		or descripcion LIKE '%".$_POST['buscar']."%'
		or serie LIKE '%".$_POST['buscar']."%'
		or marca LIKE '%".$_POST['buscar']."%'";
	
		$resultado=mysqli_query($conexion,$query);
		while ($fila=mysqli_fetch_array($resultado)) {
			echo "<tr>";
			echo "<td>".$fila['num_inventario']."</td>";
			echo "<td>".$fila['descripcion']."</td>";
			echo "<td>".$fila['serie']."</td>";
			echo "<td>".$fila['marca']."</td>";
			echo "<td> <a href='verinventariouser.php?id=".$fila['id']."'><span class='glyphicon glyphicon-eye-open'></span></td></a>";
			echo "<td> <a href='editarinventariouser.php?id=".$fila['id']."'><span class='glyphicon glyphicon-pencil'></span></td></a>";
			echo "</tr>";
			
		}

		mysqli_close($conexion);
}