<?php

	$array = array(
		"nome" => "Filipe",
		"idade" => 30,
		"cidade" => "Joinville",
		"pais" => "Brasil"
	);


	$arrayChaves = array_keys($array);
	$arrayValores = array_values($array);

	print_r($arrayChaves);
	echo "<br/>";
	print_r($arrayValores);
	echo "<br/>";
	echo "<br/>";

	//Remover o ultimo elemento do array
	array_pop($array);

	//Remover o primeiro elemento do array
	array_shift($array);

	//Ordenar em ordem crescente
	asort($array);

	//Ordenar em ordem decrescente
	arsort($array);

	//ver a quantidade de itens no array
	count($array);

	//Verificar se tem valor no array
	if (in_array("Filipe", $array)){
		echo "Tem Filipe no array";
	}

	


 ?>