<?php

function conectar(){

	$user="root";
	$pass="12345678";
	$server="localhost";
	$db="bdunadphp301127_14";
	$tabla301127_14="tabla301127_14";
	$conexionBD =  mysql_connect($server, $user, $pass) or die ("Error al conectar a la base de datos". mysql_error());
	 mysql_select_db($db, $conexionBD);

	return $conexionBD;	

	}
	
?>

