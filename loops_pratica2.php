<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			$funcionarios = [
				['nome' => 'João', 'salario' => 2500, 'data_nascimento' => '06/03/1998'],
				['nome' => 'Maria', 'salario' => 3000, 'data_nascimento' => '06/10/1998'],
				['nome' => 'Maria', 'salario' => 3000, 'data_nascimento' => '06/10/1998'],
				['nome' => 'Maria', 'salario' => 3000, 'data_nascimento' => '06/10/1998'],
				['nome' => 'Júlia', 'salario' => 3000, 'data_nascimento' => '06/12/1998']
			];

			echo "<pre>";
				print_r($funcionarios);
			echo "</pre>";

			foreach ($funcionarios as $idx => $funcionario) {

				foreach ($funcionario as $idx2 => $valor) {
					echo "$idx2 - $valor <br>";
				}
				echo '<hr>';

			}

		 ?>	

	</body>	
</html>