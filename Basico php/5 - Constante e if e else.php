<?php

	//criar uma constante     -- nome, valor --
	define("URLGOOGLE", "www.google.com.br");
	echo "Google: ".URLGOOGLE;
	echo "<br/>";

	$nome = "Filipe";
	$idade = 28;

	if ($nome == "Filipe"){
		echo "Meu nome esta correto";
	}else{
		echo "Meu nome esta errado";
	}

	echo "<br/>";

	if ($idade >=18){
		echo "É maior de idade";
	}else{
		echo "É menor de idade";
	}

	echo "<br/>";

	if ($nome == "Filipe" && $idade >= 18){
		echo "Meu nome é ".$nome." e sou maior de idade, tenho ".$idade." anos.";
	}
?>
