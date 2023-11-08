<html>
<?php

		$n0 = $_POST["n0"];
		$n1 = $_POST["n1"];
		$n2 = $_POST["n2"];
		$n3 = $_POST["n3"];
		$n4 = $_POST["n4"];


		$nr = array( $n0, $n1, $n2, $n3, $n4 );
		
		$longitud = count ($nr);
		echo "</br>";
		/*calculamos su longitud*/
		echo"Numeros del arraglo."."</br>"."</br>";
		for($i=0;$i<$longitud;$i++){
			echo $nr[$i]."</br>";
		}

		echo"</br>";
		

		/*permite mostrar un numero de menor a mayor*/
		sort($nr);
		
		echo"</br>";
		echo "Numeros del arreglo ordenados de menor a mayor.";
		echo"</br>"."</br>";
		for($i=0;$i<$longitud;$i++){
			echo $nr[$i]."<br>";
		}

		echo"</br> El arreglo tiene ".$longitud." numeros."."</br>";

?>

<body></body>
</html>