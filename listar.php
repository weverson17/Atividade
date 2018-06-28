<?php
include ("conexao.php");

$listarusuario = $pdo -> prepare ("SELECT * FROM usuarios");
$listarusuario->execute();



While ($linha=$listarusuario->fetch(PDO::FETCH_ASSOC)){
	$foto = $linha["foto"];
	echo "Nome: ".$linha["nome"]."<br/>";
	echo "Idade: ".$linha["idade"]."<br/>";
	echo "E-mail: ".$linha["email"]."<br/>";
	echo "Foto: " . "<img src=$foto>". "<br/>";
	echo "<a href='telaeditar.php?id=" . $linha["id"] ."'> Editar </a><br/>";
	echo "<a href='deletar.php?id=" . $linha["id"] ."'> Deletar </a><br/><hr/>";

}

?>
