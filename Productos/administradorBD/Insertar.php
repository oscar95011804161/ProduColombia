<?php

include("conectar.php");
$con = conectar();

echo "se ha realizado exitosamente la conexion";

//datos de registro obtenidos

	
	$np = $_POST['np'];
	$pp = $_POST['pp'];
	$mp = $_POST['mp'];
	$cdp = $_POST['cdp'];
	$rc = $_POST['rc'];



	//Obtiene la longitus de un string
	$req = (strlen($np)*strlen($pp)*strlen($mp)*strlen($cdp)*strlen($rc)) or die("No se han llenado todos los campos");

	

	

	//ingresamos la informacion a la base de datos
	$st=Mysql_query("INSERT INTO tabla301127_14 Values('','$np','$pp','$mp','$cdp','$rc')",$con) or die("<h2>Error Guardando los datos</h2>");
	//include("desconectar.php");
	echo'<script>
		alert("Registro Exitoso");
			location.href="http://localhost:8000/CursoUnad/Fase_5/Productos/Registro.html";
			
		</script>
	';
		

?>