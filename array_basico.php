<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			//sequenciais (numéricos)
			/*$lista_frutas  = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
			$lista_frutas[] = 'Abacaxi';

			echo '<pre>';
				var_dump($lista_frutas);
			echo '</pre>';

			echo '<br>';

			echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';

			echo '<br>';

			echo $lista_frutas[2];*/

			//associativos
			$lista_frutas = [
			'a' => 'Banana',
			'b' => 'Maçã',
			'x' => 'Morango',
			'z' => 'Uva',
			'2' => 'Abacate'];

			echo '<pre>';
			var_dump($lista_frutas);
			echo '</pre>';

			echo '<br>';

			$lista_frutas['w'] = 'Abacaxi';

			echo $lista_frutas['w'];

		 ?>	

	</body>	
</html>