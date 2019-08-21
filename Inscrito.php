<?php

 require('Espectador.php');

    class Inscrito extends Espectador
    {
        private $email;
        private $senha;
        
        public function __construct($nome,$email,$senha)
        {   
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }
        
        public function comentar(string $texto)
        {
            echo $this->nome.' falou '.$texto;
        }

        public function setEmail(string $email)
        {
            $this->email = $email;
        }

        public function getEmail()
        {
            return $this->email;
        }
    }

    $inscrito = new Inscrito('ovelha','ale@asd','ass');
    $inscrito->vizualizar();
?>