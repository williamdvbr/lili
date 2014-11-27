<?php
require_once 'IAutentica.php';
require_once 'Usuario.php';


class Conta implements IAutentica{
    private $numero;
    private $cliente;
    private $saldo;
    private $senha;
    
        
    function __construct($numero, $cliente, $saldo) {
        $this->numero = $numero;
        $this->cliente = $cliente;
        $this->saldo = $saldo;
    }

        
    public function getNumero() {
        return $this->numero;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    
    
    function sacar($valor){
        if($this->saldo>$valor and $valor >0){
                
            $this->saldo-=$valor;;
            return "Sucesso";
        }
        return "Falaha coloque mais dinheiro hehehhehe";
    }
    function depoisitar($valor) {
        $this->saldo+=$valor;
        
    }

    public function login($nome, $senha) {
        return "login Conta";
    }

}

   
