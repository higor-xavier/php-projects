<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			$registros = [
				['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'],
				['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'],
				['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
				['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4']
			];

			echo "<pre>";
				print_r($registros);
			echo "</pre>";
			
			echo "<br><br><br>";

			$idx = 0;
			//count -> conta quantos elementos o array possui
			/*while($idx < count($registros)){

				echo '<h3>' . $registros[$idx]['titulo'] .'</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] .'</p>';
				echo "<hr>";

				$idx++;
			}*/

			for ($idx=0; $idx < count($registros); $idx++) { 
				echo '<h3>' . $registros[$idx]['titulo'] .'</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] .'</p>';
				echo "<hr>";
			}

		 ?>	

	</body>	
</html>