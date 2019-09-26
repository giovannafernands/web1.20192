<?php 

$dado=
 $_POST['Matrícula'].';' .$_POST['nome'] . ';' . $_POST['sobrenome'] . ';' .$_POST['fone'] .';' .$_POST['email'] . "\n";

$handle = fopen('estudantes.csv', 'a');
    fwrite($handle, $dado);


 ?>
 <a href="giovanna.php">Voltar</a>