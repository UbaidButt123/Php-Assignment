<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Access Modifier</title>
</head>
<body>

	<?php
	
	class Car{
		
		public$model;

		public function getModel()

		{
			return "The car model is " .$this-> model;
		}

			public function setModel($model)
			
			{
			
				$this -> model = $model;
			
			}
			
		}

	
		$mercedes = new Car();

		$mercedes -> setModel("Mercedes");

		echo $mercedes -> getModel();

	 
	 ?>
	
</body>
</html>