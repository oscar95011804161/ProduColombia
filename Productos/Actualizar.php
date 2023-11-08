<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta content="301127_14" name="author">
	<meta content="" name="description">
	<meta content="" name"keywords">
	<title>Home</title>
	<link rel="stylesheet" href="css/css5/normalize.css">
	<link rel="stylesheet" href="css/css5/style_A_productos.css">
</head>

<body>

	<div id="contenedor">
		<header>
		
			<h1>Actualizar productos </h1>

		<nav>
			<ul>

	
				
				<li class="menu"><a href="Productos.html">volver a productos </a></li>
			
			</ul>
		</nav>

		<section>
			<center>
			<article>

				<h2> Dentro del menú de actualización de productos debe crear un formulario en HTML que contenga los siguientes campos: nombre del producto, código del producto, peso, marca, región de donde proviene,
				características del producto y un botón que se llame “actualizar”.</h2>
				
				
			<form action="administradorBD/Actualizar2.php" method="POST"> 
			  
			  
			  <h4>Id del producto:</h4><input type text name="cp" required>
			  <h4>Nombre del producto:</h4><input type="text" name="np">
			  <h4>Peso del producto:</h4><input type="text" name="pp">
			  <h4>Marca del producto:</h4><input type="text" name="mp">
			  <h4>Caracteristicas del producto:</h4><input type="text" name="cdp">
			  <p><h4>Region de colombia de donde proviene:</h4><input type="text" name="rc"></p> 
			  

			  <input type="submit" name="submit" value="Actualizar">
			  

			</form> 


				



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