<?php
	//conexion con la base de datos y el servidor
    // $user="root";
    // $server="localhost";
     
     
	//$link = mysql_connect($user,$server,"") or die("<h2>No se encuentra el servidor</h2>");
	//$db = mysql_select_db("bdunadphp301127_14",$link) or die("<h2>Error de Conexion</h2>");

	include("conectar.php");
	$con = conectar();

	//if($_POST['nombreuser']!=null && $_POST['pass']!=null &&){

	//obtenemos los valores del formulario
	$nombreuser = $_POST['nombreuser'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];

	//Obtiene la longitus de un string
	$req = (strlen($nombreuser)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);


	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO usuarios VALUES('','$nombreuser','$contraseñaUser')",$con) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro de usurario exitoso");
			location.href="http://localhost:8000/CursoUnad/Fase_5/index2.html";
		</script>
	';



?>