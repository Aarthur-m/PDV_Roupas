<?php

namespace App\Model;

class Usuario {

    private $id, $nome, $senha, $nivelAcess;

    public function __construct ($nome, $senha, $nivelAcess) {
        $this->nome = $nome;
        $this->nivelAcess = $nivelAcess;
        $this->senha = $senha;
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

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNivelAcess() {
        return $this->nivelAcess;
    }

    public function setNivelAcess($nivelAcess) {
        $this->nivelAcess = $nivelAcess;
    }
}