<?php

	$nome = "Andriw Filipe Pereira Fonseca";
	$x = explode(" ", $nome);

	echo $x[0];
	echo "<br/>";

	$array = array("Filipe","Fonseca");
	$nomeCompleto = implode(" ", $array);

	echo $nomeCompleto;
	echo "<br/>";
	echo "<br/>";

	//formatar numero
	$numero = 80000.2565523;
	$numeroFormatado = number_format($numero,2); //numero a ser formatado e quantas casas depois da virgula
	echo $numeroFormatado;

	echo "<br/>";
	echo "<br/>";
	//formatar numero no formato do Brasil 5.000,00-- (Americando é 5,000.00)
	$numero = 80000.2565523;
	$numeroFormatado = number_format($numero,2,",","."); //numero a ser formatado e quantas casas depois da virgula
	echo $numeroFormatado;

	echo "<br/>";
	echo "<br/>";

	//Tirar o ponto das casa de mil
	$numero = 80000.2565523;
	$numeroFormatado = number_format($numero,2,",",""); //numero a ser formatado e quantas casas depois da virgula
	echo $numeroFormatado;

	echo "<br/>";
	echo "<br/>";

	//Trocar texto de uma tring
	$texto = "O rato roeu a roupa do rei de roma";
	$textoNovo = str_replace("roeu", "comeu", $texto);
	echo $textoNovo;

	echo "<br/>";
	echo "<br/>";

	echo strtolower("Texto TUDO em LETRA minUSCuLA");
	echo "<br/>";
	echo strtoupper("Texto tudo em letra maiuscula");

	echo "<br/>";
	echo "<br/>";
	echo "<br/>";

	//Pegar parte de uma string
	$string = substr("Fonseca", 0,3); //0 é a posição que vai pegar os 3 caracteres
	echo $string;
	echo "<br/>";
	echo "<br/>";
	//Colocar a primeira letra maiuscula 
	$nomeTeste = "andriw filipe pereira fonseca";
	echo ucfirst($nomeTeste);
	echo "<br/>";
	echo "<br/>";

	//Colocar a primeira letra de cada palavra em maiusculo
	echo ucwords($nomeTeste);
 ?>