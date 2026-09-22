<?php
    $array=[2,2,3,4,5];
    $array1=[11,12,13,14,15];
    
    printArray($array);
    printArray($array1);
    echo sumNumber(1,2,3);
    echo "<br>";
    echo multiplyNumber(9,1);
    echo "<br>";
    echo zmiannaNawieka("tksk");
    echo "<br>";
    echo czyPierwszaLiczba(7);
    echo "<br>";
    echo wypiszLiczbyPierwszeZZakresu();
    
    function printArray($array){
        for($i=0;$i<count($array);$i++){
            echo $array[$i];
        }
        echo "<br>";
    }

    function sumNumber(...$x){
        $sum=0;
        for($i=0;$i<count($x);$i++){
            $sum=$sum+$x[$i];
        }
        return $sum;
        echo"<br>"; 
    }

    function multiplyNumber(int $a,int $b=9):int{
        return $a*$b;   
    }

    function zmiannaNawieka(string $tekst):string{
        return strtoupper($tekst);  
    }

    function czyPierwszaLiczba(int $n):bool{
        if($n<2){
            return false;
        }

        for($i=2;$i<=sqrt($n);$i++){
            echo $i;
            if(($n % $i)==0){
                echo $n . " " . $i;
                echo "<br>";
                return false;
            }
        };
        return true;
    };
    function wypiszLiczbyPierwszeZZakresu($poczatek,$koniec){
        for($i=$poczatek;$i<=$koniec;$i++){
            if(czyPierwszaLiczba($i)){
                echo $i;
            }
        }
    }
?>