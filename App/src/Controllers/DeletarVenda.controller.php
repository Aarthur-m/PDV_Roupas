<?php

require_once "../DAO/VendaDAO.php";
require_once "../Models/Venda.php";

$idVen = $_GET["id"];

$VendaDAO = new \App\Model\VendaDAO();

foreach($VendaDAO->read() as $venda):
    if($idVen == $venda['idVen']) {
        $Venda = new \App\Model\Venda($venda['quantProd'], $venda['valorTotal']);
        $Venda->setId($venda['idVen']);
        $VendaDAO->delete($Venda);
        var_dump($Venda);
    }
endforeach;


header('Location: ../Views/vendas.php');