<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "root", "testphp");	
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$edad =  $_POST['edad'];
	$direccion =  $_POST['direccion'];
	$fecha =  $_POST['fecha'];
	

	$sql = $mysqli->query("update tbcontactos set nombre='$nombre', edad=$edad, direccion='$direccion', fecha='$fecha' where id=$id");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=listar.php">


