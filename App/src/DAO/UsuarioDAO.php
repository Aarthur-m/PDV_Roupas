<?php

namespace App\Model;

include_once "Conexao.php";

class UsuarioDAO {
    
    public function create(Usuario $u) {

        $sql = 'INSERT INTO usuario(nome, senha, nivelAcess) VALUES (?,?,?)';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $u->getNome());
        $stmt->bindValue(2, $u->getSenha());
        $stmt->bindValue(3, $u->getNivelAcess());
        $stmt->execute();
    }

    public function read() {

        $sql = 'SELECT * FROM usuario';

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

        $sql = 'SELECT * FROM usuario WHERE IdUsu = ?';

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

    public function update(Usuario $u) {
        
        $sql = 'UPDATE usuario set nome = ?, senha = ?, nivelAcess = ? WHERE IdUsu = ?';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $u->getNome());
        $stmt->bindValue(2, $u->getSenha());
        $stmt->bindValue(3, $u->getNivelAcess());
        $stmt->bindValue(4, $u->getId());
        $stmt->execute();
    }

    public function delete(Usuario $u) {

        $sql = 'DELETE FROM usuario WHERE IdUsu = ?';

        $conexao = new \App\Model\Conexao();

        $conn = $conexao->getConn();

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $u->getId());
        $stmt->execute();
    }
}