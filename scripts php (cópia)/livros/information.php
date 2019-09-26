<?php 

require 'begin.php';
require 'config.php';

$id = $_GET['id'];

if (!isset($id)) {
	redirect("livro.php");
}

$data = file(LIVS_FILE);


$livros = array_map('explodir', $data);

?>

 <table class="info-table">
 	<thead>
 		<tr>
 			<th>Nome</th>
 			<th>Autor</th>
 			<th>Gênero</th>
 			<th>Personagens</th>
 			<th>Delete</th>
 		</tr>
 	</thead>
	<tbody>
		<tr>
			<td><?= $livros[$id]['Nome'] ?></td>
			<td><?= $livros[$id]['Autor'] ?></td>
			<td><?= $livros[$id]['Genero'] ?></td>
			<td><?= $livros[$id]["Personagens"] ?></td>
			<td><a href="deletelivro.php?id=<?= $id ?>">&times;</a></td>
		</tr>
	</tbody>



 </table>


 	
 </body>
 </html>

