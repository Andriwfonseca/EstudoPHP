<?php
	if (isset($_POST['botaoEnviar']) && !empty($_POST['email'])){
		$email = $_POST['email'];
		echo "O email é ".$email;
	}
?>
