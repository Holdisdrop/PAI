<?php
// zadanie1
//     for($i=1;$i<=1000;$i++){
//         if($i%3==0&&$i%7==0){
//             echo $i," ";
//         }
//     }
// zadanie2
    // for($i=0;$i<=100;$i++){
    //     if($i%3==0){
            
    //     }else{
    //         echo $i, " ";
    //     }
    // };
// zadanie 3
    // $n=4;
    // if($n%3==0){
    //     for($i=$n;$i<=($n+(19*3));$i++){
    //         if($i%3==0){
    //             echo $i," ";
    //         }
    //     }
    // }else{
    //     $n+(3-$n%3);
    //     for($i=$n;$i<=($n+(19*3));$i++){
    //         if($i%3==0){
    //             echo $i," ";
    //         }
    //     }
    // }
    // $n=3;
    // $i=$n;
    // $licznik=0;
    // while($licznik<21){
    //         if($i%3==0){
    //             echo $i," ";
                
    //             $licznik++;
    //         }
    //         $i++;
        
    // }
    // zadanie 4
    // $tab = [1,2,3,4,5,6,7,1,12];
    // $max=$tab[0];
    // for($i=0;$i<count($tab);$i++){
    //     if($max<$tab[$i]){
    //         $max=$tab[$i];
    //     }
    // }
    // echo $max;
    
    for($i=1;$i<=10;$i++){
        for($j=1;$j<=10;$j++){
            echo $i*$j," ";
            // echo "<br>";
        }
        echo "<br>";
    }
    echo "<br>";
    for($i=1;$i<=8;$i++){
        for($j=1;$j<=8;$j++){
            if(($i+$j)%2==0){
                echo "X";
            }else{
                echo "0";
            }
           
        }
        echo "<br>";
    }

    

?>