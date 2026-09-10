<?php
    echo "dziala";
    $zmienna = 4555555555555;
    if($zmienna>4){
        echo" weiksze niz 4";
    } else if($zmienna==5){
        echo"zmienna rowna 5";
    }else{
        echo "mniejsza niz 4";
    }
    $kolor = "red";
    switch($kolor){
        case "red":
            echo "czerwony";
            break;
        case "blue":
            echo"niebieski";
            break;
        case "yeallow";
            echo "Żółty";
            break;
        default:
            echo "kolor nierozpoznany";}
    $a = 1;
    $b = -5;
    $c = 6;

    $d = $b*$b;
    $f = 4*$a*$c;
    $g = $d-$f;

    $x1 = (-$b-sqrt($g))/(2*$a);
    $x2 = (-$b+sqrt($g))/(2*$a);

    $x0 = (-$b/2*$a);
    // echo "a";
    echo " $g";
    if($g>0){
        echo" dwa miejsca zerowe";
        echo "X1: $x1, X2: $x2";
    }else if($g==0){
        echo "jedno miejsce zerowe";
        echo "X0: $x0";
    }else{
        echo "brak miejsca zerowego";
    }

 
?>