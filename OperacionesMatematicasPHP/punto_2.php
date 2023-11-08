<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta content="301127_14" name="author">
  <meta content="" name="description">
  <meta content="" name"keywords">
	<title>punto 2</title>
  






	
</head>
<body>


<h2> comparar dos números (cantidades de dinero una en pesos y otra en euros) e indicar sin son iguales, cual es mayor o menor. 
</h2>
<br>
<h2> </h2>


<form action="" method="get"> 
  <h3> 1.- Introduzca los euros:
    <input type="text" name="Euros"></h3>
    <br><br>
  <h3> 2.- Introduzca los pesos:
   <input type="text" name="Pesos"></h3>
   <br><br>
   <input type="submit" value="comparar"> 
   <input type="reset" value="limpia">
</form> 

<h3>Comparación entre monedas</h3>
<p>
<?php

$n1=intval($_GET['Euros']);
$n2=intval($_GET['Pesos']);

$n11=$n1*3500;


if ($n11>$n2){


    echo "los (".$n1.") euros son mayores que los (".$n2.") pesos ";



}
elseif ($n11==$n2){
    echo "los (".$n1.") euros son iguales que los (".$n2.") pesos ";
}
else{
    echo "los (".$n1.") euros son menores que los (".$n2.") pesos ";
}

?>

</body>
</html>