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
        if (isset($_POST['svuota'])) {
            unset($_SESSION['cart']);
        }

        echo "<h3>Carrello</h3>";
        $totale = 0;
        foreach($_SESSION['cart'] ?? array() as $item) {
            $subtotale = $item['prezzo'] * $item['quantita'];
            echo $item['nome'] . " x" . $item['quantita'] . " - " . $subtotale . " euro <br>";
            $totale += $subtotale;
        }
        echo "Totale: " . $totale . " euro <br><br>";

        echo "<form method='POST'>";
        echo "<button name='svuota' value='1'>Svuota carrello</button>";
        echo "</form>";
        echo "<a href='prodotti.php'>Torna ai prodotti</a>";
        ?> 
    </body>
</html>