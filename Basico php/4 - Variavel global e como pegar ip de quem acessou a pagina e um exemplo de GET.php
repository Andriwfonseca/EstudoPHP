<?php

	//Variveis globais vem com $_VARIAVEL
	print_r($_SERVER);
	echo("<br/>");

	//Imprimir ip da pessoa que acessou a pagina
	print_r($_SERVER["REMOTE_ADDR"]);


	//Pega o que esta no endereço, exemplo: pagina.php?nome=Filipe
	$nome = $_GET["nome"];

	echo "Meu nome é: ".$nome;

	//O $_POST não mostra as informações no endereço igual o $_GET
?>
