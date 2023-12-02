<?php
session_start();
if(!isset($_SESSION['id']))
{
    $_SESSION['prod'] = $_POST['id'];
    $_SESSION['quant'] = $_POST['quant'];
    header("location:../../login");
}else
{
$usu = $_SESSION['id'];
if(!isset($_SESSION['prod']))
{
$quant = $_POST['quant'];
$prod = $_POST['id'];
}else
{
    $quant = $_SESSION['quant'];
    $prod = $_SESSION['prod'];
    unset($_SESSION['prod']);
    unset($_SESSION['quant']);
}
include "../conexao.php";
$comando = "select quantidade_prod from produto where id_prod=$prod";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$estoque = $dados[0];
if($estoque>=$quant)
{
$comando = "select * from vendas where cod_usu=$usu and status_venda=0";

$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);

if($resultados == 0){
$comando = "insert into vendas(data_venda,total_venda,cod_usu,status_venda) values (0000-00-00,0,$usu,0)";
mysqli_query($conexao,$comando);
}
$comando = "select * from vendas where cod_usu=$usu and status_venda=0";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
$dados = mysqli_fetch_array($pesquisa);
$venda = $dados[0];
$comando = "select preco_prod from produto where id_prod=$prod";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$preco = $dados[0];
$total = $preco*$quant;

$comando = "select * from itens_venda where cod_venda=$venda and cod_prod=$prod";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados==0)
{
$comando = "insert into itens_venda(cod_prod,quantidade_vendida,cod_venda,preco_total) values ($prod,$quant,$venda,$total)";
mysqli_query($conexao,$comando);
header("location:../../carrinho");
}else{
    header("location:../../view_produto?id=$prod");
    $_SESSION['erro'] = 13;
}
}else{
    header("location:../../view_produto?id=$prod");
    $_SESSION['erro'] = 12;
}
}
?>