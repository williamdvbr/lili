<?php
require_once'Pessoa.php';
                    class Receitas {
                       private $valorTotal;
                       private $valorMensal;
                       private $Parcelas;
                       function getValorTotal() {

                           return $this->valorTotal;
                       }

                       function getValorMensal() {
                           return $this->valorMensal;
                       }

                       function getParcelas() {
                           return $this->Parcelas;
                       }

                       function setValorTotal($valorTotal) {
                           $this->valorTotal = $valorTotal;
                       }

                       function setValorMensal($valorMensal) {
                           $this->valorMensal = $valorMensal;
                       }

                       function setParcelas($Parcelas) {
                           $this->Parcelas = $Parcelas;
                       }
                    public function tributar(Pessoa $p,$parcelas,$valor){

                        $this->valorTotal= $p->calcImpostoRenda($valor);
                        $this->valorMensal = $p->calcImpostoRenda($valor)/$parcelas;
                        echo $this->valorMensal ;
                    }}

