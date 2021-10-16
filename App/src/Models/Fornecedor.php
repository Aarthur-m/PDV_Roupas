<?php

namespace App\Model;

class Fornecedor {

    private $id, $nome, $cnpj, $email, $numTel;

    public function __construct ($nome, $cnpj, $email, $numTel) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->email = $email;
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

    public function getCNPJ() {
        return $this->cnpj;
    }

    public function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}