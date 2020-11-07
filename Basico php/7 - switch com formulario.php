<form method="POST">
	Número: <br/>
	<input type="text" name="numero"> <br/><br/>
	<input type="submit" name="botaoEnviar" value="Enviar Número">
</form>
<?php
	if (isset($_POST['botaoEnviar'])){
		if (!empty($_POST['numero'])){
			$numero = $_POST['numero'];

			switch ($numero) {
			case 0:
				echo "O numero digitado foi o número 0";
				break;
			case 1:
				echo "O numero digitado foi o número 1";
				break;
			default:
				echo "O numero digitado não foi o número 0 nem 1, foi o número ".$numero;
				break;
			}
		}else{
			echo "Não foi digitado nenhum número!";
		}
		
	}
?>
