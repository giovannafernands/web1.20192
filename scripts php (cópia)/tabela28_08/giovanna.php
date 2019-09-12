<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $estudantes = file('estudantes.csv');
        for ($i = 0; $i < sizeof($estudantes); $i++) {
            $estudantes[$i] = explode(',', $estudantes[$i]);
        }
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Nota1</th>
            <th>Nota2</th>
        </tr>
        <?php foreach ($estudantes as $dados_estudante): ?>
            <tr>
                <?php foreach ($dados_estudante as $estudante): ?>
                    <td><?= $estudante ?></td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </table>

     <form action="concluir.php" method="POST">
    
        <legend>Lançar notas dos alunos</legend>
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="nota1" placeholder="nota1">
        <input type="text" name="nota2" placeholder="nota2">
        <input type="submit" value="Ok">
    
</form>
</body>
</html>