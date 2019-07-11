<!DOCTYPE html>
 <head>
	<title>PHP - Calculate Electricity Bill</title>
</head>
 

<?php
    
    $units = 250;
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

 
    if($units <= 50) {
        $bill = $units * 3.50;
        echo "$bill";
    }
    else if(($units > 50) && ($units <= 100)) {
        $temp = 50 * 3.50;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * 4.00);
        echo "$bill";
    }
    else if(($units > 100) && ($units <= 200)) {
        $temp = (50 * 3.5) + (100 * 4.00);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * 5.20);
        echo "$bill";
    }
    else {
        $temp = (50 * 3.5) + (100 * 4.00) + (100 * 5.20);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * 6.50);
        echo "$bill";
    }
    
 
?>
</body>
</html>