<?php

namespace App\Model;

include_once "Conexao.php";

class VendaDAO {
    
    public function create(Venda $v) {

        $sql = 'INSERT INTO venda(idCli, idProd, quantProd, valorTotal) VALUES (?,?,?,?)';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $v->getCliente()->getId());
        $stmt->bindValue(2, $v->getProduto()->getId());
        $stmt->bindValue(3, $v->getQuantProd());
        $stmt->bindValue(4, $v->getValorTotal());
        $stmt->execute();
    }

    public function read() {

        $sql = 'SELECT venda.*, cliente.cpf AS cpf FROM venda INNER JOIN cliente ON venda.idCli = cliente.idCli';

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

        $sql = 'SELECT * FROM venda WHERE idVen = ?';

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

    public function update(Venda $v) {
        
        $sql = 'UPDATE venda set idCli = ?, idProd = ?, quantProd = ?, valorTotal = ? WHERE idVen = ?';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $v->getCliente()->getId());
        $stmt->bindValue(2, $v->getProduto()->getId());
        $stmt->bindValue(3, $v->getQuantProd());
        $stmt->bindValue(4, $v->getValorTotal());
        $stmt->bindValue(5, $v->getId());
        $stmt->execute();
    }

    public function delete(Venda $v) {

        $sql = 'DELETE FROM venda WHERE idVen = ?';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $v->getId());
        $stmt->execute();
    }
}