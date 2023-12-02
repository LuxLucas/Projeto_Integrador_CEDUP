<?php
session_start();
$cupom = $_POST['cupom'];
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

$comando = "delete from uso_cupom where cod_cupom=$usoCupom and cod_venda=$venda";
mysqli_query($conexao,$comando);
header("location:../../carrinho_endereco");
?>