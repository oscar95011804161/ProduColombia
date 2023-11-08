<html>
<?php

		$n0 = $_POST["n0"];
		$n1 = $_POST["n1"];
		$n2 = $_POST["n2"];
		$n3 = $_POST["n3"];
		$n4 = $_POST["n4"];
		$n5 = $_POST["n5"];/*corresponde a la posicion del
		arreglo que voy a eliminar*/
		


		$nr = array( $n0, $n1, $n2, $n3, $n4 );
		
		$longitud = count ($nr);
		echo "</br>";
		/*calculamos su longitud*/
		echo"Numeros del arraglo."."</br>"."</br>";
		for($i=0;$i<$longitud;$i++){
			echo $nr[$i]."</br>";
		}

		//Eliminacion de dato
		unset($nr[$n5]);

		echo"</br>";
		echo"Arreglo sin el valor eliminado."."</br>"."</br>";
		for($i=0;$i<$longitud;$i++){
		echo $nr[$i]."</br>";
		}



?>

<body></body>
</html>