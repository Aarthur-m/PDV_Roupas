<?php

require "../DAO/ClienteDAO.php";

function listarClientes() {
    $ClienteDAO = new \App\Model\ClienteDAO();
    foreach($ClienteDAO->read() as $cliente):
        $id = $cliente['idCli'];
        $nome = $cliente['nome'];
        $telefone = $cliente['numTel'];
        $cpf = $cliente['cpf'];
        echo "<tr>";
            echo "<th scope='row'>".$cliente['idCli']."</th>";
            echo "<td>".$cliente["nome"]."</td>";
            echo "<td>".$cliente["numTel"]."</td>";
            echo "<td>".$cliente["cpf"]."</td>";
            echo "<td><a type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#AlterC' data-bs-id='$id' data-bs-whatever-nome='$nome' data-bs-whatever-telefone='$telefone' data-bs-whatever-cpf='$cpf' style='background-color: var(--secondary);'><i class='bi-pen' style='color: #e4dada;'></i></a></td>";
            echo "<td><button type='button' class='btn btn-danger' style='background-color: #b81531;' data-bs-toggle='modal' data-bs-target='#ExcluirP' data-bs-id='$id' ><i class='bi-trash-fill' style='color:#e4dada;'></i></button></td>";
            //echo "<td><a class='btn btn-danger' href='../Controllers/DeletarCliente.controller.php?id=$id' style='background-color: #b81531;'><i class='bi-trash-fill' style='color:#e4dada;'></i></a></td>";
        echo"</tr>";
    endforeach;
}

function selecionarClientes() {
    $ClienteDAO = new \App\Model\ClienteDAO();
    foreach($ClienteDAO->read() as $cliente):
    $id = $cliente['idCli'];
    $nome = $cliente['nome'];
    $cpf = $cliente['cpf'];
    echo "<option value='$id'> $nome - CPF: $cpf</option>";
    endforeach;
}
?>