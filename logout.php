<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Logout</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="card">
            <h3>Logout effettuato</h3>
            <p class="messaggio">Sei stato sloggato correttamente.</p>
            <a class="link-footer" href="index.php">Torna al login</a>
        </div>
        <?php
            session_destroy();
        ?> 
    </body>
</html>