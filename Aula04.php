<?php

require 'Aula03.php';

abstract class Lista{
    static function Aluno(){
        try {
            
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('Select * from aluno');
            $lista->execute();
            $lista = $lista->fetchAll(PDO::FETCH_OBJ);

            return $lista;

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
            INSERT INTO aluno (nome, altura, id_turma)
            VALUES (:nome, :altura, :turma)
            ');
            $inserir->bindValue(':nome', $nome);
            $inserir->bindValue(':altura', $altura);
            $inserir->bindValue(':turma', $id_turma);
            $inserir->execute();

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
}


$nome = "Antonio";
$altura = 1.89;
$id_turma = 3;

$inserir = Cadastro::Aluno($nome, $altura, $id_turma);

$alunos = Lista::Aluno();

foreach ($alunos as $aluno){
    echo $aluno->nome. " ";
    echo $aluno->id_turma. " ";
    echo $aluno->altura . "<br>";
}