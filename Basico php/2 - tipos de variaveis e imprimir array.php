<?php

	$nome = "Filipe"; //String
	$nota = 7.5; //float
	$idade = 28; //int, integer
	$ligado = true; //boolean
	$grupos = array(1,2,"tres",4,5); //array

	//imprimir valor do array
	echo $grupos[2];

	echo "<br/><br/>";
	//imprimir todos os valores do array
	foreach ($grupos as $var) {
		echo $var."<br/>";
	}
	
?>
