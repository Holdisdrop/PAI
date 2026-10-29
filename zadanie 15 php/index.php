<?php
    $name="username";
    $value="Bartek";

    //setcookie(name,value,expire,path,domin,secure,)
    //wymaane:name
    //reszta opcjonalna
    setcookie($name,$value,time()+(86400*30), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_COOKIE[$name])){
        echo "Ciacho:".$name." jest ustawione";
        echo "wartosc:". $_COOKIE[$name];
    }else{
        echo "CIacho".$name."nie jestem ustawione";
    }
    //Modyfikacja
    setcookie();
    //usuwanie
    setcookie("username","",time()-3600)
    //czy cookies sa aktywowane
    if(count($_COOKIE)>0){
        echo "Ciastka wlaczone";
    }else{
        echo"Ciastka wylaczone";
    }
?>
</body>
</html>