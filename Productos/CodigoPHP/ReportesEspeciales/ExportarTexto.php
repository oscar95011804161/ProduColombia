

<?php
	
	$cp = $_POST["cp"];
	$np = $_POST["np"];
	$pp = $_POST["pp"];
	$mp = $_POST["mp"];
	$rc = $_POST["rc"];

	$contenido=" 
	Codigo de producto: $cp
	Nombre del producto: $np
	Peso del producto: $pp
	Marca del producto: $mp
	Region de colombia de donde proviene: $rc
	";


	$archivo=fopen("reporte/$cp.txt","w");
	

	fwrite($archivo,$contenido);
	echo"Formulario enviado";
	
?>

	
	


 


