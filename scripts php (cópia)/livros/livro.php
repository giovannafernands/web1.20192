<?php 
require 'begin.php';
require 'config.php';

$data = file(LIV_FILE);

$data_livs = file(LIVS_FILE);

$livro = [];


$livros = array_map('explodir', $data_livs);

?>

<?php if(!empty($_GET['msg'])):  ?>
      <div>
            <h4><?= $_GET['msg'] ?></h4>
      </div>
<?php endif ?>


<table class="livs-table">     
      <thead>
            <tr>
                  <th>Nome</th>
                  <th>Autor</th>
                  <th>Gênero</th>
                  <th>Information</th>
                  <th>Delete</th>
            </tr>
      </thead>
      <tbody>
            <?php foreach ($livros as $id => $dd):?>
                  <tr>
                        <td><?= $dd['Nome'] ?></td>
                        <td><?= $dd['Autor'] ?></td>
                        <td><a href="Information.php?id=<?= $id ?>"> Mais</a></td>
                        <td><a href="deletelivro.php?id=<?= $id ?>">&times;</a></td>

                  </tr>

            <?php endforeach ?>
      </tbody>
</table>



<form action="addlivro.php" method="POST" class="add-livro">
      <fieldset class="main-form-crs">
            <legend>ADICIONAR LIVROS</legend>
      <input class="inp" type="text" name="nome" placeholder="Nome do livro...">
      <input class="inp" type="text" name="autor" placeholder="Autor...">
      <input class="inp" type="text" name="genero" placeholder="Gênero..." >
      <select name="select-personagem" class="slt-per">
           <?php foreach($data as $dt): ?>
                  <option value="<?= $dt ?>"><?= $dt ?></option>       
            <?php endforeach ?>
      </select>
      <input class="but-per" type="submit" value="Adicionar">
      </fieldset>

</form>

      
</body>
</html>