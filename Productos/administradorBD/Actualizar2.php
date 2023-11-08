<?php
include("conectar.php");
$con = conectar();
 
    $cp = $_POST['cp'];
	$np = $_POST['np'];
	$pp = $_POST['pp'];
	$mp = $_POST['mp'];
	$cdp = $_POST['cdp'];
	$rc = $_POST['rc'];

  //verificamos que se hallan llenado todos los campos

//tener cuidado con la parte del id
	$req = (strlen($cp)*strlen($np)*strlen($pp)*strlen($mp)*strlen($cdp)*strlen($rc)) or die("No se han llenado todos los campos");

  //validamos usando un poco del codigo de consultar


	$existe=0;
	//Consultar

	$consulta = "SELECT * FROM tabla301127_14 WHERE id=$cp";
	$resultado = mysql_query($consulta);//or die("<h2>Error consultando los datos</h2>");
    while($fila = mysql_fetch_array($resultado))
    {
    	$existe++;
    }
    if ($existe==0)
    {
    	echo "el id del producto no existe";
    }
    else{

    	//Actualizamos la informacion a la base de datos
	   	$actualizar="UPDATE $tabla301127_14 Set id='$cp', Nombre='$np',Peso='$pp',Marca='$mp',
	   Caracteristicas='$cdp',Region='$rc' WHERE id='$cp'";
	   
	mysqli_query($actualizar, $con);
	   


	  
	  echo'<script>
		alert("Actualizacion exitosa");
		location.href="http://localhost:8000/CursoUnad/Fase_5/Productos/Actualizar.php";
			
		</script>
	';
	 
	   //el where es obligatorio o de lo contrario toda la base de datos es remplazada con estos datos
    }



  
?>