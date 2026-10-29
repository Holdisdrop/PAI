<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./" method="POST">

    </form>
</body>
</html>

<?php
    // $x=5;
    // echo "x=$x";
    session_start(); //zaczyna sesje
    $_SESSION //zmienna super globalna przechowujaca informacje o sesji
    $_SESSION['login']="aaa"; //przypisanie wartosci do tablicy asocyjacyjnej
    unset(); //usuwamy konkretna zmienna z tablicy
    unset($_SESSION['login']);
    session_destroy(); //usuwamy(niszczymy) wszystkie zmienne z sesji
    session_unset(); //uwolnienie zmiennej spad danego klucza
    //Jesli sesja nie istnieje - session_start tworzy nowa
    //Jesli sesja istnieje - session start dolacza do istniejacej
?> -->