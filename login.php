<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
if(!isset($_SESSION['email']))
{
    $email = '';
}else
{
    $email = $_SESSION['email'];
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="view/css/estilo.css">
    <link rel="stylesheet" href="view/css/main.css">

    <title>BeauTIful - Fazer login</title>
  </head>
  <body>
  <header>
        <div class="container">
            <nav class="navbar navbar-expand-sm pb-3 pt-4" id="nav-superior">
                        <div class="w-100">
                            <div class="row justify-content-between">
                                <div class="col-6 col-md-3 col-lg-2 mb-1 mb-md-0 mb-3">
                                    <div class="divLogo d-flex align-items-center">
                                        <img src="imagens/logo/Logo.png" alt="Logo" class="img-fluid">
                                        <a href="index" class="navbar-brand">Beautiful</a>
                                    </div>
                                </div>
                                    <!-- PESQUISA-->
                                    <div class="col-12 col-md-7 col-lg-5 order-1 order-md-0 d-flex align-items-center">
                                        <form action="pesquisa" method="get" class="d-flex w-100" role="search">
                                            <div class="input-group">
                                                <input class="form-control be-0" type="search" name='pesquisa' placeholder="Procure algo" aria-label="Search">
                                                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- FIM. BOTÃO TOGGLE-->
                                <div class="col-6 col-md-2 col-lg-5 mb-3 mb-md-0 d-flex align-items-center justify-content-end">
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menuOffCanvas" aria-controls="offcanvasResponsive">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    </div>
                                    <!-- FIM. LINKS-->
                                    <div class="d-none d-lg-flex navbar-nav justify-content-end">
                                        <div class="d-flex"><?php NavLogado();?></div>
                                    </div>
                                </div>
                            </div>
        <!-- FIM.-->
            </nav>      
        </div>
        <hr class="m-0 text-primary">
    </header>
    <main class="m-0 py-2">
        <div class="container px-0 px-md-3  my-5">
            <!-- cardLCD (Login, Cadastro, Descobrir senha) -->
            <div class="p-2 p-md-5 mx-auto cardLCD  bg-white border rounded-3 rounded-sm-0"> 
                <form action="php/logar" method="POST">
                <div class="pt-3 pt-md-0 text-center">
                    <h1 class="fs-3 title">
                        Login
                    </h1>
                    <p>Use uma conta BeauTIful</p>
                </div>
                <div class="d-block-flex justify-content-center align-items-center m-2 m-md-4 mb-md-5">
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" required value='<?php echo $email ?>' name="email" id="email" placeholder="Email">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" required name="senha" id="senha" placeholder="Senha">
                        <label for="senha">Senha</label>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <div class="form-check mb-md-2 mt-2">
                            <input class="form-check-input" type="checkbox" value="0" id="senhaCheck">
                            <label class="form-check-label" for="senhaCheck">
                                Mostrar senha
                            </label>
                        </div>
                        <a href="recuperar.php" class="my-auto text-primary">Esqueceu sua senha ?</a>
                    </div>
                
                </div>
                    <div class="d-flex justify-content-between align-items-center pb-3 pb-md-0 mx-md-4 mt-4 mt-md-0 mx-2">
                            <a href="cadastro" class="text-primary">Cadastrar</a>
                            <button type="submit" class="btn btn-primary px-4"><p class="m-0">Entrar</p></button>
                    </div>
                </form> 
            </div>
            </div>
        </div>
    </main>
    <!-- FIM. MODAL DE ERRO -->
    <div class="modal" id="erro" data-erro=<?php VerificarErro()?> tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h1 class="modal-title fs-4 mb-3">ERRO</h1>
                <p id="texto_erro" class="m-0 fs-5"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- FIM. OFFCANVAS-->
    <div class="offcanvas-lg offcanvas bg-fundo offcanvas-start d-lg-none" tabindex="-1" aria-labelledby="#offcanvasResponsiveLabel" id="menuOffCanvas">
            <!-- OFFCANVAS CABEÇALHO-->
            <div class="offcanvas-header bg-white">
                <h2 class="offcanvas-title fs-3" id="offcanvasResponsivelLabel">Menu</h2>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#menuOffCanvas" aria-label="Close"></button>
            </div>
            <hr class="m-0 text-primary">
            <!-- OFFCANVAS CORPO-->
            <div class="offcanvas-body">
            <div class="coluna">
                <?php NavLogado(); ?>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/valores.js"></script>
  </body>
</html>