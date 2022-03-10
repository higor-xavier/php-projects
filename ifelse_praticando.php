<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>
		
		<?php

			//
			$usuario_possui_cartao = true;
			$valor_compra = 750;
			$valor_frete = 50;
			$recebeu_desconto_frete = true;

			if ($usuario_possui_cartao && $valor_compra >= 400) {
				$valor_frete = 0;
			}
			else if($usuario_possui_cartao && $valor_compra >= 300){
				$valor_frete = 10;
			}
			else if($usuario_possui_cartao && $valor_compra >= 100){
				$valor_frete = 25;
			}
			else{
				$recebeu_desconto_frete = false;
			}

		?>

		<h1>Detalhes do pedido</h1>

		<p>Possui cartão da loja?

			<?php 

				if ($usuario_possui_cartao) {
					echo 'SIM';
				}
				else{
					echo 'NÃO';
				}

			 ?>
			
		</p>

		<p>Recebeu desconto de frete?

			<?php 

				if ($recebeu_desconto_frete) {
					echo 'SIM';
				}
				else{
					echo 'NÃO';
				}

			 ?>
			
		</p>

		<p>Valor do frete:

			<?= $valor_frete ?>
			
		</p>

	</body>	
</html>