<?php
    session_start();
    if(!isset($_SESSION["sesja"])){
        $_SESSION["sesja"]=[];
    }

    if(isset($_POST["dodaj"])){
        $cena = $_POST['cena'];
        $produkt=$_POST['produkt'];
        $liczba=$_POST['liczba'];
        if($produkt!=""&&$cena>0&&$liczba>0){
            $_SESSION["sesja"][]=[
                "cena"=>$cena,
                "produkt"=>$produkt,
                "liczba"=>$liczba,
            ];  
        }
        exit;
    }

    if(isset($_POST['wyczysc'])){
        $_SESSION['sesja']=[];
        exit;
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
    <!-- <form action="./" method="GET">
        <label for="" name="imie">Imie:</label>
        <input type="text" name="imie" id="imie"><br>
        <input type="submit">
    </form>

    <form action="./" method="POST">
        <label for="" name="wiek">Wiek:</label>
        <input type="text" name="wiek" id="wiek"><br>
        <input type="submit">
    </form> -->

    <form action="./" method="POST">
        <label for="" name="produkt">Nazwa produktu</label>
        <input type="text" name="produkt" id="produkt"><br>
        <label for="" name="cena">Cena produktu</label>
        <input type="text" name="cena" id="cena"><br>
        <label for="" name="liczba">Liczba sztuk</label>
        <input type="text" name="liczba" id="liczba"><br>
        <button type="submit" name="dodaj">Dodaj do koszyka</button>
    </form>

    <h1>Twoj koszyk</h1>
    <?php
        $suma = 0;
        $suma_po_rabacie = 0;

        if (empty($_SESSION["sesja"])) {
            echo "Koszyk jest pusty";
        } else {
            foreach ($_SESSION["sesja"] as $Produkt) {
                $wartosc = $Produkt['cena'] * $Produkt['liczba'];

                if ($wartosc > 500) {
                    $rabat = $wartosc * 0.10;
                } else {
                    $rabat = 0;
                }

                $po_rabacie = $wartosc - $rabat;

                $suma += $wartosc;
                $suma_po_rabacie += $po_rabacie;

                echo htmlspecialchars($Produkt['produkt']) . ": ";
                echo $Produkt['cena'] . " zł za sztukę, ";
                echo $Produkt['liczba'] . " szt., ";
                echo "wartość: " . $wartosc . " zł, ";

                if ($rabat > 0) {
                    echo "rabat: " . $rabat . " zł, ";
                }

                echo "po rabacie: " . $po_rabacie . " zł";
                echo "<br>";
            }

            echo "<hr>";
            echo "Suma przed rabatem: " . $suma . " zł<br>";
            echo "Suma po rabacie: " . $suma_po_rabacie . " zł<br>";
        }
    ?>

    <form action="./" method="POST">
        <button type="submit" name="wyczysc">wyczysc</button>
    </form>
</body>
</html>

<?php

    // $a=$_POST['produkt'];
    // $b=$_POST['cena'];
    // $c=$_POST['liczba'];
    // if(isset($a)&&!empty($a)
    // &&isset($b)&&!empty($b)
    // &&isset($c)&&!empty($c)){
    //     $d=$b*$c;
    //     echo "Nazwa produktu:$a <br> cena za sztuke:$b <br> liczba sztuk: $c <br> koszt zakupu: $dz zl";
    // }else{
    //     echo"jedna z informacji była wypełniona błednie lub nie wypełniona wcale";
    // }
    // $a=$_GET["imie"];
    // if(isset($a)&&!empty($a)){
    //     echo "$a";
    // }

    // $b=$_POST["wiek"];
    // if(isset($b)&&!empty($b)){
    //     echo "$b";
    // }
?>