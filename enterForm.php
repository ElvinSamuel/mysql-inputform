<!DOCTYPE html>
<html>
    <head>
        <title>Enter Form</title>
    </head>
    
    <form action="form.php" method="POST">
        
        <table>
            <tr>
                <td>Name</td>
                <td align="center"><input type="text" name="username" size="30" /></td>
            </tr>
            <tr>
                <td>Address</td>
                <td align="center"><input type="text" name="streetaddress" size="30" /></td>
            </tr>
            <tr>
                <td>City</td>
                <td align="center"><input type="text" name="cityaddress" size="30" /></td>
            </tr>
            
            <tr>
                <td colspan="2" align="center" />
                    <input type="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
</html>