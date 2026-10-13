<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="GET">
        <label >Imie:</label>
        <input type="text" name="name" id="name"><br>
        <label >Wiek:</label>
        <input type="number" name="age" id="age"><br>

        

        <label for="ticket">Bilet</label>
        <select name="ticket" id="ticket">
            <option value="normal">Normalny</option>
            <option value="reduced">Ulgowy</option>
        </select><br>

        <input type="submit" value="Oblicz cenę">
    </form>
</body>
</html>

<?php
    $ticket = $_GET['ticket'];
    $ticketPrice = 0;
    $age = $_GET["age"];
    if($ticket=="normal" && $age>7){
        $ticketPrice=30;
    }elseif($ticket=="reduced"&& $age>7){
        $ticketPrice=15;
    }elseif($age<=7){
        $ticketPrice=0;
    }
    echo $ticketPrice;
    echo "Czesc" . $_GET["name"];
    
    echo "Twoj wiek?".$age;
    echo "rodzaj biletu".$ticket;
    echo "cena biletu".$ticketPrice;
?>