<?php
//necessita do index.php para abri-lo

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);// vai pegar códigos especiais e transformar em texto, exemplo <script></script>, <br>.. tudo isso será texto e não será identificado como tag ou script
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //só vai pegar o valor se for um email
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDADE_INT); //só vai pegar o valor se tiver apenas numeros inteiros
//$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); //vai pegar somente os numeros inteiros do campo idade

if ($nome && $email){

    echo 'NOME: '.$nome."<br/>";
    echo 'EMAIL: '.$email."<br/>";
    echo 'IDADE: '.$idade."<br/>"; 
}else{
    header("Location: index.php");
    exit;
}