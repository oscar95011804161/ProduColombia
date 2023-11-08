<?php
include("administradorBD/conectar.php");
$con = conectar();
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta content="301127_14" name="author">
	<meta content="" name="description">
	<meta content="" name"keywords">
	<title>Home</title>
	<link rel="stylesheet" href="css/css4/normalize.css">
	<link rel="stylesheet" href="css/css4/style_c_productos.css">
</head>

<body>

	<div id="contenedor">
		<header>
		
			<h1>Consultar productos </h1>

		<nav>
			<ul>

				
				
				<li class="menu"><a href="Productos.html">volver a productos </a></li>
			
			</ul>
		</nav>

		<section>
			<center>
			<article>

				
				<h2> Dentro del menú de consulta de productos debe crear un formulario en HTML que contenga los siguientes campos: código del producto y un botón que se llame “buscar”.</h2>
				
				<form action="administradorBD/Consultar.php" method="POST">

					<h4>Id de producto:</h4><input type="text" name="cp"required>
					<input type="submit" name="submit" value="buscar">
				</form>

				

				<table border ="1">
                <tr>
                	<td>  id</td>
			        <td>  Nombre</td> 
			        <td>  Peso</td>
				    <td>  Marca</td>
				    <td>  Caracteristicas</td>
				    <td>  Region</td>
				        		  
                </tr>
				
				<?php

				//Seleccionamos la informacion a la base de datos
					
				$consulta = "SELECT * FROM tabla301127_14";
				$resultado = mysql_query($consulta); 
       
				while($fila = mysql_fetch_array($resultado)){

					echo "<tr>";	

				echo "<td> $fila[id] </td>
				<td> $fila[Nombre] </td>
				<td> $fila[Peso] </td>
				<td> $fila[Marca] </td>
				<td> $fila[Caracteristicas] </td>
				<td> $fila[Region] </td>
				
				<br>";	
				 
				echo "</tr>";
				
				}

				?>

                </table>
                <h4>TABLA CON INFORMACIÓN DE LA BASE DE DATOS</h4>

				</article>
				<br>
				
				</center>

                


		</section>

		<aside>
			<center>
			<h4>La UNAD en Twitter</h4>
			<br>
			
			<a class="twitter-timeline" data-lang="es" data-width="680" data-height="700" data-theme="dark" data-link-color="#2B7BB9" href="https://twitter.com/AmSchoolWay?ref_src=twsrc%5Etfw">Tweets by AmSchoolWay</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

			<br>
			<h4>Contador de visitas</h4>
			<br>
			<a href="https://www.contadorvisitasgratis.com" title="contador de visitas para blog"><img src="https://counter8.freecounter.ovh/private/contadorvisitasgratis.php?c=25byyl2fyshumf4kgb9n8s7akx2rjer8" border="0" title="contador de visitas para blog" alt="contador de visitas para blog"></a>
			</center>
		</aside>

		<footer>
			<h3 id="footer">Pagina web creada por el grupo 301127_14</h3>
			
			<h6>Todos los derechos reservados ®</h6>
		</footer>


	</div>

</body>


</html>