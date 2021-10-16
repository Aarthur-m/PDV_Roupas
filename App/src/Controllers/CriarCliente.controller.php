<?php
    
    require_once "../DAO/ClienteDAO.php";
    require_once "../Models/Cliente.php";

    $ClienteDAO = new \App\Model\ClienteDAO();
    
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $numTel = $_POST["numTel"];

    $Cliente = new \App\Model\Cliente($nome, $cpf, $numTel);

    $ClienteDAO->create($Cliente);
    
    header('Location: ../Views/clientes.php');
?>