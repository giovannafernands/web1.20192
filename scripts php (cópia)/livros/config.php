<?php 

 session_start();
define('PER_FILE','personagens.csv');
define('LIVS_FILE', 'livros.csv');
define('CAD_FILE', 'cadastros.csv');



function redirect($url) {
    header('Location: ' . $url);
    exit();
}

function explodir($vl){

	$livrodata = explode(',', $vl);

	return [
		'Nome' => $livrodata[0],
		'Autor' => $livrodata[1],
		'Genero' => $livrodata[2],
		'personagens' => $livrodata[3]
	];

}


