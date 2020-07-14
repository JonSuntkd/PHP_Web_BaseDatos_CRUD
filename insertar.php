	<?php
	

			$mysqli = new mysqli("localhost", "root", "root", "testphp");	
			$nom = $_GET['nombre'];
			$edad = $_GET['edad'];
			$dir = $_GET['direccion'];
			$fecha = $_GET['fecha'];

			$sql = $mysqli->query("insert into tbcontactos (nombre, edad, direccion, fecha) values ('$nom', $edad, '$dir', '$fecha') ");			
			
	?>	

		    <SCRIPT LANGUAGE="javascript"> 
            </SCRIPT> 
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=listar.php">
