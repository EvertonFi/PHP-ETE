<?php

    class Pessoa {
        public $nome;
        public $idade;

        public function Falar(){
            echo $this->nome." com idade ".$this->idade;
        }
    }
    
    $aluno = new Pessoa();
    $aluno->nome = "João";
    $aluno->idade = "25";
    $aluno->Falar();

    class Login{
        private $email;
        private $senha;

        public function setEmail($e){
            $filtro = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $filtro;
        }

        public function getEmail(){
           return $this->email;
        }

        public function setSenha($s){
            $this->senha = $s;
        }

        public function getSenha(){
            return $this->senha;
         }

        public function Logar(){
            if ($this->email == "oi@oi.com" && $this->senha == "123") {
                echo "Logado com Sucesso!";
            } else {
                echo "Erro de acesso!";
            }
        }
    }

    $login = new Login();
    $login->setEmail("oi@oi.com");
    $login->setSenha("123");
    $login->Logar();
    echo "<br>";
    echo $login->getEmail();
    

?>