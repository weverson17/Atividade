<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar</title>
</head>
<body>
	<h1>Cadastrar Usuário</h1>
	<form method="POST" action="Cadastrar.php">
		<label>Nome: </label>
		<input type="text" name="nome" placeholder="Digite o seu nome"><br/><br/>

		<label>Idade: </label>
		<input type="number" name="idade" placeholder="Digite a sua Idade"><br/><br/>

		<label>E-mail: </label>
		<input type="email" name="email" placeholder="Digite o seu E-mail"><br/><br/>


		<label>Senha: </label>
		<input type="password" name="senha" placeholder="Digite sua Senha"><br/><br/>

		<label for="imagem">Foto: </label>
		<input type="file" name="foto">
		<br/><br/>

		<input type="submit"  value="Cadastrar" name="">
	</form><br/>
	<form action="listar.php">
		<input type="submit" name="" value="Listar">		
	</form>
</body>
</html>