<?php

namespace App\Model;

class Conexao {

    public function getConn() {

    	try {
    		$pdo = new \PDO('mysql:host=localhost;dbname=rtoproupas;charset=utf8', 'root', '');
			return $pdo;
    	} catch (PDOEexception $ex) {
    		echo "Erro".$ex->getMessage();
    	}

    }
}