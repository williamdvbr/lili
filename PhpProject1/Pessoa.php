<?php

abstract class Pessoa {
private $nome;
private $endereco;
private $telefone;

function getNome() {
    return $this->nome;
}

function getEndereco() {
    return $this->endereco;
}

function getTelefone() {
    return $this->telefone;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setEndereco($endereco) {
    $this->endereco = $endereco;
}

function setTelefone($telefone) {
    $this->telefone = $telefone;
}

abstract public function calcImpostoRenda($valor);

}
