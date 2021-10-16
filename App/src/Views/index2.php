<?php
    require "..\Models\Cliente.php";
    require_once "../Models/Fornecedor.php";
    require "..\Models\Produto.php";
    require "..\DAO\ClienteDAO.php";
    require "..\DAO\ProdutoDAO.php";
    require_once "../DAO/FornecedorDAO.php";

    $F = new \App\Model\Fornecedor("Boruto", "8728732837837", "boruto@gmail.com", "986732807");
    echo "<p>".var_dump($F)."</p>";

    $C = new \App\Model\Cliente("Joao Pedro", "32323", "43453534");
    $C->setId(16);
    echo $C->getId();
    echo "<p>".var_dump($C)."</p>";

    $P = new \App\Model\Produto("Bolo", 1, 100.00, $F);
    $P->setId(6);
    echo "<p>".var_dump($P)."</p>";

    $F2 = new \App\Model\Fornecedor("Mitsuki", "23131254534", "Mitsuki@gmail.com", "949430850");
    $F2->setId(5);

    echo "<p>".var_dump($F2)."</p>";

    $FornecedorDAO = new \App\Model\FornecedorDAO();

    $ProdutoDAO = new \App\Model\ProdutoDAO();

    $ProdutoDAO->delete($P);
    
    //$FornecedorDAO->create($F);
    
    
    foreach($FornecedorDAO->read() as $fornecedor):
        echo "ID: ".$fornecedor["idFor"]."<br>";
        echo "Nome: ".$fornecedor["nome"]."<br>";
    endforeach;
    

    //$FornecedorDAO->update($F2);
    
    //$FornecedorDAO->delete($F2);
    
    $ClienteDAO = new \App\Model\ClienteDAO();

    $ClienteDAO->delete($C);
    