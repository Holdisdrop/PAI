<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Dodaj
    <?php include "nav.php"; ?>
    <form action="<?=basename($_SERVER['PHP_SELF']) ?>" method="GET">
        <label for="">Tytul</label>
        <input type="text" name="tytul"><br>
        <label for="">Gatunek</label>
        <input type="text" name="gatunek"><br>
        <label for="">Platforma</label>
        <input type="text" name="platforma"><br>
        <label for="">Rok_wydania</label>
        <input type="number" name="rok_wydania"><br>
        <label for="">Ocena</label>
        <input type="number" name="ocena"><br>
        <input type="submit">
    </form>
    <?php
        if(isset($_GET['tytul'])&&isset($_GET['gatunek'])&&isset($_GET['platforma'])&&isset($_GET['rok_wydania'])&&isset($_GET['ocena'])){
            $tytul = $_GET["tytul"];
            $gatunek = $_GET["gatunek"];
            $platforma = $_GET["platforma"];
            $rok_wydania = $_GET["rok_wydania"];
            $ocena = $_GET["ocena"];
            $sql="INSERT INTO `gry`(`tytul`, `gatunek`, `platforma`, `rok_wydania`, `ocena`) VALUES ('$tytul','$gatunek','$platforma','$rok_wydania','$ocena')";
            $result=mysqli_query($conn,$sql);


            if($result){
            echo "Gra Zostala dodana";
            }else{
                echo "ERROR".mysqli_error($conn);
            }
        }
    ?>

</body>
</html>
