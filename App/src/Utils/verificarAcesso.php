<?php 

    if($_SESSION['nivelAcess'] == 0) {
        echo '<li class="list-group-item" id="noBlock"><a href="principal.php" class="" ><i class="bi bi-house-fill"></i>Inicial</a></li>';
        echo '<li class="list-group-item" id="noBlock"><a href="usuarios.php" class="" ><i class="bi bi-person-lines-fill"></i>Usuários</a></li>';
        echo '<li class="list-group-item" id="noBlock"><a href="produtos.php" class=""><i class="bi bi-box-seam"></i>Produtos</a></li>';
        echo '<li class="list-group-item" id="noBlock"><a href="forn.php" class=""><i class="bi bi-truck"></i>Fornecedores</a></li>';
        echo '<li class="list-group-item" id="noBlock"><a href="clientes.php" class=""><i class="bi bi-people-fill"></i>Clientes</a></li>';
        echo '<li class="list-group-item" id="noBlock"><a href="vendas.php" class=""><i class="bi bi-cart3"></i>Vendas</a></li>';
    }

    if($_SESSION['nivelAcess'] == 1) {
        echo '<li class="list-group-item" id="noBlock"><a href="principal.php" class="" ><i class="bi bi-house-fill"></i>Inicial</a></li>';
        echo '<li class="list-group-item"><a href="#" class="opBlock"><i class="bi bi-lock-fill"></i>Usuários</a></li>';
        echo '<li class="list-group-item"><a href="#" class="opBlock"><i class="bi bi-lock-fill"></i>Produtos</a></li>';
        echo '<li class="list-group-item"><a href="#" class="opBlock"><i class="bi bi-lock-fill"></i>Fornecedores</a></li>';
        echo '<li class="list-group-item" id="noBlock"><a href="clientes.php" class=""><i class="bi bi-people-fill"></i>Clientes</a></li>';
        echo '<li class="list-group-item"><a href="#" class="opBlock"><i class="bi bi-lock-fill"></i>Vendas</a></li>';
    }
?>  