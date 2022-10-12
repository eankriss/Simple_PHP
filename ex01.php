<?php

    $price = 10;
    $quantity = 5;
    $money = 100;
    $total = $price * $quantity; //total = 50
    $change = $money - $total;

    if ($total > $money)
    {
        trigger_error("Sorry, your money is insufficient!");
    }

    else
    {
        echo "Change: " . $change;
    }

?>