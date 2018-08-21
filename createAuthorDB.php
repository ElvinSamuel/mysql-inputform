<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form</title>
    </head>
    <body>
        
        <?php
            
            $firstName = htmlspecialchars($_POST['first_name']);
            $lastName = htmlspecialchars($_POST['last_name']);
            $email = htmlspecialchars($_POST['email']);
            $birthdate = htmlspecialchars($_POST['birthdate']);
            
            echo is_string($birthdate);
            /*
                Create a connection to that database
                then add the data from the form.
            
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
            
            $sql = "INSERT INTO testAuthors (first_name, last_name, email, birthdate)
            VALUES ($firstName, $lastName, $email, $birthdate)";
            
            if ($conn->query($sql) === TRUE) {
                echo $firstName . $lastName . " Successfully Added!<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            */
        ?>
        
    </body>
</html>