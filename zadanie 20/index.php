<?php
    require "db_connect.php";
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
        <label for="id">ID:</label>
        <input type="number" name="id"><br>

        <label for="name">Nazwa produktu</label>
        <input type="text" name="name" id="name" required><br>

        <label for="price">Cena produktu</label>
        <input type="number" name="price" id="price" step="0.01" min="0" required><br>

        <label for="amount">Liczba sztuk</label>
        <input type="number" name="amount" id="amount" min="1" required><br>

        <input type="submit" value="Wyslij">
    </form>
<?php
    // $conn; //ustawienie polaczenia, DO UZUPELNIENIA
    if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])&&isset($_POST["id"])){
        
        $id=$_POST["id"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];

        $sql="UPDATE `products` SET `name`='$name',`price`='$price',`amount`='$amount' WHERE `id`= '$id'";

        $result = mysqli_query($conn,$sql);
        
        if($result){
            echo "Zaaktualizowano rekord o id:".$id;
        }else{
            echo "nie".mysqli_error($conn);
        }
    }
?>
</body>
</html>