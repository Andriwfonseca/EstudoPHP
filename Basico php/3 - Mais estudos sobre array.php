<?php

	$variaveis = array(
		"nome" => "Filipe",
		"sobrenome" => "Fonseca",
		"idade" => 28,
		"sexo" => "Masculino",
		"exemplo1",
		"exemplo2"
	);

	//imprimir valor do array
	echo "O nome guardado no array é: ".$variaveis["nome"];
	echo "<br/>";
	echo "O sexo guardado no array é: ".$variaveis["sexo"];

	//echo "O terceiro valor do array é: ".$variaveis[2];     ***** Index não funciona quando ja tem um index informado *****

	echo "<br/>Idade: ".$variaveis["idade"]."<br/>";

	//editar valor do array
	$variaveis["idade"] = 29;
	
	echo "Idade nova: ".$variaveis["idade"];
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";

	//imprimir o array inteiro
	print_r($variaveis);
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";

	//Criar array de arrays
	$lapis = array(
		"marca" => "Faber Castel",
		"quantidade" => 5
	);
	$caneta = array(
		"marca" => "Bic",
		"quantidade" => 10
	);

	$produtos = array($lapis,$caneta);

	print_r($produtos);
	echo "<br/>";
	echo "<br/>";

	$novoArray = array("lala","lolo");

	//Adicionar mais um array no array produtos
	$produtos[] = $novoArray;
	$produtos[] = array("Mais um array","Teste");
	$produtos[] = "Posso adicionar uma String tbm";

	//editar valor do array
	$produtos[1] = "Troquei o index 1 do array por essa String";

	print_r($produtos);
?>
