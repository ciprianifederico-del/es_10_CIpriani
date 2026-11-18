<?php 
    session_start();  

    $username = "fede";
    $password = "fede";
    $errore = "";

    
    if (isset($_POST["nome"]) && isset($_POST["password"])) {
        if ($_POST["nome"] == $username && $_POST["password"] == $password) {
            header("Location: /prodotti.php");
            exit; 
        } else {
            header("Location: /index.php");
            exit;
        }
    } else {
        $errore = "Non hai inserito nome e password";
    }
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php 
            // Stampi il messaggio solo se non c'è stato alcun redirect
            echo $errore; 
        ?>
    </body>
</html>
