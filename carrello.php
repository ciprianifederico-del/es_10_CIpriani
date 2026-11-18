<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Carrello</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a class="logout" href="logout.php">Logout</a>
        <div class="card">
            <h3>Carrello</h3>
            <?php
            if (isset($_POST['svuota'])) {
                unset($_SESSION['cart']);
            }

            $totale = 0;
            foreach($_SESSION['cart'] ?? array() as $item) {
                $subtotale = $item['prezzo'] * $item['quantita'];
                echo "<p class='item-carrello'>" . $item['nome'] . " x" . $item['quantita'] . " - " . $subtotale . " €</p>";
                $totale += $subtotale;
            }
            echo "<p class='totale'>Totale: " . $totale . " €</p>";
            ?>
            <form method="POST">
                <button class="btn-danger" name="svuota" value="1">Svuota carrello</button>
            </form>
            <a class="link-footer" href="prodotti.php">Torna ai prodotti</a>
        </div>
    </body>
</html>