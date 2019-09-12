<?php

    $linha = $_POST['id'];

    $k = file('estudantes.csv');

    unset($k[$linha]);

    $j = "";
    foreach($k as $le) {
        $j = $j . $le;
    }

    $handle = fopen("estudantes.csv", "w"); 
    fwrite($handle, $j);
?>

<a href="giovanna.php">Voltar</a>