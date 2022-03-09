<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>
		
		<?php

			$nome = "Higor";
			$cor = "vermelho";
			$idade = "23";
			$atv_preferida = "video-game";

			// operador .
			echo "Olá, ".$nome.". Vi que sua cor favorita é ".$cor.", estou vendo também que sua idade é de ".$idade." anos e que gosta de jogar ".$atv_preferida."<br>";

			//aspas duplas
			echo "Olá, $nome. Vi que sua cor favorita é $cor, estou vendo também que sua idade é de $idade anos e que gosta de jogar $atv_preferida <br>";

			//aspas simples são mais eficientes, por não precisar verificar se há variáveis no meio da String, por isso dê preferência à elas.


		?>

	</body>	
</html>