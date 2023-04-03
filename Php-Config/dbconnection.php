<?php

    $dbname = "school_management_system";
    $server = "localhost";
    $username = "root";
    $password = "";

    

    $dbconnect= mysqli_connect($server, $username, $password, $dbname);   
   if(!$dbconnect){
        die("Oops could not connect to database");
   }

    return $dbconnect;   

?>