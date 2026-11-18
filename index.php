<?php 
    session_start();  
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="checkLogin.php" method="POST">
            <label>username 
                <input type="text" name="nome" required>
            </label><br>
            <label>password
                <input type="password" name="password" required>
            </label><br>
            <input type="submit">
        </form>
    </body>
</html>