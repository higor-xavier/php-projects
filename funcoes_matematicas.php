<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			$num = 4.5;

			echo ceil($num); //arredondamento para cima
			echo "<br>";
			echo floor($num); //arredondamento para baixo
			echo "<br>";
			echo round($num); //arredondamento de acordo com o valor decimal
			echo "<br>";
			echo rand(10, 20); //fornece um valor aleatório, que pode estar entre um intervalo, se fornecido
			echo "<br>";
			echo getrandmax();
			echo "<br>";
			echo sqrt(9);

		 ?>	

	</body>	
</html>