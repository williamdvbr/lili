<?php
require_once'Pessoa.php';
            class PessoaFisica extends Pessoa{
              private $cpf;
              private $rg;
              private $DataNascimento;
              function getCpf() {
                  return $this->cpf;
              }

              function getRg() {
                  return $this->rg;
              }

              function getDataNascimento() {
                  return $this->DataNascimento;
              }

              function setCpf($cpf) {
                  $this->cpf = $cpf;
                  if(strlen($cpf)<8 or strlen($cpf)>11){
                  return "CPF invalido.";
                  }
                  return "CPF valido.";

              }

              function setRg($rg) {
                  $this->rg = $rg;
              }

              function setDataNascimento($DataNascimento) {
                  $this->DataNascimento = $DataNascimento;
              }

               public function calcImpostoRenda($valor) {

                    return $valor*12/0.10;
                }

            }
