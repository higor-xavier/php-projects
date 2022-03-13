<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			$valores_sorteados = [];
			$numero;

			for ($i = 0; $i < 6; $i++) { 
				$numero = rand(1,60);
				if(in_array($numero, $valores_sorteados)){
					$i--;
					continue;
				}
				$valores_sorteados[$i] = $numero;
			}
			
			sort($valores_sorteados);
			echo "<pre>";
				print_r($valores_sorteados);
			echo "</pre>";

		 ?>	

	</body>	
</html>