<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form</title>
    </head>
    <body>
        
        <?php
            
            $usersName = htmlspecialchars($_POST['username']);
            $streetAddress = htmlspecialchars($_POST['streetaddress']);
            $cityAddress = htmlspecialchars($_POST['cityaddress']);
            
            echo $usersName . '<br>';
            echo $streetAddress . '<br>';
            echo $cityAddress . '.<br>';
            
            
            
        ?>
        
    </body>
</html>