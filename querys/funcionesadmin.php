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
			echo "<td> <a href='verinventarioadmin.php?id=".$fila['id']."'><span class='glyphicon glyphicon-eye-open'></span></td></a>";
			echo "<td> <a href='editarinventarioadmin.php?id=".$fila['id']."'><span class='glyphicon glyphicon-pencil'></span></td></a>";
			echo "<td> <a href='../querys/eliminaradmin.php?id=".$fila['id']."'><span class='glyphicon glyphicon-trash'></span></td></a>";
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
		or marca LIKE '%".$_POST['buscar']."%' ";
	
		$resultado=mysqli_query($conexion,$query);
		while ($fila=mysqli_fetch_array($resultado)) {
			echo "<tr>";
			echo "<td>".$fila['num_inventario']."</td>";
			echo "<td>".$fila['descripcion']."</td>";
			echo "<td>".$fila['serie']."</td>";
			echo "<td>".$fila['marca']."</td>";
			echo "<td> <a href='verinventarioadmin.php?id=".$fila['id']."'><span class='glyphicon glyphicon-eye-open'></span></td></a>";
			echo "<td> <a href='editarinventarioadmin.php?id=".$fila['id']."'><span class='glyphicon glyphicon-pencil'></span></td></a>";
			echo "<td> <a href='../querys/eliminaradmin.php?id=".$fila['id']."'><span class='glyphicon glyphicon-trash'></span></td></a>";
			echo "</tr>";
			
		}

		mysqli_close($conexion);
}

function getAllu(){

		include 'conexion.php';
		$query="SELECT * FROM usuarios";
		$resultado=mysqli_query($conexion,$query);
		while ($fila=mysqli_fetch_array($resultado)) {
			echo "<tr>";
			echo "<td>".$fila['usuario']."</td>";
			echo "<td>".$fila['password']."</td>";
			echo "<td>".$fila['tipo']."</td>";
			echo "<td>".$fila['nombre']."</td>";
			echo "<td>".$fila['ape_pat']."</td>";
			echo "<td>".$fila['ape_mat']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			echo "<td> <a href='editarusuarios.php?id=".$fila['id']."'><span class='glyphicon glyphicon-pencil'></span></td></a>";
			echo "<td> <a href='../querys/eliminarusuarios.php?id=".$fila['id']."'><span class='glyphicon glyphicon-trash'></span></td></a>";
			echo "</tr>";
		}
		mysqli_close($conexion);

}


function searchu(){
	include 'conexion.php';

		$query="SELECT * FROM usuarios WHERE 
		usuario LIKE'%".$_POST['buscar']."%'
		or nombre LIKE '%".$_POST['buscar']."%'
		or ape_pat LIKE '%".$_POST['buscar']."%'
		or ape_mat LIKE '%".$_POST['buscar']."%'
		or tipo LIKE '%".$_POST['buscar']."%'
		or departamento LIKE '%".$_POST['buscar']."%'";
	
		$resultado=mysqli_query($conexion,$query);
		while ($fila=mysqli_fetch_array($resultado)) {
			echo "<tr>";
			echo "<td>".$fila['usuario']."</td>";
			echo "<td>".$fila['password']."</td>";
			echo "<td>".$fila['tipo']."</td>";
			echo "<td>".$fila['nombre']."</td>";
			echo "<td>".$fila['ape_pat']."</td>";
			echo "<td>".$fila['ape_mat']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			echo "<td> <a href='editarusuarios.php?id=".$fila['id']."'><span class='glyphicon glyphicon-pencil'></span></td></a>";
			echo "<td> <a href='../querys/eliminarusuarios.php?id=".$fila['id']."'><span class='glyphicon glyphicon-trash'></span></td></a>";
			echo "</tr>";
			
		}

		mysqli_close($conexion);
}
