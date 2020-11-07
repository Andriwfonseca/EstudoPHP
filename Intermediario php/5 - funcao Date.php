<?php

	//arrumar time zone
	date_default_timezone_set('America/Sao_Paulo');

	// contra barra avisa o php que isso é um texto de verdade exemplo: \s
	$hoje = date("d/m/Y \à\s H:i:s");
	$mes = date("M");
	echo $hoje;
	echo "<br/>";
	echo "Mês: ".$mes; 
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";

 ?>