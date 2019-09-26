<?php 

require 'config.php';

$name = $_POST['nome'] ?? false;


if($name ==  false){
	redirect("index.php");
}

$data = $name . "\n"; 

$handle = fopen(PER_FILE, 'a');
fwrite($handle, $data);
fclose($handle);

redirect("personagens.php?msg=Adicionado");

 ?>