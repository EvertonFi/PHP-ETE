<?php 
    require "Aula05.php";

    abstract class Delete{
        static function Aluno($id, $statu){
            $conexao = BancoDados::conectar();
            $delete = $conexao->prepare('
                UPDATE aluno SET
                statu = :statu 
                WHERE
                id_aluno = :id
            ');
            $delete->bindValue(':id', $id);
            $delete->bindValue(':statu', $statu);
            $delete->execute();
        }
    }

    echo "<hr>";
    $alunos = Lista::Aluno();

foreach ($alunos as $aluno){
    echo $aluno->id_aluno. " ";
    echo $aluno->nome. " ";
    echo $aluno->id_turma. " ";
    echo $aluno->altura . "<br>";
}

echo "<hr>";
$del = Delete::Aluno(4,0);
echo "<hr>";
$alunos = Lista::Aluno();

foreach ($alunos as $aluno){
    echo $aluno->id_aluno. " ";
    echo $aluno->nome. " ";
    echo $aluno->id_turma. " ";
    echo $aluno->altura . "<br>";
}