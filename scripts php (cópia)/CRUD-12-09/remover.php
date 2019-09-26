<?php

    $linha = $_GET['id'];

    $a = file('estudantes.csv');

    unset($a[$linha]);

    $s = "";
    foreach($a as $el) {
        $s = $s . $el;
    }

    $handle = fopen("estudantes.csv", "w"); 
    fwrite($handle, $s);
?>

<a href="giovanna.php">Voltar</a>