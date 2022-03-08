<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>
		
		<?php

			//String
			$nome = 'Higor';

			//int
			$idade = 23;

			//float
			$peso = 82.6;

			//boolean
			$fumante = false; //(true = 1) ou (false = vazio) no caso do false, não é impresso na tela pelo echo

		?>

		<h1>Ficha Cadastral</h1>
		<br>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante ?></p>

	</body>	
</html>