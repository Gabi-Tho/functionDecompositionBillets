<?php

function decompositionBillet($money){
    $hundredBills = $money/100;
    settype($hundredBills, "integer");
    if($hundredBills != 0){
        echo $hundredBills." "."billets de 100"."<br>";
        $money = $money % 100;
    }


    $fiftyBills = $money/50;
    settype($fiftyBills, "integer");
    if($fiftyBills != 0){
        settype($fiftyBills, "integer");
        echo $fiftyBills." "."billets de 50"."<br>";
        $money = $money % 20;
    }


    $twentyBills = $money/20;
    settype($twentyBills, "integer");
    if($twentyBills != 0){
        settype($twentyBills, "integer");
        echo $twentyBills." "."billets de 20"."<br>";
        $money = $money % 20;
    }


    $tenBills = $money/10;
    settype($tenBills, "integer");
    if($tenBills != 0){
        echo $tenBills." "."billets de 10"."<br>";
        $money = $money % 10;
    }


    $fiveBills = $money/5;
    settype($fiveBills, "integer");
    if($fiveBills != 0){
    echo $fiveBills." "."billets de 5"."<br>";
    $money = $money % 5;
    }


    $twoBills = $money/2;
    settype($twoBills, "integer");
    if($twoBills != 0){
        $money = $money % 2;
        echo $twoBills." "."billets de 2"."<br>";
    }

    $oneBills = $money/1;
    settype($oneBills, "integer");
    if($oneBills != 0){
        $money = $money % 1;
        echo $oneBills." "."billet de 1"."<br>";
    }

}


echo decompositionBillet(3844);

// $hundredBills = $money/100;
// settype($hundredBills, "integer");
// if($hundredBills != 0){
//     echo $hundredBills." "."billets de 100"."<br>";
//     $money = $money % 100;
// }


// $fiftyBills = $money/50;
// settype($fiftyBills, "integer");
// if($fiftyBills != 0){
//     settype($fiftyBills, "integer");
//     echo $fiftyBills." "."billets de 50"."<br>";
//     $money = $money % 20;
// }


// $twentyBills = $money/20;
// settype($twentyBills, "integer");
// if($twentyBills != 0){
//     settype($twentyBills, "integer");
//     echo $twentyBills." "."billets de 20"."<br>";
//     $money = $money % 20;
// }


// $tenBills = $money/10;
// settype($tenBills, "integer");
// if($tenBills != 0){
//     echo $tenBills." "."billets de 10"."<br>";
// $money = $money % 10;
// }


// $fiveBills = $money/5;
// settype($fiveBills, "integer");
// if($fiveBills != 0){
//     echo $fiveBills." "."billets de 5"."<br>";
// $money = $money % 5;
// }


// $twoBills = $money/2;
// settype($twoBills, "integer");
// if($twoBills != 0){
//     $money = $money % 2;
//     echo $twoBills." "."billets de 2"."<br>";
// }

// $oneBills = $money/1;
// settype($oneBills, "integer");
// if($oneBills != 0){
//     $money = $money % 1;
//     echo $oneBills." "."billet de 1"."<br>";
// }

?>