<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			/*while (condition) {
				// code...
			}

			do {
				// code...
			} while (condition);*/

			for ($x=1; $x <= 10; $x++) {

				if ($x == 10) {
					break;
					//continue;
				}

				echo "X = $x <br>";
			}

		 ?>	

	</body>	
</html>