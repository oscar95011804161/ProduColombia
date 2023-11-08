<?php

   date_default_timezone_set("America/Bogota");
   $db_host='localhost';
   $db_name='bdunadphp301127_14';
   $db_user='root';
   $db_pass='12345678';



   // Para utilizar Mysqldump y realizar el respaldo, se debe declarar una 
   //variable haciendo referencia a la ubicacion del archivo mysqlump.exe
   
   $mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
   $backup_file ='"C:\AppServ\www\cursoUnad\Fase_5\BACKUP_DATABASE\"'.$db_name. "_" .date("Y-m-d-H-i-s"). ".sql";
   system ("$mysqldump --no-defaults -u$db_user -p$db_pass $db_name > $backup_file");

   echo'<script>
    alert("Se realizo la copia de seguridad de la base de datos satisfactoriamente ");
      location.href="http://localhost:8000/CursoUnad/Fase_5/index.html";
      
    </script>
  ';

 



?>