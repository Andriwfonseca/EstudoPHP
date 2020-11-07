
<form method="POST">
	Nome:<br>
	<input type="text" name="nome"><br>
	E-mail:<br>
	<input type="email" name="email"><br>
	Senha:<br>
	<input type="password" name="senha"><br><br>
	<input type="submit" name="Cadastrar" value="Cadastrar Usuário">
	<br><br>
</form>
<a href="index.php"><input type="submit" name="voltar" value="Voltar"></a>

<?php
require 'config.php';

if (isset($_POST["nome"])){
	if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){

		$nome = addslashes($_POST["nome"]);
		$email = addslashes($_POST["email"]);
		$senha = addslashes($_POST["senha"]);

		try{

			$sql = "INSERT INTO usuarios set nome = '".$nome."', email = '".$email."', senha = '".$senha."'";
			$sql = $pdo->query($sql);
			echo "Usuário inserido: ".$pdo->lastInsertId();

		}catch(PDOException $e){
			echo "Falhou: ".$e->getMessage();
		}
	}else{
		echo "Você precisa preencher todos os campos!";
	}
}

?>