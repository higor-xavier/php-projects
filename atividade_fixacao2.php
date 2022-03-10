<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			function calcularImposto($salario) {

				$imposto = 0;

				if ($salario <= 1903.98) {
					$imposto = $salario * 0;
				}
				else if ($salario >= 1903.99 && $salario <= 2826.65) {
					$imposto = $salario * 0.075;
				}
				else if ($salario >= 2826.66 && $salario <= 3751.05) {
					$imposto = $salario * 0.15;
				}
				else if ($salario >= 3751.06 && $salario <= 4664.68) {
					$imposto = $salario * 0.225;
				}
				else if ($salario > 4664.68) {
					$imposto = $salario * 0.275;
				}

				return $imposto;
			}

			echo 'A aliquota de R$ 7890,00 é de : ' .calcularImposto(7890);

		 ?>	

	</body>	
</html>