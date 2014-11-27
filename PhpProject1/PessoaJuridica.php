<?php
require_once'Pessoa.php';
            class PessoaJuridica extends Pessoa{
            private $cnpj;

            function getCnpj() {
                return $this->cnpj;
            }

            function setCnpj($cnpj) {
                $this->cnpj = $cnpj;
                if(strlen($cnpj)!=14){
                    return "CNPJ invalido.";
                }
                return "valido";
            }
                public function calcImpostoRenda($valor) {

                    $valor*12/0.14+1000;


                
    }

    }

