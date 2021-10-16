<?php

require_once "../DAO/UsuarioDAO.php";
require_once "../Models/Usuario.php";

$UsuarioDAO = new \App\Model\UsuarioDAO();

$id = $_GET["id"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$nivelAcess = $_POST["nivelAcess"];

$Usuario = new \App\Model\Usuario($nome, $senha, $nivelAcess);
$Usuario->setId($id);

$UsuarioDAO->update($Usuario);

header('Location: ../Views/usuarios.php');