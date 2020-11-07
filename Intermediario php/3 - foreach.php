<?php
	$nomes = array("Andriw","Filipe","José");
	
	//Para cada valor do array $nomes, setar na variavel $nome a cada laço do foreach
	foreach ($nomes as $nome) {
		echo "Nome: ".$nome."<br/>";
	}
	"<br/>";
	"<br/>";

	$alunos = array(
		array("nome" => "Filipe", "idade" => 28),
		array("nome" => "Fonseca", "idade" => 29),
		array("nome" => "Teste", "idade" => 10),
		array("nome" => "Eloisa", "idade" => 24)
	);

	$estudante = array(
		"nome" => "Fonseca",
		"idade" => 50
	);

	foreach ($alunos as $aluno) {
		echo "Nome: ".$aluno["nome"].", idade : ".$aluno["idade"]." anos<br/>";
	}

	//mostrar soh os valores
	foreach ($estudante as $valor) {
		echo $valor."<br/>";
	}
	//mostrar chave e valores
	foreach ($estudante as $chave => $valor) {
		echo "Chave: ".$chave."<br/>";
		echo "Valor: ".$valor."<br/>";
	}
 ?>