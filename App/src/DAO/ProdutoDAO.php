<?php

namespace App\Model;

include_once "Conexao.php";

class ProdutoDAO {
    
    public function create(Produto $p) {

        $sql = "INSERT INTO produto (idFor, nome, quant, valor) VALUES (?,?,?,?)";

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $p->getFornecedor()->getId());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getQuant());
        $stmt->bindValue(4, $p->getValor());
        $stmt->execute();
    }

    public function read() {

        $sql = 'SELECT * FROM produto';

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

        $sql = 'SELECT * FROM produto WHERE idProd = ?';

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

    public function update(Produto $p) {

        $sql = "UPDATE produto SET idFor = ?, nome = ?, quant = ?, valor = ? WHERE idProd = ?";

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $p->getFornecedor()->getId());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getQuant());
        $stmt->bindValue(4, $p->getValor());
        $stmt->bindValue(5, $p->getId());
        $stmt->execute();
    }

    public function delete(Produto $p) {

        $sql = "DELETE FROM produto WHERE idProd = ?";

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $p->getId());
        $stmt->execute();
    }
}