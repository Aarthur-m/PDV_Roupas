<?php

    require_once "../DAO/ProdutoDAO.php";
    require_once "../DAO/ClienteDAO.php";
    require_once "../Models/Produto.php";
    require_once "../Models/Cliente.php";
    require_once "../Models/Fornecedor.php";
    require_once "../DAO/FornecedorDAO.php";
    require_once "../Models/Venda.php";
    require_once "../DAO/VendaDAO.php";


    
    $ProdutoDAO = new \App\Model\ProdutoDAO();
    $ClienteDAO = new \App\Model\ClienteDAO();
    $FornecedorDAO = new \App\Model\FornecedorDAO();
    $VendaDAO = new \App\Model\VendaDAO();
    
    $idProd = $_POST["idProd"];
    $idCli = $_POST['idCli'];
    $quantProd = $_POST["quantProd"];
    $valorTotal = $_POST["valorTotal"];

    
    $Cliente;
    $Fornecedor;
    $Produto;
    
    foreach($ClienteDAO->findById($idCli) as $cliente):
        $Cliente = new \App\Model\Cliente($cliente["nome"], $cliente["cpf"], $cliente["numTel"]);
        $Cliente->setId($cliente["idCli"]);
    endforeach;
    
    foreach($ProdutoDAO->findById($idProd) as $produto):
        foreach($FornecedorDAO->findById($produto['idFor']) as $fornecedor):
            $Fornecedor = new \App\Model\Fornecedor($fornecedor["nome"], $fornecedor["cnpj"], $fornecedor["email"], $fornecedor["numTel"]);
            $Fornecedor->setId($fornecedor["idFor"]);
        endforeach;
        
        $Produto = new \App\Model\Produto($produto["nome"], $produto["quant"] - $quantProd, $produto["valor"], $Fornecedor);
        $Produto->setId($produto["idProd"]);
    endforeach;
    
    $Venda = new \App\Model\Venda($quantProd, $valorTotal);
    $Venda->setCliente($Cliente);
    $Venda->setProduto($Produto);
    
    $ProdutoDAO->update($Produto);
    $VendaDAO->create($Venda);
    
    header('Location: ../Views/vendas.php');
?>