<?php
include "../conexao.php";
$nome = trim($_POST['nomeBairro']);
$cidade = $_POST['cidade'];

$comando = "select * from bairro where nome_bairro='$nome' and cod_cidade=$cidade";
$pesquisa = mysqli_query($conexao,$comando);

if(mysqli_num_rows($pesquisa)>0)
{
    header("location:../../endereco");
}else
{
    $comando = "insert into bairro(nome_bairro,cod_cidade,status_bairro) values ('$nome',$cidade,1)";
    mysqli_query($conexao,$comando);
    header("location:../../endereco");
}