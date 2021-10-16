<?php

require_once "../DAO/FornecedorDAO.php";
require_once "../Models/Fornecedor.php";

$idFor = $_GET["id"];

$FornecedorDAO = new \App\Model\FornecedorDAO();

foreach($FornecedorDAO->read() as $fornecedor):
    if($idFor == $fornecedor['idFor']) {
        $Fornecedor = new \App\Model\Fornecedor($fornecedor['nome'], $fornecedor['cnpj'], $fornecedor['email'], $fornecedor['numTel']);
        $Fornecedor->setId($fornecedor['idFor']);
        $FornecedorDAO->delete($Fornecedor);
        var_dump($Fornecedor);
    }
endforeach;


header('Location: ../Views/forn.php');
?>