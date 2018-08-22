<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form</title>
    </head>
    <body>
        
        <?php
            /* Default Time Zone */
            date_default_timezone_set('UTC');
            /* ================= */
            
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $birthdate = $_POST['birthdate'];
            $dateVar = date('j-m-y G:i:s');
            
            // echo is_string($birthdate);
            /*
                Create a connection to that database
                then add the data from the form.
            */
            $servername = getenv('IP');
            $username = getenv('C9_USER');
            $password = "";
            $database = "Authors";
            $dbport = 3306;
    
            $conn = new mysqli($servername, $username, $password, $database);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "INSERT INTO testAuthors (first_name, last_name, email, birthdate, added) VALUES ('$firstName', '$lastName', '$email', '$birthdate', '$dateVar')";
            
            if ($conn->query($sql) === TRUE) {
                echo $firstName . $lastName . " Successfully Added!<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        ?>
        
    </body>
</html>