<?php
    require 'Aula06.php';
    if(isset($_GET, $_GET['id'], $_GET['nome'],$_GET['altura'],$_GET['turma'])){
        Alteracao::Aluno($_GET['id'], $_GET['nome'],$_GET['altura'],$_GET['turma']);
        header("Location: index.php");
    }