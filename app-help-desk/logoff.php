<?php
	
	session_start();

	/*echo "<pre>";
	print_r($_SESSION); 
	echo "</pre>";

	//remover indices do array de sessão
	//unset() //remove os índeces de qualquer array e também funciona com sessão

	unset($_SESSION['x']); //remove o indice apenas se existir

	echo "<pre>";
	print_r($_SESSION); 
	echo "</pre>";
	
	//destruir variável de sessão
	//session_destroy();

	session_destroy();//destrói a sessão
	//forçar um redirecionamento

	echo "<pre>";
	print_r($_SESSION); 
	echo "</pre>";*/

	session_destroy();
	header('Location: index.php')
 ?>