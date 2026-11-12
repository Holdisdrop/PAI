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
    USUN
    <?php include "nav.php"; ?>
    <form action="<?=basename($_SERVER['PHP_SELF']) ?>" method="GET">
        <label for="">ID</label>
        <input type="number" name="id"><br>
        <input type="submit">
    </form>
    <?php
        if(isset($_GET['id'])){
            $id = $_GET["id"];
            $sql="DELETE FROM `gry` WHERE `id`='$id'";
            $result=mysqli_query($conn,$sql);
            if($result){
            echo "Gra o".$id." zostala usunieta";
            }else{
                echo "ERROR".mysqli_error($conn);
            }
        }
    ?>

</body>
</html>