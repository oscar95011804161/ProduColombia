<?php



include("conectar.php");
$con = conectar();

$cp = $_POST['cp'];	
$req = (strlen('id')) or die("No se han llenado todos los campos") ;

echo"Consulta realizada.";
echo"</br>";


	//Seleccionamos la informacion a la base de datos
	
	$consulta = "SELECT * FROM tabla301127_14 WHERE id=$cp";
	$resultado = mysql_query($consulta);//or die("<h2>Error consultando los datos</h2>");

		while($fila = mysql_fetch_array($resultado)){
			echo "<tr>";
		

			echo " 
			      <table width= \"100%\" border=\"1\">
				  <tr>
		          <td> <b><center> id               </b></center></td>
			      <td> <b><center> Nombre           </b></center></td> 
				  <td> <b><center> Peso             </b></center></td>
				  <td> <b><center> Marca            </b></center></td>
				  <td> <b><center> Caracteristicas  </b></center></td>
				  <td> <b><center> Region           </b></center></td> 
				  </tr>
				  <tr>
				   <td>".$fila['id']."</td>  
				   <td>".$fila['Nombre']."</td>
				   <td>".$fila['Peso']."</td>
				   <td>".$fila['Marca']."</td>
				   <td>".$fila['Caracteristicas']."</td>
				   <td>".$fila['Region']."</td>
				   </tr>
				   </table>
				   ";	
		}

?>