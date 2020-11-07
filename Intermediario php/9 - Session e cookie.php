<?php

	session_start(); //inicia sessão com cliente e servidor. (E não pode ter impresso nada antes de iniciar sessao, entao deixar 
	//sempre na primeira linha)

	//campo que quero guardar a informação, campo teste e o valor Filipe Fonseca
	$_SESSION["teste"] = "Filipe Fonseca";     //Depois que fechar o navegador, o sessão será finalizada.

	//Agora pegar a informação que foi salva
	echo "Meu nome é: ".$_SESSION["teste"];
	echo "<br/>";

	setcookie("nome","Filipe Fonseca",time() + 60); /*(chave,nome,tempo de duração em segundos) -- Essa data ali foi de agora + 1 hora, o cookie irá durar uma hora.
	*/

	//Primeiro verificar se o cookie existe     -- isset verifica a existencia de uma variavel
	if (isset($_COOKIE["teste3"])){
		echo "Meu cookie é: ".$_COOKIE["nome"];
	}	
	

?>