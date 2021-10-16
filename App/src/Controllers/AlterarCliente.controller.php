<?php

require_once "../DAO/ClienteDAO.php";
require_once "../Models/Cliente.php";

$ClienteDAO = new \App\Model\ClienteDAO();

$id = $_GET["id"];
$nome = $_POST["nome"];
$cnpj = $_POST["cpf"];
$numTel = $_POST["numTel"];

$Cliente = new \App\Model\Cliente($nome, $cnpj, $numTel);
$Cliente->setId($id);

$ClienteDAO->update($Cliente);

header('Location: ../Views/clientes.php');