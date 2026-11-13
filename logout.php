<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            session_destroy();
            echo"sei stato sloggato <br>";
            echo"torna al login <a href='index.php'>login</a>";
        ?> 
    </body>
</html>