<?php

namespace App\Model;

class Produto {
    
    private $id, $nome, $quantidade, $valor, $fonecedor;

    public function __construct($nome, $quantidade, $valor, $fornecedor) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
        $this->fornecedor = $fornecedor;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getQuant() {
        return $this->quantidade;
    }

    public function setQuant($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setFornecedor(Fornecedor $f) {
        $this->fornecedor = $f;
    }
}