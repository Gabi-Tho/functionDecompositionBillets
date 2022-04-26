<?php
function decompositionBillet($money){
    $hundredBills = $money/100;
    settype($hundredBills, "integer");
    if($hundredBills != 0){ ?>
        <tr>
            <td> <?=  $hundredBills;?> </td>
            <td>billets de 100<br></td>
        </tr><?php
        $money = $money % 100;
    }

    $fiftyBills = $money/50;
    settype($fiftyBills, "integer");
    if($fiftyBills != 0){ ?>
        <tr>
            <td class="margin"> <?=  $fiftyBills." "."billets"." "."de";?> </td>
            <td> <?=  "50"."<br>";?></td>
        </tr><?php
        settype($fiftyBills, "integer");
        $money = $money % 20;
    }

    $twentyBills = $money/20;
    settype($twentyBills, "integer");
    if($twentyBills != 0){ ?>
        <tr>
            <td> <?=  $twentyBills." "."billets"." "."de";?> </td>
            <td> <?=  "20"."<br>";?></td>
        </tr><?php
        settype($twentyBills, "integer");
        $money = $money % 20;
    }

    $tenBills = $money/10;
    settype($tenBills, "integer");
    if($tenBills != 0){ ?>
        <tr>
            <td> <?=  $tenBills." "."billets"." "."de";?> </td>
            <td> <?=  "10"."<br>";?></td>
        </tr><?php
        $money = $money % 10;
    }

    $fiveBills = $money/5;
    settype($fiveBills, "integer");
    if($fiveBills != 0){ ?>
        <tr>
            <td> <?=  $fiveBills." "."billets"." "."de";?> </td>
            <td> <?=  "5"."<br>";?></td>
        </tr><?php
    $money = $money % 5;
    }

    $twoBills = $money/2;
    settype($twoBills, "integer");
    if($twoBills != 0){ ?>
        <tr>
            <td> <?=  $twoBills." "."billets"." "."de";?> </td>
            <td> <?=  "5"."<br>";?></td>
        </tr><?php
        $money = $money % 2;
    }

    $oneBills = $money/1;
    settype($oneBills, "integer");
    if($oneBills != 0){ ?>
        <tr>
            <td> <?=  $oneBills." "."billets"." "."de";?> </td>
            <td> <?=  "5"."<br>";?></td>
        </tr><?php
        $money = $money % 1;
        echo $oneBills." "."billet de 1"."<br>";
    }

}
?>

<h2>Decomposition de 3844</h2>

<?php
echo decompositionBillet(3844);

?>

<h2> Decomposition de 5266 </h2>

<?php

echo decompositionBillet(5266);

?>