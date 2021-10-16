<?php

require "../DAO/UsuarioDAO.php";

function listar() {
    $UsuarioDAO = new \App\Model\UsuarioDAO();
    foreach($UsuarioDAO->read() as $usuario):
    $id = $usuario['IdUsu'];
    $nome = $usuario['nome'];
    $senha = $usuario['senha'];
    $nivelAcess = $usuario['nivelAcess'];
        echo "<tr>";
            echo "<th scope='row'>".$usuario['IdUsu']."</th>";
            echo "<td>".$usuario["nome"]."</td>";
            echo "<td>".$usuario["senha"]."</td>";
            echo "<td>".$usuario["nivelAcess"]."</td>";
            echo "<td><a type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#AlterU' data-bs-id='$id' data-bs-whatever-nome='$nome' data-bs-whatever-senha='$senha' data-bs-whatever-nivelAcess='$nivelAcess' style='background-color: var(--secondary);'><i class='bi-pen' style='color: #e4dada;'></i></a></td>";
            echo "<td><button type='button' class='btn btn-danger' style='background-color: #b81531;' data-bs-toggle='modal' data-bs-target='#ExcluirP' data-bs-id='$id' ><i class='bi-trash-fill' style='color:#e4dada;'></i></button></td>";
            //echo "<td><a class='btn btn-danger' href='../Controllers/DeletarUsuario.controller.php?id=$id' style='background-color: #b81531;'><i class='bi-trash-fill' style='color:#e4dada;'></i></a></td>";
        echo"</tr>";
    endforeach;
}