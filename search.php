<?php

    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    $conn = new mysqli($servername, $username, $password, $database);
        
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
        
    } 



?>