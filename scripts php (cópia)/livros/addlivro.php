<?php 

require 'config.php';


$nome = $_POST['nome'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$personagem = $_POST['select-personagem'];
$personagem_dt = trim($personagem);

if ($nome ==  false || $autor == false || $genero == false || $personagem == false) {
	redirect("livro.php?msg= preencha todos os campos");
}

$dados = join("," ,[$nome,$autor, $genero, $personagem_dt]). "\n";

$handle = fopen(LIVS_FILE, 'a');
fwrite($handle, $dados);
fclose($handle);

redirect("livro.php?msg=Livro Adicionado");

 ?>