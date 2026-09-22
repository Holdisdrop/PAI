<?php
    $array = [1,2,3,4,5];
    $index_to_remove=2;
    unset($array[$index_to_remove]);
    var_dump($array);

    for($i=0;$i<count($array);$i++){
        $array[$i]=0;
    }
    echo "<br>";
    var_dump($array);

    echo "<h1>Tablica dwuwymiarowa</h1>";

    $array2D=[
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

    echo $array2D[1][2];

    for($i=0;$i<count($array2D);$i++){
        for($j=0;$j<count($array2D[$i]);$j++){
            echo $array2D[$i][$j];
        }
    }
    
    $osoba = [
        ["imie"=> "Jan","wiek"=>20],
        ["imie"=> "Anna","wiek"=>25],
        ["imie"=> "Piotr","wiek"=>30]
    ];

    foreach($osoba as $wiersz){
        foreach($wiersz as $element){
            echo $element. " ";
        };
    };

    for($i=0;$i<count($osoba);$i++){
        foreach($osoba[$i] as $element){
            echo $element. " ";
        };
    }

    $array1 = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16]
    ];
    
    $suma=[];

    for($i=0;$i<count($array1);$i++){
        for($j=0;$j<count($array1[$i]);$j++){
            if($i==$j){
                $array1[$i][$j]=0;
            }
            echo " ";
        }
    }

    // for($i=0;$i<count($array1);$i++){
    //     for($j=0;$j<count($array1[$i]);$j++){
    //         if($i==$j){
    //             $array1[$i][$j]=0;
    //         }
    //         echo " ";
    //     }
    // }

    // for($i=0;$i<count($array1);$i++){
    //     for($j=0;$j<count($array1[$i]);$j++){
    //         $suma+=$array1[$i][$j];
    //         echo " ";
    //     }
    // }
    // echo "Suma: $suma";

    // printArray($array1);

    // function printArray($array2D){
    //     for($i=0;$i<count($array2D);$i++){
    //         for($j=0;$j<count($array2D[$i]);$j++){
    //             echo $array2D[$i][$j];
    //         }
    //         echo "<br>";
    //     }
    // }
?>