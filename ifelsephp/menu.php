<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>

		
		<?php

		

		$t = date("l");

		$days = array(
			
			"Monday", "Tuesday", "wednesday",
			"Thursday", "Friday", "Saturday", 
			"Sunday" 
		
		);

		  

			if ($t==$days[0]) {
			    echo "Biryani !";
			} 

			elseif ($t==$days[1]) {
			    echo "Nehari !";
			}

			elseif ($t==$days[2]) {
			    echo "Haleem !";
			}

			elseif ($t==$days[3]) {
			    echo "Qorma !";
			}

			elseif ($t==$days[4]) {
			    echo "Chicken Nugets !";
			}

			elseif ($t==$days[5]) {
			    echo "Chicken Karahi !";
			}

			else {
			    echo "Fish Qari !";
			}
		

		?>

</body>
</html>