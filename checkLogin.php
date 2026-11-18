<?php 
    session_start();  

    $username = "fede";
    $password = "fede";
    $errore = "";


    if (isset($_POST["nome"]) && isset($_POST["password"])) {
        if ($_POST["nome"] == $username && $_POST["password"] == $password) {
            $_SESSION["nome"] = $_POST["nome"];
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
    <head>
        <title>Errore login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="card">
            <h3>Errore</h3>
            <p class="messaggio"><?php echo $errore; ?></p>
            <a class="link-footer" href="index.php">Torna al login</a>
        </div>
    </body>
</html>