<?php

	$senha = md5("lipelipe"); //criptografica a senha de forma irreversivel
	$password = base64_encode("teste"); //criptografia reversivel

	echo "Md5: ".$senha;
	echo "<br/>";

	echo "base64_encode: ".$password;
	$recuperarCripto = base64_decode($password);
	echo "<br/>";
	echo "base64_decode: ".$recuperarCripto;

?>