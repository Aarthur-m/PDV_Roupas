<?php

namespace App\Model;

include_once "Conexao.php";

class ClienteDAO {
    
    public function create(Cliente $c) {

        $sql = "INSERT INTO cliente (nome, numTel, cpf) VALUES (?,?,?)";

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getNumTel());
        $stmt->bindValue(3, $c->getCPF());
        $stmt->execute();
    }

    public function read() {

        $sql = 'SELECT * FROM cliente';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        if($stmt->rowCount() > 0):
            $rs = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $rs;
        endif;
    }

    public function findById($id) {

        $sql = 'SELECT * FROM cliente';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        
        if($stmt->rowCount() > 0):
            $rs = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $rs;
        endif;
    }

    public function update(Cliente $c) {

        $sql = "UPDATE cliente SET nome = ?, numTel = ?, cpf = ? WHERE idCli = ?";

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getNumTel());
        $stmt->bindValue(3, $c->getCPF());
        $stmt->bindValue(4, $c->getId());
        $stmt->execute();
    }

    public function delete(Cliente $c) {

        $sql = "DELETE FROM cliente WHERE idCli = ?";

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $c->getId());
        $stmt->execute();
    }
}