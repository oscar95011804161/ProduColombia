	<?php
		

		$conv=$_POST["conv"];

		//operadores
		if (isset($_POST["dinero"])){
			define("cantidad",$_POST["dinero"]);
		}
		else{

		}

		echo "Son ";
		if ($conv==1) {
			echo cantidad*3000;
			echo " peso/s";
		}else{
			echo cantidad/3000;
			echo " Dolar/es";
		}

	?>