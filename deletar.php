<?php
include_once("conexao.php");

$id = filter_input (INPUT_GET, 'id');

//Apagando
$Delete_usuario = $pdo -> prepare ("DELETE FROM usuarios WHERE id='$id' ");
$Delete_usuario ->execute(); 
