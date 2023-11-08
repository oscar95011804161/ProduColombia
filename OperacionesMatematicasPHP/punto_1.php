<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>punto 1</title>
	
</head>
<body>


<h2>Ingresar un número y por medio de un “radiobutton” permita seleccionar una operación a realizar. 
     </h2>
<br>
 Comparación entre monedas.<p>
 1 Dolar=3000 pesos<p>
 1 Euro=3500 pesos<p>
 1 Dolar=0.86 euros<p>
 1 Euro=1.16 euros<p>

<form action="conversor1.php" method="post"> 
   1.- Introduzca la cantidad de dinero:

  <input type="text" name="dinero"><br><br>
  
  <p>Seleccione el tipo de conversion </p>
  <input type="radio" name="conv" value="1">Dolares a Pesos <br></br>
  <input type="radio" name="conv" value="2">Pesos a Dolares <br></br>
  <input type="radio" name="conv" value="3">Euros a Pesos<br></br>
  <input type="radio" name="conv" value="4">Pesos a Euros <br></br>
  <input type="radio" name="conv" value="5">Euros a Dolares <br></br>
  <input type="radio" name="conv" value="6"> Dolares a Euros <br></br>

  <input type="submit" name="submit" >
  

</form> 


</body>
</html>
    