<?php
    
    require_once "../DAO/ProdutoDAO.php";
    require_once "../DAO/FornecedorDAO.php";
    require_once "../Models/Produto.php";
    require_once "../Models/Fornecedor.php";
    
    $ProdutoDAO = new \App\Model\ProdutoDAO();
    $FornecedorDAO = new \App\Model\FornecedorDAO();
    
    $nome = $_POST["nome"];
    $idFor = $_POST["idFor"];
    $quant = $_POST["quant"];
    $valor = $_POST["valor"];

    $Fornecedor;

    foreach($FornecedorDAO->findById($idFor) as $fornecedor):
            $Fornecedor = new \App\Model\Fornecedor($fornecedor["nome"], $fornecedor["cnpj"], $fornecedor["email"], $fornecedor["numTel"]);
            $Fornecedor->setId($fornecedor["idFor"]);
    endforeach;

    $Produto = new \App\Model\Produto($nome, $quant, $valor, $Fornecedor);

    $ProdutoDAO->create($Produto);
    
    header('Location: ../Views/produtos.php');
?>