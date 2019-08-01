<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Traits Php</title>
</head>
<body>

	<?php 

		trait Price {
			
			public function changePriceByDollars($price, $change)
			
			{
			
				return $price + $change;
			
			}
			
			} 
			
		class Bmw {
				
				use Price;
			
			}
			
		class Mercedes {
				
				use Price;
			} 
			
		$bmw1 = new Bmw();
			
		echo $bmw1 -> changePriceByDollars(45000, +3000);
			
		$mercedes1 = new Mercedes();
			
		echo $mercedes1 -> changePriceByDollars(42000, -2100);



		?>
	
</body>
</html>