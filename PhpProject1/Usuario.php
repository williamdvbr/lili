<?php

abstract class Usuario {
    private $nome;
    
    function __construct($nome) {
        $this->nome = $nome;
        
        
    }
    public function getNome() {
        return $this->nome;
    }

   
    public function setNome($nome) {
        $this->nome = $nome;
    }

   

    abstract function login($nome,$senha);
    

}
