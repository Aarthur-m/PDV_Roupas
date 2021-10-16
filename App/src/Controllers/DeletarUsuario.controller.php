<?php

require_once "../DAO/UsuarioDAO.php";
require_once "../Models/Usuario.php";

$idUsu = $_GET["id"];

$UsuarioDAO = new \App\Model\UsuarioDAO();

foreach($UsuarioDAO->read() as $usuario):
    if($idUsu == $usuario['IdUsu']) {
        $Usuario = new \App\Model\Usuario($usuario['nome'], $usuario['senha'], $usuario['nivelAcess']);
        $Usuario->setId($usuario['IdUsu']);
        $UsuarioDAO->delete($Usuario);
        var_dump($Usuario);
    }
endforeach;


header('Location: ../Views/usuarios.php');