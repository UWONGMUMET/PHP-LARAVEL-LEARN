<?php
    $hours = 50;
    $rate = 15; 
    $weekly_pay = null; 

    if ($hours <= 0) {
        $weekly_pay = 0;
    } elseif ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    } else {
        $regular_pay = 40 * $rate; 
        $overtime_hours = $hours - 40; 
        $overtime_rate = $rate * 1.5; 
        $overtime_pay = $overtime_hours * $overtime_rate; 
        $weekly_pay = $regular_pay + $overtime_pay; 
    }

    echo "You made \${$weekly_pay} this week";
?>
