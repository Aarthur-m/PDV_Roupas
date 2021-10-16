<?php

require_once "../DAO/ProdutoDAO.php";
require_once "../Models/Produto.php";

$idProd = $_GET["id"];

$ProdutoDAO = new \App\Model\ProdutoDAO();

foreach($ProdutoDAO->read() as $produto):
    if($idProd == $produto['idProd']) {
        $Produto = new \App\Model\Produto($produto['nome'], $produto['quant'], $produto['valor'], $produto['idFor']);
        $Produto->setId($produto['idProd']);
        $ProdutoDAO->delete($Produto);
        var_dump($Produto);
    }
endforeach;


header('Location: ../Views/produtos.php');
?>