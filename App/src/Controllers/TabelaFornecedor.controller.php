<?php

require "../DAO/FornecedorDAO.php";

function listar() {
    $FornecedorDAO = new \App\Model\FornecedorDAO();
    foreach($FornecedorDAO->read() as $fornecedor):
    $id = $fornecedor['idFor'];
    $nome = $fornecedor['nome'];
    $cnpj = $fornecedor['cnpj'];
    $email = $fornecedor['email'];
    $numTel = $fornecedor['numTel'];
        echo "<tr>";
            echo "<th scope='row'>".$fornecedor['idFor']."</th>";
            echo "<td>".$fornecedor["nome"]."</td>";
            echo "<td>".$fornecedor["cnpj"]."</td>";
            echo "<td>".$fornecedor["email"]."</td>";
            echo "<td>".$fornecedor["numTel"]."</td>";
            echo "<td><a type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#AlterP' data-bs-id='$id' data-bs-whatever-nome='$nome' data-bs-whatever-cnpj='$cnpj' data-bs-whatever-email='$email' data-bs-whatever-numTel='$numTel' style='background-color: var(--secondary);'><i class='bi-pen' style='color: #e4dada;'></i></a></td>";
            echo "<td><button type='button' class='btn btn-danger' style='background-color: #b81531;' data-bs-toggle='modal' data-bs-target='#ExcluirP' data-bs-id='$id' ><i class='bi-trash-fill' style='color:#e4dada;'></i></button></td>";
            //echo "<td><a class='btn btn-danger' href='../Controllers/DeletarFornecedor.controller.php?id=$id' style='background-color: #b81531;'><i class='bi-trash-fill' style='color:#e4dada;'></i></a></td>";
        echo"</tr>";
    endforeach;
}


function selecionarFornecedor() {
    $FornecedorDAO = new \App\Model\FornecedorDAO();
    foreach($FornecedorDAO->read() as $fornecedor):
    $id = $fornecedor['idFor'];
    $nome = $fornecedor['nome'];
    $cnpj = $fornecedor['cnpj'];
    $email = $fornecedor['email'];
    $numTel = $fornecedor['numTel'];
        echo "<option value='$id'>$nome</option>";
    endforeach;
}
?>