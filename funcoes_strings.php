<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			$texto = 'Curso completo de PHP';

			//string to lower
			echo $texto .'<br>';
			echo strtolower($texto) .'<br>';
			echo '<hr>';
			
			//string to upper
			echo $texto .'<br>';
			echo strtoupper($texto) .'<br>';
			echo '<hr>';

			//string capitalized
			echo $texto .'<br>';
			echo ucfirst($texto) .'<br>';
			echo '<hr>';

			//tamanho da string
			echo $texto .'<br>';
			echo strlen($texto) .'<br>';
			echo '<hr>';

			//substituir uma cadeia determinada de caracteres
			echo $texto .'<br>';
			echo str_replace('PHP', 'JavaScript', $texto) .'<br>'; //essa função é case sensitive
			echo '<hr>';

			//Extrair determinada parte da string
			echo $texto .'<br>';
			echo substr($texto, 6, 8) .'<br>'; //primeiro valor é de onde irá começar e o segundo valor são quantos caracteres serão extraídos
			echo '<hr>';

		 ?>	

	</body>	
</html>