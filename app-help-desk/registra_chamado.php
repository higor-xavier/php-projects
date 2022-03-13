<?php 
	
	session_start();

	//estamos trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
	//abrindo arquivo
	$arquivo = fopen('../../../app_help_desk/arquivo.txt', 'a');
	//escrevendo texto
	fwrite($arquivo, $texto);
	//fechando arquivo
	fclose($arquivo);

	//redirecionando para página de abrir chamado
	header('Location: abrir_chamado.php');

 ?>