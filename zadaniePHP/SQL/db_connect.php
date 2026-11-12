<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "gry_db";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn){
        die("Połączenie się nie powiodło: " . "<br>");
    }else{
        echo "Polaczenie sie udalo";
    }
?>