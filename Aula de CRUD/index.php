<?php  
    require 'Aula06.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Aula08.php" method="POST">
        <input type="text" name="nome" id="nome">
        <input type="text" name="altura" id="altura">
        <input type="submit" name="envio" id="envio" value="Ok">
    </form>
    <hr>
    <?php 

        $alunos = Lista::Aluno();

        foreach ($alunos as $aluno){
            echo $aluno->nome. " ";
            echo $aluno->id_turma. " ";
            echo $aluno->altura;
            
            ?>
            <a href="Aula08.php?delete=1&id=<?php echo $aluno->id_aluno ?>">Deletar</a>
            <a href="alteracao.php?id=<?php echo $aluno->id_aluno ?>">Alterar</a>
            <br>
            <?php 
        }
    ?>
</body>
</html>