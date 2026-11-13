<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        echo"<a href='logout.php'>logout</a> <br>";
        if (isset($_POST['nome'])) {
            $nome = $_POST["nome"];
            $_SESSION["nome"] = $nome;
        }
        if (!isset($nome) && isset($_SESSION["nome"])) {
            $nome = $_SESSION["nome"];
        }
        echo "Benvenuto, $nome <br>";
        $prodotti = array("prodotto1" => array("id" => "111", "nome" => "gpu", "prezzo" => 2500),"prodotto2" => array("id" => "112", "nome" => "cpu", "prezzo" => 16000),"prodotto3" => array("id" => "113", "nome" => "monitor", "prezzo" => 200),"prodotto4" => array("id" => "114", "nome" => "mouse", "prezzo" => 100));
        echo "<form method='POST'>";
        foreach($prodotti as $prodotto => $dati_prodotti) {
            foreach($dati_prodotti as $chiave => $valore) {
                echo "$valore ";
            }
            echo"<button name='cat' value='$prodotto'>aggiungi</button>";
            echo "<br>";
        }
        echo "</form>";
        if (isset($_POST['cat'])) {
            $selezionato = $prodotti[$_POST['cat']];
            if (!isset($_SESSION['cart'][$_POST['cat']])) {
                $_SESSION['cart'][$_POST['cat']] = array("nome" => $selezionato['nome'], "prezzo" => $selezionato['prezzo'], "quantita" => 0);
            }
            $_SESSION['cart'][$_POST['cat']]['quantita']++;
        }
        echo "<a href='carrello.php'>Vai al carrello</a>";
        ?> 
    </body>
</html>