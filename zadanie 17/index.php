<?php
    session_start();
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"]=[];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Nazwa produktu</label>
        <input type="text" name="name" id="name" required><br>

        <label for="price">Cena produktu</label>
        <input type="number" name="price" id="price" step="0.01" min="0" required><br>

        <label for="amount">Liczba sztuk</label>
        <input type="number" name="amount" id="amount" min="1" required><br>

        <input type="submit" value="Wyslij">
    </form>

    <form action="" method="POST">
        <input type="submit" value="clean">
    </form>
</body>
</html>

<?php

    if(isset($_POST['clean'])){
        unset($_SESSION['cart']);
        echo "Tabela czysta";
    }
    // echo $_POST['name'];

    if(isset($_POST['name'])){
        $new_produkt = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'amount' => $_POST['amount']
        ];

        $_SESSION['cart'][]= $new_produkt;
        // var_dump($_SESSION['cart']);
        echo '<table border="1">';
        echo '<tr><th>Nazwa</th><th>Cena</th><th>Ilość</th><th>Suma</th></tr>';

        foreach ($_SESSION['cart'] as $produkt) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($produkt['name']) . '</td>';
            echo '<td>' . $produkt['price'] . '</td>';
            echo '<td>' . $produkt['amount'] . '</td>';
            echo '<td>' . ($produkt['amount'] * $produkt['price']) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

    
?>