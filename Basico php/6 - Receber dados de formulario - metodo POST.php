<form method="POST">
	E-mail: <br/>
	<input type="text" name="email" /><br/><br/>
	Senha: <br/>
	<input type="password" name="senha"><br/><br/>
	<input type="submit" name="botaoEnviar" value="Enviar Dados" />
</form>

<?php
	//Verifica se o botaoEnviar foi setado (apertado) e os campos não estao vazios
	if (isset($_POST['botaoEnviar'])){

		if (!empty($_POST['senha']) && !empty($_POST['email'])){
		$email = $_POST['email'];		
		$senha = $_POST['senha'];
		echo "E-mail: ".$email;
		echo "<br/>";
		echo "Senha: ".$senha;
		}		
	}
?>
