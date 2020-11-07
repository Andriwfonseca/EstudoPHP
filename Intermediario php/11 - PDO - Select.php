<?php
	
	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn,$dbuser,$dbpass);
		
		$sql = "SELECT * FROM usuarios";
		$sql = 	$pdo->query($sql);

		if ($sql->rowCount() > 0){ //verifica se tem resultados no sql

			foreach ($sql->fetchAll() as $usuario) { //pega todos os resultados dessa consulta e transforma em um array
				echo"Nome: ".$usuario["nome"]."<br/>";
			}

		}else{
			echo "Não há resultados!";
		}



	}catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	}
?>