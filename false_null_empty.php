<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			//false (true/false) - tipo variável boolean
			//null e empty - valores especiais

			$funcionario1 = null;
			$funcionario2 = '';
			$funcionario3 = false;

			//valores null
			if (is_null($funcionario1)) {
				echo 'Sim, a variável é null';
			}
			else{
				echo 'Não, a variável não é null';
			}

			echo '<br>';

			if (is_null($funcionario2)) {
				echo 'Sim, a variável é null';
			}
			else{
				echo 'Não, a variável não é null';
			}

			echo '<br>';

			if (is_null($funcionario3)) {
				echo 'Sim, a variável é null';
			}
			else{
				echo 'Não, a variável não é null';
			}

			echo '<br>';

			//valores vazio
			if (empty($funcionario1)) {
				echo 'Sim, a variável é empty';
			}
			else{
				echo 'Não, a variável não é empty';
			}

			echo '<br>';

			if (empty($funcionario2)) {
				echo 'Sim, a variável é empty';
			}
			else{
				echo 'Não, a variável não é empty';
			}

			echo '<br>';

			if (empty($funcionario3)) {
				echo 'Sim, a variável é empty';
			}
			else{
				echo 'Não, a variável não é empty';
			}

			//RESUMO: todas podem ser empty, mas só null pode ser null

		 ?>	

	</body>	
</html>