<?php
require_once 'Usuario.php';
class Sistema {
    function principal(Usuario $u,$nome,$senha) {
        echo $u->login($nome,$senha);
        
    }
}
