<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			/*$array = ['Notebook', 'Teclado'];
			$retorno = is_array($array); //verifica se a variável passada é um array

			if ($retorno) {
				echo 'Sim, é um array';
			}
			else{
				echo 'Não, não é um array';
			}*/

			/*$array = [1 => 'a', 7 => 'b',  18 => 'c'];

			echo '<pre>';
				print_r($array);
			echo '</pre>';

			$chaves_array = array_keys($array);

			echo '<pre>';
				print_r($chaves_array);
			echo '</pre>';*/

			/*$array = ['Notebook', 'Teclado', 'Mouse', 'Cabo HDMI', 'Fonte ATX', 'Gabinete'];
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			sort($array); //retorna true ou false para sabermos se a operação foi concluída com sucesso
			echo '<pre>';
				print_r($array);
			echo '</pre>';*/

			/*$array = ['Notebook', 'Teclado', 'Mouse', 'Cabo HDMI', 'Fonte ATX', 'Gabinete'];
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			asort($array); //true ou false, mas mantém os indíces anteriores
			echo '<pre>';
				print_r($array);
			echo '</pre>';*/

			/*$array = ['Notebook', 'Teclado', 'Mouse', 'Cabo HDMI', 'Fonte ATX', 'Gabinete'];
			echo '<pre>';
				print_r($array);
				echo count($array);
			echo '</pre>';*/

			/*$array1 = ['osx', 'windows'];
			$array2 = ['linux'];
			$array3 = ['solaris'];

			$novo_array = array_merge($array1, $array2, $array3); //junta todos os arrays passados por parâmetro
			echo '<pre>';
				print_r($novo_array);
			echo '</pre>';*/

			/*$string = '12/12/2012';
			$array_retorno = explode('/', $string); //divide os elementos da string em um array

			echo $string;

			echo '<pre>';
				print_r($array_retorno);
			echo '</pre>';*/

			$array = ['a','b','x','y'];
			$string_retorno = implode(',', $array); //junta os elementos de um array em uma string
			echo $string_retorno;


		 ?>	

	</body>	
</html>