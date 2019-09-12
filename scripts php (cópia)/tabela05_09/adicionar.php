<?php 

$dado= $_POST['nome'].',' .$_POST['nota1'] . ',' . $_POST['nota2'] . "\n";

$handle = fopen('estudantes.csv', 'a');
    fwrite($handle, $dado);


 ?>
 <a href="giovanna.php">Voltar</a>