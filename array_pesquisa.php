<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			//in_array() -> true ou false para a existência do que está sendo procurado
			//array_search() -> retorna o índice do valor pesquisado, se não tiver retorna null

			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

			/*echo "<pre>";
			print_r($lista_frutas);
			echo "</pre>";*/

			//$existe = in_array('Maçã', $lista_frutas);
			//true -> texto = 1
			//false -> texto = vazio

			$existe = array_search('Uva', $lista_frutas);
			//Retorna null se não houver o item
			//null -> texto = vazio

			if ($existe != null) {
				echo "Sim, o valor existe no array";
			}
			else{
				echo "Não, o valor não existe no array";
			}

			$lista_coisas = [
				'frutas' => $lista_frutas,
				'pessoas' => ['João', 'Maria']
			];

			echo "<pre>";
			print_r($lista_coisas);
			echo "</pre>";

			echo in_array('Uva', $lista_coisas['frutas']);

		 ?>	

	</body>	
</html>