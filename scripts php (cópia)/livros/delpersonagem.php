<?php 

require 'config.php';

$id = $_GET['id'];

$data = file(PER_FILE);

unset($data[$id]);


file_put_contents(PER_FILE,  $data);

redirect("personagens.php?msg=PERSONAGEM REMOVIDO");



?>