<?php
session_start();
$usu = $_SESSION['id'];
$id = $_POST['id'];
$quant = $_POST['quantidade'];
$total = $_POST['total'];
include "../conexao.php";
$comando = "select  a.quantidade_prod from produto as a join itens_venda as b where a.id_prod = b.cod_prod and b.id_itens=$id";
$pesquisa = mysqli_query($conexao, $comando);
$dados = mysqli_fetch_array($pesquisa);
$max = $dados[0];
if($quant>$max || $quant<=0)
{
    echo "12";
    exit();
}else{
$comando = "update itens_venda set quantidade_vendida=$quant,preco_total=$total where id_itens=$id";
$pesquisa = mysqli_query($conexao, $comando);
echo "sucesso";
}
?>