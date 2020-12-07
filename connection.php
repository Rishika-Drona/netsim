<?php
        // $databaseHost = 'localhost';
        // $databaseName = 'test';
        // $databaseUsername = 'root';
        // $databasePassword = '';

        $databaseHost = 'sql9.freemysqlhosting.net';
        $databaseName = 'sql9380827';
        $databaseUsername = 'sql9380827';
        $databasePassword = 'SSxDTt3W4h';
        
        $db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
         
         if(! $db ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
      ?>