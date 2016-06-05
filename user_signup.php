<!DOCTYPE html>
<?php

require 'process.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <div class=" container">
            <a href="/traiee006">Home</a>
            <form method="post" action="process_signup.php">
                <table >
                    <tr> <td>Ten*:</td><td><input type ="text" name="fullname"/></td></tr>
                    <tr><td>Ten dang nhap*:</td><td><input type="text" name="name"/></td></tr>
                    <tr><td>Pass*:</td><td><input type ="password" name ="pass"/></td></tr>
                    <tr><td>Pass Comfirm:*</td><td><input type ="password" name="pass_comfirm"/></td></tr>
                    <tr><td>Email:*</td><td><input type="text" name ="mail"/></td></tr>
                    <tr><td>Phone:*</td><td><input type="text" name="phone"/></td></tr>
                    <tr><td>Des: </td><td><input type ="text" name="des"/></td></tr>
                    <tr><td>Name Of Person Introduce</td><td><input type="text" name='introduce'></td></tr>
                </table>
                <input type="submit" value="dang ky"/></td></tr>
            </form>
            
        </div>
        <?php 
        
        
        
        
        ?>
          
    </body>
</html>
