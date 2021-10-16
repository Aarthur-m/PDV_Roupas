<?php
    require "../DAO/VendaDAO.php";

    function listarVenda() {
        $VendaDAO = new \App\Model\VendaDAO();
        foreach($VendaDAO->read() as $venda):
        $id = $venda['idVen'];
        $cliente = $venda['cpf'];
        $idCli = $venda['idCli'];
        $idProd = $venda['idProd'];
        $quantProd = $venda['quantProd'];
        $valorTotal = $venda['valorTotal'];
        $data = $venda['data'];
            echo "<tr>";
                echo "<th scope='row'>".$venda['idVen']."</th>";
                echo "<td>".$venda['cpf']."</td>";
                echo "<td>".$venda["idProd"]."</td>";
                echo "<td>".$venda["quantProd"]."</td>";
                echo "<td>".$venda["valorTotal"]."</td>";
                echo "<td>".$venda["data"]."</td>";
                echo "<td><a type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#AlterV' data-bs-id='$id' data-bs-whatever-idCli='$idCli' data-bs-whatever-idProd='$idProd' data-bs-whatever-quantProd='$quantProd' data-bs-whatever-valorTotal='$valorTotal' style='background-color: var(--secondary);'><i class='bi-pen' style='color: #e4dada;'></i></a></td>";
                echo "<td><button type='button' class='btn btn-danger' style='background-color: #b81531;' data-bs-toggle='modal' data-bs-target='#ExcluirP' data-bs-id='$id' ><i class='bi-trash-fill' style='color:#e4dada;'></i></button></td>";
                //echo "<td><a class='btn btn-danger' href='../Controllers/DeletarVenda.controller.php?id=$id' style='background-color: #b81531;'><i class='bi-trash-fill' style='color:#e4dada;'></i></a></td>";
            echo"</tr>";
        endforeach;
    }    
?>