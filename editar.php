<?php
include_once("conexao.php");

$id = filter_input (INPUT_POST , 'id');
$nome = filter_input (INPUT_POST , 'nome');
$idade = filter_input (INPUT_POST , 'idade');
$email = filter_input (INPUT_POST , 'email' );
$senha = filter_input (INPUT_POST , 'senha');
$foto = filter_input (INPUT_POST , 'foto' );

//Editando
$Update_usuario = $pdo -> prepare ("UPDATE usuarios set nome='$nome', idade='$idade', email='$email', senha='$senha', foto='$foto' WHERE id='$id'"); 
$Update_usuario -> execute();