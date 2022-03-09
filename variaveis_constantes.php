<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>
		
		<?php
			//usa-se define(nome, valor) para definir uma constante
			define('BD_URL', 'endereco_bd_dev'); //por convenção, o nome da constante é em caixa alta
			define('BD_USUARIO', 'usuario_bd_dev'); 
			define('BD_SENHA', 'senha_bd_dev');

			//Para chamar uma constante, não é necessário o uso de $
			echo BD_URL .'<br>';
			echo BD_USUARIO .'<br>';
			echo BD_SENHA .'<br>';

		?>

	</body>	
</html>