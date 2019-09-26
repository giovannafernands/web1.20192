
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
     <?php
        $estudantes = file('estudantes.csv');
        for ($i = 0; $i < sizeof($estudantes); $i++) {
            $estudantes[$i] = explode(';', $estudantes[$i]);
        }
    ?>
    <table>
        <tr>

            <th>Matricula</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>email</th>
        </tr>
        <?php foreach ($estudantes as $i => $dados_estudante): ?>
            <tr>
                <?php foreach ($dados_estudante as $estudante): ?>
                    <td><?= $estudante ?></td>
                <?php endforeach ?>
                <td><a href="remover.php?id=<?= $i?>">X<?= $i ?></a></td>
            </tr>
        <?php endforeach ?>
    </table>

     <form action="include.php" method="POST">
    
        <legend>Dados alunos</legend>
        <input type="text" name="Matrícula" placeholder="Matrícula">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="sobrenome" placeholder="sobrenome"> 
        <input type="phone" name="fone" placeholder="fone">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="pw" placeholder="senha">
        <input type="submit" value="Ok">
    
</form>
</body>
</html>