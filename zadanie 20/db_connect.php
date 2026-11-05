<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "warehouse";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn){
        die("Połączenie się nie powiodło: " . "<br>");
    }
?>