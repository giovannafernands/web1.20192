<?php 

$dado= $_GET['nome'].';' .$_GET['nota1'] . ';' . $_GET['nota2'] . "\n";

$handle = fopen('estudantes.csv', 'a');
    fwrite($handle, $dado);


 ?>
 <a href="giovanna.php">Voltar</a>