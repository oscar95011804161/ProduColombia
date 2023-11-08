
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
		echo"Numeros que tiene el arraglo."."</br></br>";
		for($i=0;$i<$longitud;$i++){
			echo $nr[$i]."</br>";
		}
		
		//Operación para multiplicar el arreglo.
		for($i=0;$i<$longitud;$i++){
			 $numerob[$i]=$nr[$i]*14;
			/*14 es el numero del grupo*/

		}


		echo"</br>";
		echo" El numero del grupo es 14.";
		echo"</br>"."</br>";
		echo "Numeros del Arreglo multiplicados."."</br>";
		for($i=0;$i<$longitud;$i++){
			echo"</br>". $nr[$i] . " * 14 = " .$numerob[$i];
		}

		



?>

<body></body>
</html>