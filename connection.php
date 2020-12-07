<?php
        $databaseHost = 'localhost';
        $databaseName = 'test';
        $databaseUsername = 'root';
        $databasePassword = '';
        
        $db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
         
         if(! $db ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
      ?>