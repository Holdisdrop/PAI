<?php
    // for($i=0;$i<10;$i++){
    //     echo $i;
    // }
    // $i=0;
    // while($i<5){
    //     echo $i;
    //     $i++;
    // }

    // $i = 1;
    // do{
    //     echo $i;
    //     $i++
    // }while($i<=5);

    // $tablica = [1,2,3,4];   
    // foreach($tablica as $wartosc){
    //     echo $wartosc;
    // }

    // $owoce = [
    //     "a"=> "jablko",
    //     "b"=> "banan",
    //     "c"=>"gruszka"
    // ];

    // foreach($owoce as $klucz => $wartosc){
    //     echo "Klucz:".$klucz." Wartość:".$wartosc;
    // };  
    $array = [1,2,3];
    $assoc_table = ['imie'=>"Ania","wiek"=>390];
    $empty_array=[];
    $array2 = array(1,2,3);
    $arrayOfNumbers = [1,2,3];
    for($i=0;$i < count($arrayOfNumbers);$i++){
        echo $arrayOfNumbers[$i];
    }

    $number = 10;
    $insertArray = [1,2,3];

    for($i=0; $i<count($insertArray);$i++){
        $insertArray[$i]=$number;
    }
    echo "<br>";
    echo var_dump($insertArray);
?>