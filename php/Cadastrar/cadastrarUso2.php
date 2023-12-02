<?php
session_start();
$cupom = trim($_POST['cupom']);
$id = $_SESSION['id'];
include "../conexao.php";
$comando = "select a.id_venda from vendas as a where a.cod_usu=$id and a.status_venda=0";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$venda = $dados[0];
$comando = "select a.id_cupom from cupom as a where a.nome_cupom='$cupom'";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$usoCupom = $dados[0];

$comando ="select * from uso_cupom as a join vendas as b where
a.cod_venda=b.id_venda and a.cod_cupom=$usoCupom and b.cod_usu=$id";
$pesquisa = mysqli_query($conexao,$comando);
if(mysqli_num_rows($pesquisa)==0)
{
    $comando = "insert into uso_cupom(cod_cupom,cod_venda) values ($usoCupom,$venda)";
    mysqli_query($conexao,$comando);
    header("location:../../carrinho_endereco");
}else
{
    header("location:../../carrinho_endereco");
}
?>