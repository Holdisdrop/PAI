<?php
    $currentPage = basename($_SERVER['PHP_SELF'])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
    <a href="index.php" class="<?=$currentPage == 'index.php' ? 'active': '' ?>">Start</a>
    <a href="nav.php" class="<?=$currentPage == 'nav.php' ? 'active': '' ?>">Kontakt</a>
    <a href="footer.php" class="<?=$currentPage == 'footer.php' ? 'active': '' ?>">footer</a>
    <a href="dodaj.php" class="<?=$currentPage == 'dodaj.php' ? 'active': '' ?>">Dodaj</a>
    <a href="usun.php" class="<?=$currentPage == 'usun.php' ? 'active': '' ?>">Usun</a>
    <a href="edytuj.php" class="<?=$currentPage == 'edytuj.php' ? 'active': '' ?>">edytuj</a>
    <a href="utworz.php" class="<?=$currentPage == 'utworz.php' ? 'active': '' ?>">utworz</a>
    <a href="lista.php" class="<?=$currentPage == 'lista.php' ? 'active': '' ?>">lista</a>
</nav>
</body>
</html>
