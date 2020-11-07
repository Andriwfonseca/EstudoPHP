<?php
	$dsn = "mysql:dbname=projeto_ordernar;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn,$dbuser,$dbpass);

	}catch(PDOException $e){
		echo "Falhou a conexão: ".$e->getMessage();
	}
?>