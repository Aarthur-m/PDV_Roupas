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
    <link rel="stylesheet" href="css/main.css">
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
      <section class="prod">
          <div class="table-responsive col-lg-12" >
            <table class="table table-hover table-bordeless" style="background-color: #f2f2f2;">
              <h1 class="produtos">Tabela de Fornecedores <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#CadastroP" style="background-color: #00ff7f;"><i class="bi-plus-lg" style="color: var(--terciary);"></i></button></h1>
              <thead class="table-dark">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">CNPJ</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Alterar</th>
                  <th scope="col">Excluir</th>

                </tr>
              </thead>
              <tbody>
                <?php
                include "../Controllers/TabelaFornecedor.controller.php";
                listar();
                ?>
              </tbody>
            </table>
          </div>
      </section>
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
<!-- Modal -->
<div class="modal fade" id="CadastroP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Controllers/CriarFornecedor.controller.php" method="POST" class="fornecedor">
          <h1 class="cadP">Cadastro do Fornecedor</h1>
          <div class="mb-3 row g-3">
              <label for="formGroupExampleInput" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome do Fornecedor">
          </div>
          <div class="mb-3 row g-3">
              <label for="formGroupExampleInput2" class="form-label">CNPJ</label>
              <input type="text" class="form-control" name="cnpj" id="formGroupExampleInput2" placeholder="CNPJ do Fornecedor">
          </div>
          <div class="mb-3 row g-3">
              <label for="formGroupExampleInput2" class="form-label">E-mail</label>
              <input type="text" class="form-control" name="email" id="formGroupExampleInput2" placeholder="E-mail do Fornecedor">
          </div>
          <div class="mb-3 row g-3">
              <label for="formGroupExampleInput2" class="form-label">Telefone</label>
              <input type="text" class="form-control" name="numTel" id="formGroupExampleInput2" placeholder="Telefone do Fornecedor">
          </div>
          <button type="submit" class="btn btn-success" style="background-color: #00ff7f; color: #262626;">Cadastrar</button></td></h1>
      </form>
      
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
    </div>
    
    <div class="modal fade" id="AlterP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="../Controllers/AlterarFornecedor.controller.php?id" id="formAlterar" method="POST" class="fornecedor">
              <h1 class="cadP">Alterar Fornecedor</h1>
              <div class="mb-3 row g-3">
                  <label for="formGroupExampleInput" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome"  id="formGroupExampleInput" placeholder="Nome do Fornecedor">
              </div>
              <div class="mb-3 row g-3">
                  <label for="formGroupExampleInput2" class="form-label">CNPJ</label>
                  <input type="text" class="form-control" name="cnpj"  id="formGroupExampleInput2" placeholder="CNPJ do Fornecedor">
              </div>
              <div class="mb-3 row g-3">
                  <label for="formGroupExampleInput2" class="form-label">E-mail</label>
                  <input type="text" class="form-control" name="email"  id="formGroupExampleInput2" placeholder="E-mail do Fornecedor">
              </div>
              <div class="mb-3 row g-3">
                  <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                  <input type="text" class="form-control" name="numTel"  id="formGroupExampleInput2" placeholder="Telefone do Fornecedor">
              </div>
              <button type="submit" class="btn btn-success" style="background-color: #00ff7f; color: #262626;">Alterar</button></td></h1>
          </form>
          
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ExcluirP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color: var(--quaternary); color: #f2f2f2;">
                <h5 class="modal-title" id="staticBackdropLabel">Excluir</h5>
              </div>
              <div class="modal-body">
                <form action="" class="fornecedor">
                  <label for="" class="cadP"> Tem certeza de que deseja excluir?</label>
                  
                  
              </form>
              
              <div class="excluir">
                <a type="button" href="" id="btnExcluir" class="btn btn-success" style="background-color:  var(--secondary); color: #f2f2f2;">Excluir</a></td></h1>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: var(--quaternary);">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
      var exampleModal = document.getElementById('AlterP')
      var form = document.getElementById('formAlterar');
      exampleModal.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var id = button.getAttribute('data-bs-id')
      var nome = button.getAttribute('data-bs-whatever-nome')
      var cnpj = button.getAttribute('data-bs-whatever-cnpj')
      var email = button.getAttribute('data-bs-whatever-email')
      var telefone = button.getAttribute('data-bs-whatever-numTel')
      form.setAttribute('action', '../Controllers/AlterarFornecedor.controller.php?id=' + id);
      // If necessary, you could initiate an AJAX request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.
      //var modalTitle = exampleModal.querySelector('.modal-title')
      var modalBodyInput = exampleModal.querySelectorAll('.modal-body input')

      //modalTitle.textContent = 'New message to ' + recipient
      modalBodyInput[0].value = nome;
      modalBodyInput[1].value = cnpj
      modalBodyInput[2].value = email
      modalBodyInput[3].value = telefone
    })

    var excluirP = document.getElementById('ExcluirP')
      var btnExcluir = document.getElementById('btnExcluir');

      excluirP.addEventListener('show.bs.modal', function (event) {

      var button = event.relatedTarget

      var id = button.getAttribute('data-bs-id')
      btnExcluir.setAttribute('href', '../Controllers/DeletarFornecedor.controller.php?id=' + id);
      })
  </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>