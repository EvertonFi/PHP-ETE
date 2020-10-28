<?php

    require 'Aula06.php';

    if(isset($_POST,$_POST['nome'],$_POST['altura'])){
       Cadastro::Aluno($_POST['nome'],$_POST['altura'],1);
       header("Location: index.php");
    }
    
    // if(isset($_GET, $_GET['id'])){
    //     Delete::Aluno($_GET['id'],1);
    //     header("Location: index.php");
    // }