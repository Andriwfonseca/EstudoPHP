<?php
	
	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn,$dbuser,$dbpass);
		
		$nome = "Novo nome";
		$email = "novoemail@gmail.com";
		$senha = md5(1234);

		$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '6'";
		$pdo->query($sql); //nao precisa guardar em variavel pq ele nao vai retornar nada , soh executar

		echo "Update realizado com sucesso";

	}catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	}
?>