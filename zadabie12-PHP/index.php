<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" id="login"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>
        <label for="password">Haslo</label>
        <input type="password" name="password" id="password"><br>
        <label for="age">Wiek</label>
        <input type="number" name="age" id="age"><br>
        <label for="regulamin">Regulamin</label>
        <input type="checkbox" name="regulamin" id="regulamin"> akceptuje regulamin<br>
        <button>zarejestruj sie</button>
        
    </form>
</body>
</html>

<?php
    $i=1;
    // $login=$_POST["login"];
    // if(strlen($login)<=3&&!empty($_POST["login"])){
    //     echo"nigga";
    // }else{
    //     echo"nigga2";
    // }
    if (
        isset($_POST["login"], $_POST["password"], $_POST["age"])
        && !empty(($_POST["login"]))
        && strlen($_POST["login"]) >= 3
        && strlen($_POST["password"]) >= 8
        && strlen($_POST["age"])
        && $_POST["age"] >= 18
        && $_POST["age"] <= 100
        && isset($_POST["regulamin"])
    ) {
        echo "Rejestracja poprawna!";
    } else {
        echo "Jest błąd!";
    }
?>