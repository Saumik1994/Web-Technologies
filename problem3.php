<!DOCTYPE html>
<html>
	<head>
		
	</head>
	
	<body>
		<?php
			$length = 4;
			$width = 5;
			
			$perimeter = 2 * ($length + $width);
			$area = $length * $width;
			
			if( $length == $width){
				echo "the shape is a square<br>";
				echo "The perimeter of the Square is: $perimeter<br>";
				echo "The Area of the Square is : $area<br>";
			}
			else{
				echo "The perimeter of the Rectangle is: $perimeter<br>";
				echo "The Area of the Rectangle is : $area<br>";
			}
			
		?>
	</body>
</html>