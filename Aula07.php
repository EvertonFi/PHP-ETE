<?php

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo $id;
    }else{
        echo 'Erro';
    }
    