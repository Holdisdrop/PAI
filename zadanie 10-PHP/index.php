<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="POST">
        <label for="name">Imie</label>
        <input type="text" id="name" name="name"><br>
        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age"> </input><br>

        

        <label for="sex">Pleć: </label>
        <input type="radio" name="sex" value="k"> Kobieta
        <input  type="radio" name="sex" value="m"> Men


        <label for="game">Ulubiona seria gier</label><br>
        <input type="checkbox" name="game1" value="GTA">GTA <br>
        <input type="checkbox" name="game2" value="FIFA">FIFA <br>
        <input type="checkbox" name="game3" value="CS">CS <br>
        <input type="checkbox" name="game4" value="CallOfDuty">Call of duty<br>
        <br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['name']) && isset($_POST['age']) && !empty($_POST["name"]) && !empty($_POST['age'])){
        echo $_POST['name'];
        echo $_POST['age'];
    }else{
        echo "wypełnij wszystkie pola";
    }

    if(isset($_POST["sex"])){
        if($_POST["sex"]=="m"){
            echo "<br>";
            echo "men";
        }else{
            echo "<br>";
            echo "Kob";
        }
    }

    

    for($i=1;$i<=4;$i++){
        if(isset($_POST["game".$i])){
            echo "<br>";
            echo $_POST["game".$i];
        }
    }
    
?>