<?php
	
	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn,$dbuser,$dbpass);
		
		$nome = "Nome de teste2";
		$email = "teste2@gmail.com";
		$senha = md5(123);

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha' ";
		$sql = 	$pdo->query($sql);

		echo "Usuário inserido: ".$pdo->lastInsertId();

	}catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	}
?>