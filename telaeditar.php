<?php
include ("conexao.php");
$id = filter_input (INPUT_GET, 'id');
$listarusuario = $pdo -> prepare ("SELECT * FROM usuarios WHERE id ='$id'");
$listarusuario->execute();

$linha=$listarusuario->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>
<body>
	<h1>Editar Usuário</h1>
	<form method="POST" action="editar.php">

		<input type="hidden" name="id" value="<?php echo $linha['id']; ?>"><br/><br/>

		<label>Nome: </label>
		<input type="text" name="nome" placeholder="Digite o seu nome" value="<?php echo $linha['nome']; ?>"><br/><br/>

		<label>Idade: </label>
		<input type="number" name="idade" placeholder="Digite a sua Idade" value="<?php echo $linha['idade']; ?>"><br/><br/>

		<label>E-mail: </label>
		<input type="email" name="email" placeholder="Digite o seu E-mail" value="<?php echo $linha['email']; ?>"><br/><br/>

		<label>Senha: </label>
		<input type="password" name="senha" placeholder="Digite sua Senha"><br/><br/>

		<label for="imagem">Foto: </label>
		<input type="file" name="foto" value="<img src="<?php echo $linha['foto']; ?>" height="42" width="42">"
		
		<br/><br/>

		<input type="submit"  value="Editar" name="">
	</form><br/>
	
</body>
</html>