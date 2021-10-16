<?php

namespace App\Model;

include_once "Conexao.php";

class FornecedorDAO {
    
    public function create(Fornecedor $f) {

        $sql = 'INSERT INTO fornecedor(nome, cnpj, email, numTel) VALUES (?,?,?,?)';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $f->getNome());
        $stmt->bindValue(2, $f->getCNPJ());
        $stmt->bindValue(3, $f->getEmail());
        $stmt->bindValue(4, $f->getNumTel());
        $stmt->execute();
    }

    public function read() {

        $sql = 'SELECT * FROM fornecedor';

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

        $sql = 'SELECT * FROM fornecedor WHERE idFor = ?';

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

    public function update(Fornecedor $f) {
        
        $sql = 'UPDATE fornecedor set nome = ?, cnpj = ?, email = ?, numTel = ? WHERE idFor = ?';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $f->getNome());
        $stmt->bindValue(2, $f->getCNPJ());
        $stmt->bindValue(3, $f->getEmail());
        $stmt->bindValue(4, $f->getNumTel());
        $stmt->bindValue(5, $f->getId());
        $stmt->execute();
    }

    public function delete(Fornecedor $f) {

        $sql = 'DELETE FROM fornecedor WHERE idFor = ?';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $f->getId());
        $stmt->execute();
    }
}