<?php 
  include "../Utils/verificarLogin.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="download/png" href="img/logo3.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/global.css">
       <title>R-TOP Roupas</title>
  </head>
  <body>
  <div class="position-fixed w-100  ">
      <nav class="navbar navbar-dark" style="background-color: var(--primary);">
        <div class="container-fluid">
          <button class="navbar-toggler" style="border-color: var(--primary);" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="navbar-toggler-icon"></span>
          </button><img class="logo" src="img/logo3.png" alt="">
          <div class="separar"></div>
        </div>

      </nav>
    </div>
    <div class="separar1"></div>
    <div class="fv">
      <form action="../Controllers/EfetuarVenda.controller.php" method='POST' class="venda">
        <h1 class="vend">Venda</h1>
          <div class="mb-3 row g-2">
            <label for="formGroupExampleInput" class="form-label" style="color: #f2f2f2;">Cliente</label>
            <select class="form-select" name="idCli" aria-label="Default select example">
                <option selected>Selecione um Cliente</option>
                <?php
                  include_once "../Controllers/TabelaCliente.controller.php";
                  selecionarClientes();
                ?>
            </select>
          </div>
          <div class="mb-3 row g-2">
            <label for="formGroupExampleInput2" class="form-label" style="color: #f2f2f2;">Produto</label>
            <select class="form-select" name="idProd" aria-label="Default select example">
                <option selected>Selecione um Produto</option>
                <?php
                  include_once "../Controllers/TabelaProduto.controller.php";
                  selecionarProduto();
                ?>
            </select>
          </div>
          <div class="mb-3 row g-2">
            <label for="formGroupExampleInput" class="form-label" style="color: #f2f2f2;">Quantidade</label>
            <input type="text" class="form-control" name="quantProd" id="formGroupExampleInput" placeholder="Quantidade de Produtos">
          </div>
          <div class="mb-3 row g-2">
            <label for="formGroupExampleInput2" class="form-label" style="color: #f2f2f2;">Valor Total</label>
            <input type="text" class="form-control" name="valorTotal" id="formGroupExampleInput2" placeholder="Valor Total da Venda(R$)">
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-success" style="background-color: #00ff7f; color: #262626;">Efetuar</button></td></h1>
          </div>
      </form>
    </div>
    <!-- Modal -->
    <section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
          </div>
          <div class="modal-body">
          <h1 class="logado"><i class="bi bi-person-fill"></i><h1>
              <tr class="logt">
                <td>
                  <h2 class="tal"><?php echo $_SESSION['usuario']?></h2>
                </td>
              </tr>
            <ul class="list-group list-group-flush">
              <?php 
                include '../Utils/verificarAcesso.php';
              ?>
            </ul>
          </div>
          <div class="modal-footer">
            <a type="button" href="../Utils/sair.php" class="btn btn-danger" style="background-color: var(--quaternary);"><i class="bi bi-box-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
    
     


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>