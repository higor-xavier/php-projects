<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			$x = 1;
			
			do {
				//continue
				//break
				//echo 'Entrou no Do while';
				echo "X = $x <br>";
				$x ++;
			} while ($x < 9);

			echo "<br>";

			while($x < 9){
				echo 'Entrou no while';
			}
		 ?>	

	</body>	
</html>