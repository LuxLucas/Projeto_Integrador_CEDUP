<?php
session_start();
include "php/comandos.php";

$id = $_SESSION['id'];
$tipo = $_SESSION['tipo_usu'];

include "php/conexao.php";

$comando = "select * from usuario where id_usu=$id";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);

$email = $dados[1];
if($tipo==2)
{
$comando = "select * from vendedor where cod_usu=$id";
}else{
  $comando = "select * from cliente where cod_usu=$id";
}
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);

$nome = $dados[1];
$cpf = $dados[2];
$nasc = $dados[3];
$tele = $dados[4];
?>
<!Doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="view/css/estilo.css">
    <link rel="stylesheet" href="view/css/main.css">
    <title>BeauTIful - Nome provisório</title> 
  </head>
  <body>
  <header class="mb-3 mb-md-4 mb-lg-5">
        <nav class="navbar stiky-top navbar-expand-sm navbar-light bg-light py-3" id="nav-superior">
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand">BeauTIful</a>
                <div>
                    <button type="button" class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuOffCanvas" aria-controls="offcanvasResponsive">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas-lg offcanvas-start container-fluid" tabindex="-1" aria-labelledby="#offcanvasResponsiveLabel" id="menuOffCanvas">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasResponsivelLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#menuOffCanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body justify-content-between">
                            <?php
                            NavLogado();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
          <div>
            <h2>
              Meus Dados
            </h2>
            <hr>
                    <div class="row">
                <div class="col-sm-12 col-lg-7">
                  <div class="mb-3">
                    <label for="nomeProduto" class="form-label">Nome</label>
                    <input type="text" value='<?php echo"$nome" ?>' class="form-control" disabled name="nome" id="nomeProduto" placeholder="Nome">
                  </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                  <div class="mb-3">
                    <label for="cpfFuncionario" class="form-label">CPF</label>
                    <input type="text" value='<?php echo"$cpf" ?>' class="form-control" disabled name="cpf" id="cpfFuncionario" placeholder="CPF">
                  </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                  <div class="mb-3">
                    <label for="nascFuncionario" class="form-label">Nascimento</label>
                    <input type="date" class="form-control" value='<?php echo"$nasc" ?>' disabled name="nasc" id="nascFuncionario" placeholder="CPF">
                  </div>
                </div>
                <div class="col-12 col-lg-10">
                  <div class="mb-3">
                    <label for="emailFuncionario" class="form-label">Email</label>
                    <input type="email" class="form-control" value='<?php echo"$email
                    " ?>'  disabled id="emailFuncionario" placeholder="Email">
                  </div>
                </div>
                <div class="col-7 col-md-4 col-lg-2">
                  <div class="mb-3">
                    <label for="teleFuncionario" class="form-label">Telefone</label>
                    <input type="text" class="form-control" value='<?php echo"$tele" ?>'  disabled name="telefone" id="teleFuncionario" placeholder="Telefone">
                  </div>
                </div>
          </div>
          <hr>
          <div class="mb-4">
            <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar'>
              <p class='my-auto me-1'>Alterar Seus Dados</p>
            </button>
        </div>
          </div>
        </div>
    </main>
    <footer>

    </footer>

    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>