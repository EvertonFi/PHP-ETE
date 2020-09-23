<?php

require 'Aula03.php';

abstract class Lista{
    static function Aluno(){
        try {
            
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('SELECT * FROM aluno WHERE statu = 0');
            $lista->execute();
            $lista = $lista->fetchAll(PDO::FETCH_OBJ);

            return $lista;

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }

    static function AlunoUnico($id){
        try {
            $conexao = BancoDados::conectar();
            $usuario = $conexao->prepare('SELECT * FROM aluno WHERE id_aluno = :id AND statu = 0');
            $usuario->bindValue(':id', $id);
            $usuario->execute();

            $usuario = $usuario->fetch(PDO::FETCH_OBJ);

            return $usuario;

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
}

abstract class Cadastro{
    static function Aluno($nome, $altura, $id_turma){
        try {
            $conexao = BancoDados::conectar();
            $inserir = $conexao->prepare('
            INSERT INTO aluno (nome, altura, id_turma, statu)
            VALUES (:nome, :altura, :turma, :statu)
            ');
            $inserir->bindValue(':nome', $nome);
            $inserir->bindValue(':altura', $altura);
            $inserir->bindValue(':turma', $id_turma);
            $inserir->bindValue(':statu', 0);
            $inserir->execute();

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
}


// $nome = "Antonio";
// $altura = 1.89;
// $id_turma = 3;

// $inserir = Cadastro::Aluno($nome, $altura, $id_turma);

// $alunos = Lista::Aluno();

// foreach ($alunos as $aluno){
//     echo $aluno->nome. " ";
//     echo $aluno->id_turma. " ";
//     echo $aluno->altura . "<br>";
// }