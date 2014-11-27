<?php
require_once 'Usuario.php';

class UsuarioAdmin extends Usuario{
    
    public function login($nome, $senha) {
        return "UsuarioAdmin";
    }

}
