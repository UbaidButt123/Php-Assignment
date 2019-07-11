<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>

	<?php 

					$d= date("l");

					$m ="Monday";
					$t ="Tuesday";
					$w ="Wednesday";
					$th ="Thursday";
					$f="Friday";
					$s="Saturday";
					$ss="Sunday";

					if ($d==$m) {
						echo "Biryani";
					} 
					elseif ($d==$t) {
						echo "Malai Ghost";
					}
					elseif ($d==$w) {
						echo "Haleem";
					}
					elseif ($d==$th) {
						echo "Mutton karahi";
					}
					elseif ($d==$f) {
						echo "Siri Paya";
					}
					elseif ($d==$s) {
						echo "Vegetable Rice";
					}
					else {
						
						echo "Kaleeji";
					}
	

	?>

</body>
</html>