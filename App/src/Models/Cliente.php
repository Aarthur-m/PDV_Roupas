<?php

namespace App\Model;

class Cliente {

    private $id, $nome, $numTel, $cpf;

    public function __construct ($nome, $cpf, $numTel) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->numTel = $numTel;
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

    public function getNumTel() {
        return $this->numTel;
    }

    public function setNumTel($numTel) {
        $this->numTel = $numTel;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }
}