<?php 
    session_start();  
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="prodotti.php" method="POST">
            <label>nome 
                <input type="text" name="nome" required>
            </label><br>
            <input type="submit">
        </form>
    </body>
</html>