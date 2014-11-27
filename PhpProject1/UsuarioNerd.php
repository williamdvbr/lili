<?php
require_once 'Usuario.php';
require_once 'IAutentica.php';
class UsuarioNerd extends Usuario {
    
    
   private $senha;
   public function getSenha() {
       return $this->senha;
   }

   public function setSenha($senha) {
       $this->senha = $senha;
   }

    public function login($nome, $senha) {
        return "Usuario nerd";
    }

    

}


