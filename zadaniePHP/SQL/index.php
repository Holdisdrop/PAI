<?php
    require_once "db_connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
            display: flex;
            gap: 20px;
            background: #333;
            padding: 15px;
        }

        nav a{
            color: white;
            text-decoration: none;
        }

        nav a:hover{
            color: #00aaff;
        }

        nav a.active{
            color: #00aaff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    INDEX
    <?php
        include "nav.php";
    ?>
</body>
</html>