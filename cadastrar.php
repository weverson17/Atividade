<?php
include_once("conexao.php");


$nome = filter_input (INPUT_POST , 'nome');
$idade = filter_input (INPUT_POST , 'idade');
$email = filter_input (INPUT_POST , 'email');
$senha = filter_input (INPUT_POST , 'senha');
$foto = filter_input (INPUT_POST , 'foto' );

//Cadastrando
$cadastro_usuario = $pdo -> prepare ("INSERT INTO usuarios (nome, idade, email, senha, foto) VALUES ('$nome', '$idade', '$email', '$senha','$foto')");
$cadastro_usuario -> execute();

?>