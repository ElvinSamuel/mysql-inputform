<!DOCTYPE html>
<html>
    <head>
        <title>Enter Form</title>
    </head>
    
    <form action="createAuthorDB.php" method="POST">
        
        <table>
            <tr>
                <td>First Name</td>
                <td align="center"><input type="text" name="first_name" size="30" /></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td align="center"><input type="text" name="last_name" size="30" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td align="center"><input type="text" name="email" size="30" /></td>
            </tr>
            <tr>
                <td>Birthdate</td>
                <td align="center"><input type="date" name="birthdate" size="30" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center" />
                    <input type="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
</html>