<?php
session_start();
include "php/comandos.php";
include "php/Buscar.php";
include "php/Selects.php";
include "php/conexao.php";
if(isset($_GET['prod']))
{
$prod = $_GET['prod'];
}else
{
    header("location:relatorio");
}
$valores = [];
for($i=1;$i<13;$i++)
{
$salario = 0;
$comando = "select SUM(a.quantidade_vendida) as preco from itens_venda as a  join vendas as b join produto as c where a.cod_venda=b.id_venda and a.cod_prod=c.id_prod and MONTH(b.data_venda)=$i and a.cod_prod=$prod";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$salario += $dados[0];
array_push($valores,$salario);
}
checarAdm();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="view/css/estilo.css">
    <link rel="stylesheet" href="view/css/main.css">

    <title>BeauTIful - Relatório por venda</title>
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
    <main class="py-2">
        <div class="container">
            <div class="mt-3 mb-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="administrar" class="text-primary">Administração</a></li>
                            <li class="breadcrumb-item"><a href="relatorio" class="text-primary">Relatórios</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vendas</li>
                        </ol>
                    </nav>
            </div>
            <div class="border p-2 bg-white rounded-3">
                <?php echo"
                <script>
                window.onload = function () {
                var chart = new CanvasJS.Chart('chartContainer', {
                    animationEnabled: true,
                    theme: 'light2',
                    title:{
                        text: 'Relatório de Venda Mensal'
                    },
                    axisY: {
                        title: 'Vendas(R$)'
                    },
                    data: [{
                        type: 'column',
                        showInLegend: true,
                        legendMarkerColor: 'grey',
                        legendText: 'Itens Comprados',
                        dataPoints: [
                            { y: ".$valores[0].", label: 'Janeiro' },
                            { y: ".$valores[1].",  label: 'Feveiro' },
                            { y: ".$valores[2].",  label: 'Março' },
                            { y: ".$valores[3].",  label: 'Abril' },
                            { y: ".$valores[4].",  label: 'Maio' },
                            { y: ".$valores[5].", label: 'Junho' },
                            { y: ".$valores[6].",  label: 'Julho' },
                            { y:".$valores[7].",  label: 'Agosto' },
                      { y: ".$valores[8].",  label: 'Setembro' },
                      { y: ".$valores[9].",  label: 'Outubro' },
                      { y: ".$valores[10].",  label: 'Novembro' },
                      { y: ".$valores[11].",  label: 'Dezembro' }
                        ]
                    }]
                });
                chart.render();
                }
                </script>
                </head>
                <body>
                <div id='chartContainer' style='height: 370px; width: 100%;'></div>
                <script src='https://cdn.canvasjs.com/canvasjs.min.js'></script>";?>
            </div>
            <div class="border rounded-3 bg-white p-3 mt-4">
                <h2 class="mt-4 px-2 title">
                    Dados do Produto
                </h2>
                <div class="row mt-4 mx-auto">
                  <?php VerRelatorio($prod)?>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <!-- FIM. OFFCANVAS -->
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
</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/valores.js"></script>
    <script src="js/dataTable.js"></script>
    <script src="js/jquery.mask.js"></script>
</html>