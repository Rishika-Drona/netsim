<?php
        $databaseHost = 'sql9.freemysqlhosting.net';
        $databaseName = 'sql9380827';
        $databaseUsername = 'sql9380827';
        $databasePassword = 'SSxDTt3W4h';
        echo 'inside connection file';
        $db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
         
         if(! $db ) {
             echo 'something is failing';
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
      ?>