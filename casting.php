<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			//gettype() => retorna tipo da variável
			$valor = 10; //int ou integer
			$valor2 = (float)$valor; //double ou float
			$valor3 = (string)$valor2; //double to string

			echo gettype($valor).'<br>';
			echo gettype($valor2).'<br>';
			echo gettype($valor3).'<br>';

		 ?>	

	</body>	
</html>