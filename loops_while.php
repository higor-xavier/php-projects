<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			$num = 1;
			//operadores de comparação/lógicos
			echo "Início do loop <br>";
			while ($num < 10) {

				$num++;//critério de parada
				if ($num == 2 || $num == 6) {
					continue;
				}
				echo "$num <br>";
				
				// break;

			} 
			echo "Fim do loop";
		 ?>	

	</body>	
</html>