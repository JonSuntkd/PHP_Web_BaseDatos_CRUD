<?php

session_start();
	$id = $_GET['id'];
	$mysqli = new mysqli("localhost", "root", "root", "testphp");		
	$sql = $mysqli->query("delete from tbcontactos where id='$id'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listar.php'>";

?>