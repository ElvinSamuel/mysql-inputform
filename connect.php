<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "Authors";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    $sql = "SELECT * FROM testAuthors WHERE id = 2";

    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    
    echo $row["first_name"] . "<br>";
    
    /* echo "Connected successfully (" . $db->host_info.")"; */
    
?>