<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prodotti</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a class="logout" href="logout.php">Logout</a>
        <?php
        if (isset($_POST['nome'])) {
            $nome = $_POST["nome"];
            $_SESSION["nome"] = $nome;
        }
        if (!isset($nome) && isset($_SESSION["nome"])) {
            $nome = $_SESSION["nome"];
        }
        $nome = $nome ?? "ospite";

        $prodotti = array(
            "prodotto1" => array("id" => "111", "nome" => "gpu", "prezzo" => 2500),
            "prodotto2" => array("id" => "112", "nome" => "cpu", "prezzo" => 16000),
            "prodotto3" => array("id" => "113", "nome" => "monitor", "prezzo" => 200),
            "prodotto4" => array("id" => "114", "nome" => "mouse", "prezzo" => 100)
        );

        // aggiorno il carrello PRIMA di disegnare la tabella,
        // così il badge mostra subito il conteggio corretto
        if (isset($_POST['cat'])) {
            $selezionato = $prodotti[$_POST['cat']];
            if (!isset($_SESSION['cart'][$_POST['cat']])) {
                $_SESSION['cart'][$_POST['cat']] = array("nome" => $selezionato['nome'], "prezzo" => $selezionato['prezzo'], "quantita" => 0);
            }
            $_SESSION['cart'][$_POST['cat']]['quantita']++;
        }
        ?>
        <p class="benvenuto">Benvenuto, <?php echo $nome; ?></p>

        <div class="card">
            <h3>Prodotti</h3>
            <?php
            echo "<form method='POST'>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Prezzo</th><th></th></tr>";
            foreach($prodotti as $prodotto => $dati_prodotti) {
                // quantità attualmente nel carrello per questo prodotto
                $quantita = $_SESSION['cart'][$prodotto]['quantita'] ?? 0;

                echo "<tr>";
                echo "<td>" . $dati_prodotti['id'] . "</td>";
                echo "<td>" . $dati_prodotti['nome'] . "</td>";
                echo "<td>" . $dati_prodotti['prezzo'] . " €</td>";
                echo "<td><button name='cat' value='$prodotto'>Aggiungi</button>";
                if ($quantita > 0) {
                    echo " <span class='badge'>" . $quantita . "</span>";
                }
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</form>";
            ?>
            <a class="link-footer" href="carrello.php">Vai al carrello</a>
        </div>
    </body>
</html>