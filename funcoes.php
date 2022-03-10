<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			//void function
			function exibirBoasVindas() {
				echo 'Bem-vindo ao curso de PHP <br>';
			}

			exibirBoasVindas();

			//function com retorno
			function calcularAreaTerreno($largura, $comprimento) {
				return $largura * $comprimento;
			}

			$area = calcularAreaTerreno(8, 8);

			echo 'A área do terreno é de: '. $area ;

		 ?>	

	</body>	
</html>