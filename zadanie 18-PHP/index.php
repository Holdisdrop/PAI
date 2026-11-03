<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "warehouse";

    // tworzenie połączenia
    $conn = new mysqli($localhost, $username, $password, $database);

    if ($conn->connect_error) {
        die("Polaczenie nie powiodlo sie: " . $conn->connect_error);
    }

    echo "Polaczenie sie powiodlo";
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
<?php
    $conn; //ustawienie polaczenia, DO UZUPELNIENIA
    if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){
        echo "Nazwa:". $_POST["name"]."<br>";
        echo "Price:". $_POST["price"]."<br>";
        echo "Amount:". $_POST["amount"]."<br>";

        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];

        $sql="INSERT INTO Products(name,amount,price) VALUES (?,?,?);";
        $stmt = $conn -> prepare($sql); //przygotowuje na połaczeniu zaoytania SQL;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
        $stmt -> bind_param("sid",$name,$amount,$price);
        $stmt->execute();
    }
?>
</body>
</html>