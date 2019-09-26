<?php 

require 'begin.php';
require 'config.php';

$data =  file(PER_FILE);


?>

<?php if(!empty($_GET['msg'])):  ?>
	<div>
		<h4><?= $_GET['msg'] ?></h4>
	</div>
<?php endif ?>

<table class="per-table">
	<thead>
		<tr>
			<th>Personagem</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $id => $dt): ?>
			<tr>
				<td><?= $dt ?></td>
				<td><a href="delpersonagem.php?id=<?= $id ?>">&times;</a></td>
			</tr>
		<?php endforeach ?>

	</tbody>
</table>

<form class="form-per" action="addpersonagem.php" method="POST">
	<fieldset class="main-form">
		<legend>ADICIONAR PERSONAGENS</legend>
		<input class="input-per" type="text" name="nome" placeholder="Personagem...">
		<input class="but-per" type="submit" value="Adicionar">
	</fieldset>

</form>
	
</body>
</html>