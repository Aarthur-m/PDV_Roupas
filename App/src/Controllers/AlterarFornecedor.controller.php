<?php

require_once "../DAO/FornecedorDAO.php";
require_once "../Models/Fornecedor.php";

$FornecedorDAO = new \App\Model\FornecedorDAO();

$id = $_GET["id"];
$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$email = $_POST["email"];
$numTel = $_POST["numTel"];

$Fornecedor = new \App\Model\Fornecedor($nome, $cnpj, $email, $numTel);
$Fornecedor->setId($id);

$FornecedorDAO->update($Fornecedor);

header('Location: ../Views/forn.php');