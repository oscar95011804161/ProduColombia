<?php
	//conexion con la base de datos y el servidor
    // $user="root";
    // $server="localhost";
     
     
	//$link = mysql_connect($user,$server,"") or die("<h2>No se encuentra el servidor</h2>");
	//$db = mysql_select_db("bdunadphp301127_14",$link) or die("<h2>Error de Conexion</h2>");

	include("conectar.php");
	$con = conectar();

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
	//$passUser = md5($pass);
    $passUser = $pass;
	//ingresamos la informacion a la base de datos
   // $consultar=mysql_query("SELECT * FROM usuarios WHERE (nombre_usuario= '".$nombreuser."') AND contraseña_usuario= '".$contraseñaUser."'") or die("<h2>Error Guardando los datos</h2>");
   $consultar=mysql_query("SELECT * FROM usuarios WHERE (nombre_usuario='$nombreuser' AND contraseña_usuario= '$passUser'") or die("<h2>Error Guardando los datos</h2>");
  
	
		if ($resultado=mysql_fetch_array($consultar))
	{
		
		
		echo "Usuario validado correctamente.";

		echo'
		<script>
			alert("Usuario validado correctamente");
			location.href="http://localhost:8000/CursoUnad/Fase_5/index2.html";
		</script>';
	
	}
	else{
		echo "Usuario o password erroneos volver a intentar.";
       echo'
	    <script>
			alert("Usuario o password erroneos volver a intentar");
			location.href="http://localhost:8000/CursoUnad/Fase_5/index.html";
		</script>
	'	;

	}
	
  
	
// https://www.youtube.com/watch?v=Dt1WxwY2HZU



	


?>