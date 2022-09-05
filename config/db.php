<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "registration";

    $connection = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$connection){
        echo "Unable to connect to database.";
    }


?>