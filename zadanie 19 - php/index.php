<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "warehouse";

    // tworzenie połączenia
    $conn = mysqli_connect($localhost, $username, $password, $database);

    if ($conn->connect_error) {
        die("Polaczenie nie powiodlo sie: " . $conn->connect_error);
    }

    echo "Polaczenie sie powiodlo";
    // $localhost="localhost";
    // $username = "root";
    // $password="";
    // $database="warehouse";

    // //tworzenie polaczenia
    // $conn = new mysqli($localhost,$username,$password,$database)

    // if($conn->connect_error){
    //     die("Polaczenie nie powiedlo sie;". $conn->connect_error);
    // }
    // // if(!$conn){
    //     die("Polaczenie nie powiedlo sie;");
    // }
    // echo "Polaczenie sie powiedo"
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

        $nazwa = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];

        $sql = "INSERT INTO `products`(`nazwa`, `amount`, `price`) VALUES ('$nazwa','$price','$amount')";

        if(mysqli_query($conn,$sql)){
            echo "Udalo sie dodac rekord";
        }else{
            echo "nie".mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
</body>
</html>