<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./"></form>

<?php
    $_SESSION['favcolor']="nigga;";
    $_SESSION['favanimal']="cat;";
    echo "Zmienne sesyjne ustawione:". $_SESSION['favcolor'] . "" . $_SESSION['favanimal'];
?>
</body>
</html>