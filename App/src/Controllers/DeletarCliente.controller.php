<?php

require_once "../DAO/ClienteDAO.php";
require_once "../Models/Cliente.php";

$idCli = $_GET["id"];

$ClienteDAO = new \App\Model\ClienteDAO();

foreach($ClienteDAO->read() as $cliente):
    if($idCli == $cliente['idCli']) {
        $Cliente = new \App\Model\Cliente($cliente['nome'], $cliente['cpf'], $cliente['numTel']);
        $Cliente->setId($cliente['idCli']);
        $ClienteDAO->delete($Cliente);
        var_dump($Cliente);
    }
endforeach;


header('Location: ../Views/clientes.php');
?>