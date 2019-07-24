<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Class</title>
</head>
<body>

	<?php 

		class Car { 
				
				public $comp; 
				public $color = "black"; 
				public $hasSunRoof = true; 

				public function hello()

				{
					return "windshield";
				}
				
				} 

				$bugati = new Car (); 
				$audi = new Car ();
				$bmw = new Car ();

				$bugati -> color ='blue';
				$audi -> color ='red';
				$bmw -> color ='white';
				$bugati -> comp ="Bugati";
				$audi -> comp ="Audi";
				$bmw -> comp ="BMW";

				echo $bugati -> color;
				echo "<br />";
				echo $audi -> color;
				echo "<br />";
				echo $bmw -> color;
				echo "<br />";
				echo $bugati -> comp;
				echo "<br />";
				echo $audi -> comp;
				echo "<br />";
				echo $bmw -> hello();
				echo "<br />";





				


	 ?>
	
</body>
</html>