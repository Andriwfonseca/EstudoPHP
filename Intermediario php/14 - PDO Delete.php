<?php
	
	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn,$dbuser,$dbpass);
		
		$sql = "DELETE FROM usuarios WHERE email = 'teste@gmail.com'";
		$pdo->query($sql); //nao precisa guardar em variavel pq ele nao vai retornar nada , soh executar

		echo "Deletado com sucesso";

	}catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	}
?>