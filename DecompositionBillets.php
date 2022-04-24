<?php

$hundredBills = $money2/100;
settype($hundredBills, "integer");
echo $hundredBills." "."billets de 100"."<br>";
$money2 = $money2 % 100;

$fiftyBills = $money2/50;
settype($fiftyBills, "integer");
echo $fiftyBills." "."billets de 50"."<br>";
$money2 = $money2 % 50;

$twentyBills = $money/20;
settype($twentyBills, "integer");
echo $twentyBills." "."billets de 20"."<br>";
$money = $money % 20;

$tenBills = $money2/10;
settype($tenBills, "integer");
echo $tenBills." "."billets de 10"."<br>";
$money2 = $money2 % 10;

$fiveBills = $money2/5;
settype($fiveBills, "integer");
echo $fiveBills." "."billets de 5"."<br>";
$money2 = $money2 % 5;
echo $money2;

$twoBills = $money/2;
settype($twoBills, "integer");
$money2 = $money2 % 2;
echo $twoBills." "."billets de 2"."<br>";

$oneBills = $money2/1;
settype($fiveBills, "integer");
$money2 = $money2 % 2;
echo $oneBills." "."billet de 1"."<br>";

?>