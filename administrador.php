<?php
include("Productos/administradorBD/conectar.php");
$con = conectar();
?>

<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta content="301127_14" name="author">
   <meta content=" CONTENIDO: esta pagina esta diseñada para practicar" name ="description">
   <meta content="" name="keywords">
   <title>Administrador</title>
   <link rel="stylesheet" href="css/css2/normalize.css">
   <link rel="stylesheet" href="css/css2/style_Administrador.css">
   
</head>



	
<body>
  
	<div id="contenedor">

		<header>
			<h1> Administrador </h1>
			
		
	    </header>

		<nav>
			<ul>
				<li class="menu"><a href="index2.html">volver a inicio</a></li>
				

			</ul>
		</nav>

		<section>
           <article>

           	<form action="Productos/administradorBD/eliminar.php" method="POST">

           	<h2>
           		Eliminar productos
           	</h2>
					<h3>Escriba codigo de producto para eliminarlo
						de la base de datos:</h3><input type="text" name="cp"required>
					<input type="submit" name="submit" value="Eliminar">

			
			</form>
           	 
           	<form action="BACKUP_DATABASE/CodigodelBackup.php" method="POST">
              <h2>
           		Realizar copia de seguridad de la base de datos
           	</h2>
                        <h3>De clic en el boton para generar una copia de seguridad de la base de datos
					:</h3>
					<input type="submit" name="submit" value="backup">
           	</form>	

           	 <br>

           	 <?php



           	 ?>
           	 

           </article> 
			

		</section>
		
		<aside>

			<center>

				<a class="twitter-timeline" data-width="400" data-height="800" href="https://twitter.com/YouTube?ref_src=twsrc%5Etfw">Tweets by YouTube</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

           		<br>

           		<h4> Contador de visitas </h4>

           		<br> 



           		<a href="https://www.contadorvisitasgratis.com" title="contador de visitas para web"><img src="https://counter2.freecounter.ovh/private/contadorvisitasgratis.php?c=epnacagjgjz8dmxcwdhjsy986sf9ayqa" border="0" title="contador de visitas para web" alt="contador de visitas para web"></a>
				

			</center>
			
           


		</aside>

		<footer>
			<h3 id="footer"> Pagina web creada por el grupo 301127_14 </h3>
			<h6>Todos los derechos reservados@ </h6>
		</footer>

	</div>

</body>





</html>