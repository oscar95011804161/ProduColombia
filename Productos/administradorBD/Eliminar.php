<?php



include("conectar.php");
$con = conectar();

$cp = $_POST['cp'];	
$req = (strlen($cp)) or die("No se han llenado todos los campos") ;


$existe=0;

    $consulta = "SELECT * FROM tabla301127_14";
	$resultado = mysql_query($consulta); 
    while($fila = mysql_fetch_array($resultado))
    {
    	$existe++;
    }
    if ($existe==0)
    {
    	echo "el id del producto no existe";
    }
	
	else{
		//Eliminamos la información a la base de datos
	
		$eliminar = "DELETE FROM tabla301127_14 WHERE id= '$cp'" ;
		$resultado = mysql_query($eliminar); // die("<h2>Error eliminando datos</h2>");

		echo'<script>
		alert("Eliminacion exitosa");
			location.href="http://localhost:8000/CursoUnad/Fase_5/administrador.php";
			
		</script>
	';
	}

	 
		

?>