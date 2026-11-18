<?php 
    session_start();  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="card" action="checkLogin.php" method="POST">
            <h1>Accedi</h1>
            <label>username 
                <input type="text" name="nome" required>
            </label>
            <label>password
                <input type="password" name="password" required>
            </label>
            <input type="submit" value="Login">
        </form>
    </body>
</html>