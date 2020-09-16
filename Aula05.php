<?php 

    require 'Aula04.php';

    abstract class Alteracao{
        static function Aluno($id, $nome, $altura, $id_turma){
            $conexao = BancoDados::conectar();
            $alterar = $conexao->prepare('
            UPDATE aluno SET
            nome = :nome,
            altura = :altura,
            id_turma = :id_turma
            WHERE
            id_aluno = :id
            ');
            $alterar->bindValue(':id', $id);
            $alterar->bindValue(':nome', $nome);
            $alterar->bindValue(':altura', $altura);
            $alterar->bindValue(':id_turma', $id_turma);
            $alterar->execute();
        }
    }

    $id_aluno_alteracao = 9;

    $aluno = Lista::AlunoUnico($id_aluno_alteracao);

    if ($aluno) {
        
        $id = $id_aluno_alteracao;
        $nome = "Figueiredo";
        $altura = 1.80;
        $id_turma = 1;

        $mudar = Alteracao::Aluno($id,$nome,$altura,$id_turma);

    }else{
        echo "Aluno não existe";
    }

    
