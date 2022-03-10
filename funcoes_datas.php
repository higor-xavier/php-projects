<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			//recuperação da data atual
			/*echo date('d/m/Y H:i') .'<br>';

			echo date_default_timezone_get(); //ver qual o fuso horário está configurado no PHP

			echo '<br>';

			date_default_timezone_set('America/Sao_Paulo'); //setando durante a execução do PHP o fuso do Brasil

			echo date('d/m/Y H:i') .'<br>';

			echo date_default_timezone_get();*/

			$data_inicial = '2018-04-24';
			$data_final = '2018-05-15';

			//timestamp
			//01/01/1970 tipos de retornos => JS -> milissegundos / PHP -> segundos

			$time_inicial = strtotime($data_inicial); 
			$time_final = strtotime($data_final); 
			echo $data_inicial . ' - ' . $time_inicial;
			echo '<br>';
			echo $data_final . ' - ' . $time_final;

			$diferenca_time = $time_final - $time_inicial;

			echo "<br>";
			echo "A diferença de segundos entre a data inicial e a final é $diferenca_time";

			$segundos_existem_dia = 24 * 60 * 60;
			echo "<br>";

			echo "Um dia possui $segundos_existem_dia";

			$diferenca_dias_entre_datas = $diferenca_time / $segundos_existem_dia;

			echo "<br>";

			echo "A diferença em dias é: $diferenca_dias_entre_datas";

		 ?>	

	</body>	
</html>