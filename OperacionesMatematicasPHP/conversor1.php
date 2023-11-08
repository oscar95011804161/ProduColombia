<?php

$conv=$_POST["conv"];
$cantidad=$_POST["dinero"];


switch($conv){

        case "1":{

          echo "Son ";
          echo $cantidad*3000;
          echo " Peso/s";
          
        
        break;
       } 
        case "2":{

          echo "Son ";
          echo $cantidad/3000;
          echo " Dolares/s";

        break; 
        }
      

        case "3":{

          echo "Son ";
          echo $cantidad*3500;
          echo " Peso/s";
          
        break;
        }
      

        case "4":{
          
          echo "Son ";
          echo $cantidad/3500;
          echo " Euro/s";
          
        break;
      }
     
        case "5":{
          
          echo "Son ";
          echo $cantidad*1.16;
          echo " Dolare/s";
          
        break;
      }
     
        case "6":{
          
          echo "Son ";
          echo $cantidad*0.86;
          echo " Euro/s";
          
        break;
      }
     
        default:{
          echo"hay un error en todo";
      }
    }
 
?>