<?php 
	require "8 - recebedor.php"; //se der algum erro na hora de tentar pegar essa pagina, ele nao mostra mais nada pq o projeto requer essa pagina.
	//include "8 - recebedor.php"; //ja o include, se der algum erro, ele continua mostrando o resto da pagina que nao usa esse include
 ?>
<form method="POST">
	E-mail:<br/>
	<input type="text" name="email" /> <br/><br/>
	<input type="submit" value="Enviar" name="botaoEnviar" /> <br/><br/>
</form>