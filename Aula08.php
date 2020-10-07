<?php

    require 'Aula06.php';

    if(isset($_POST,$_POST['nome'],$_POST['altura'])){
       
    }
    if(isset($_GET, $_GET['id'], $_GET['nome'],$_GET['altura'],$_GET['turma'])){

    }
    if(isset($_GET, $_GET['id'])){
        Delete::Aluno($_GET['id'],1);
        header("Location: index.php");
    }