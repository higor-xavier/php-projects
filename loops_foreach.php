<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			$itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];

			echo '<pre>';
				print_r($itens);
			echo '</pre>';

			foreach ($itens as $item) {
				echo "$item";

				if($item == 'mesa'){
					echo " Compre uma $item e ganhe 25% de desconto na compra de 4 cadeiras";
				}

				echo '<br>';
			}

		 ?>	

	</body>	
</html>