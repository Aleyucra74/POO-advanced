<?php

     class Espectador
    {
        protected $nome;


        public function __construct($nome)
        {
            $this->nome = $nome;
        }

        public function visualizar()
        {
            echo $this->nome.' esta te vendo';
        }
    }
// $e = new Espectador('Dilma');
// $e->visualizar();



?>