<?php

require ('C:\Appserv\www\cursoUnad\Fase_5\Productos\fpdf181\fpdf.php');
date_default_timezone_set("America/Bogota");

  // $server='localhost';
 //  $db='bdunadphp301127_14';
 //  $db_user='root';
 //  $db_pass='12345678';

   $cp = $_POST['cp'];

$pdf = new FPDF(); 
$pdf -> AddPage();
$pdf -> Setfont('Arial', 'B', 16);
//$pdf ->Image('../imagenes/logo.png',10,10,-150);
$pdf -> Ln(20);
$pdf ->Cell (90,20, 'Fecha:'. date ('d.m.Y.H.i.s').'',0); 
$pdf ->Ln(10);
$pdf -> Cell (100,20, utf8_decode('REPORTES PDF'));
$pdf -> Ln(10);
$pdf -> SetFont('Arial','B', 8);
$pdf -> Cell (10,20,'id');
//$pdf -> Cell (20,20,'Codigo');
$pdf -> Cell (35,20,'Nombre');
$pdf -> Cell (15,20,'Peso');
$pdf -> Cell (30,20,'Marca');
$pdf -> Cell (45,20,'Caracteristicas');
$pdf -> Cell (20,20,'Region');

$pdf->Ln(10);
$pdf->Setfont('Arial','',8);

//$conec = mysql_connect($db_host, $db_user, $db_name, $db_pass);
//Check conection



//$conexionBD =  mysql_connect($server, $user, $pass) or die ("Error al conectar a la base de datos". mysql_error());
//	 mysql_select_db($db, $conexionBD);

include("conectar.php");
$con = conectar();



//if (!$conec){
//	die ("Conection failed:");
//}

$consulta = 'SELECT * FROM tabla301127_14';
$resultado = mysql_query($consulta);

if (mysql_num_rows($resultado)>0){
	//output data of ech row
	while($fila =mysql_fetch_assoc($resultado)){

		//$pdf->Cell(20,20, $reg['$cp',0]);
		$pdf->Cell(10,20, utf8_decode($fila['id']),0);
		$pdf->Cell(35,20, utf8_decode($fila['Nombre']),0);
		$pdf->Cell(15,20, utf8_decode($fila['Peso']),0);
		$pdf->Cell(30,20, utf8_decode($fila['Marca']),0);
		$pdf->Cell(45,20, utf8_decode($fila['Caracteristicas']),0);
		$pdf->Cell(25,20, utf8_decode($fila['Region']),0);

		$pdf->Ln(10);
	}
 }

 $pdf ->output();

?>












































































































































































































