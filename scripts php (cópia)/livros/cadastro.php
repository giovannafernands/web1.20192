<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>


<?php 
require 'begin.php';
require 'config.php';

$data = file(PER_FILE);

$data_livs = file(LIVS_FILE);
$data_cad = file(CAD_FILE);

$livro = [];


$livros = array_map('explodir', $data_livs);

?>
<body>

<div class="banner">   
    <a href="index.php" class="a2"> MENU</a>
    <a href="cadastro.php" class="a2"> CADASTRO</a>
    <a href="login.php" class="a2"> LOGIN</a>
</div>

	 <fieldset>
<form action="auth.php" method="POST">
  <label>Nome:</label><input type="text" name="nome" id="nome" placeholder="Nome...">
<label>Usuário:</label><input type="text" name="usuario" id="usuario" placeholder="Usuário..."><br>
<label>CPF:</label><input type="text" name="cpf" id="cpf" placeholder=" CPF...">
<label>Senha:</label><input type="password" name="senha" id="senha" placeholder="Senha..."><br>
<label>Senha2</label><input type="password" name="senha2" id="senha" placeholder="Senha2">
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>
</fieldset>
</body>
</html>