        
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
    <?php
        if(isset($_GET,$_GET['id'])){
            $aluno = Lista::AlunoUnico($_GET['id']);
            if($aluno){            
    ?>
        <form action="Aula09.php">
            <input type="hidden" name="id" value="<?php echo $aluno->id_aluno ?>">
            <input type="text" name="nome" value="<?php echo $aluno->nome ?>">
            <input type="text" name="altura" value="<?php echo $aluno->altura ?>">
            <input type="text" name="turma" value="<?php echo $aluno->id_turma ?>">
            <input type="submit" value="Alterar">
        </form>
    <?php
            }else{
                echo "Aluno não cadastrado";
            }
        }else{
            echo "Aluno sem ID";
        }
    ?>
    </body>
    </html>