<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Draw Stars</title>
</head>
<body>
	<?php

	function draw_stars($star_array){

		foreach ($star_array as $key => $value) {
			
			if(is_string($value)){
				$length = strlen($value);
				$first_letter = strtolower($value[0]);

				for ( $i = 0 ; $i < $length ; $i++ ){
					echo $first_letter;
				}
			}
			else {
					for( $i = 1 ; $i <= $value ; $i++ ){
						echo "*";
					}
				}

			echo "<br>";
		}


	}

	// $x = array(4, 6, 1, 3, 5, 7, 25);

	$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

	draw_stars($x);



	?>
</body>
</html>