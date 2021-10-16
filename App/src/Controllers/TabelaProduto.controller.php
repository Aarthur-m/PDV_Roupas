<?php

require_once "../DAO/ProdutoDAO.php";

function listarProdutos() {
    $ProdutoDAO = new \App\Model\ProdutoDAO();
    foreach($ProdutoDAO->read() as $produto):
        $id = $produto['idProd'];
        $nome = $produto['nome'];
        $idFor = $produto['idFor'];
        $quant = $produto['quant'];
        $valor = $produto['valor'];
        echo "<tr>";
            echo "<th scope='row'>".$produto['idProd']."</th>";
            echo "<td>".$produto["nome"]."</td>";
            echo "<td>".$produto["idFor"]."</td>";
            echo "<td>".$produto["quant"]."</td>";
            echo "<td>".$produto["valor"]."</td>";
            echo "<td><button type='button' class='btn btn-primary' style='background-color: var(--secondary);' data-bs-toggle='modal' data-bs-target='#AlterP' data-bs-id='$id' data-bs-nome='$nome' data-bs-idFor='$idFor' data-bs-quant='$quant' data-bs-valor='$valor'><i class='bi-pen' style='color: #e4dada;'></i></button></td>";
            echo "<td><button type='button' class='btn btn-danger' style='background-color: #b81531;' data-bs-toggle='modal' data-bs-target='#ExcluirP' data-bs-id='$id' ><i class='bi-trash-fill' style='color:#e4dada;'></i></button></td>";
            //echo "<td><a class='btn btn-danger' href='../Controllers/DeletarProduto.controller.php?id=$id'style='background-color: #b81531;'><i class='bi-trash-fill' style='color:#e4dada;'></i></a></td>";
        echo"</tr>";
    endforeach;
}

function selecionarProduto() {
    $ProdutoDAO = new \App\Model\ProdutoDAO();
    foreach($ProdutoDAO->read() as $produto):
        $id = $produto['idProd'];
        $nome = $produto['nome'];
        $valor = $produto['valor'];
        echo "<option value='$id'> $id - $nome - R$ $valor </option>";
    endforeach;
}
?>