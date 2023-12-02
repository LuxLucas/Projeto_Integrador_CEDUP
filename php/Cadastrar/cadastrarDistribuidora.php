<?php
session_start();
$nome = trim($_POST['nome']);
$cnpj = trim($_POST['cnpj']);
$fantasia = trim($_POST['fantasia']);
$_SESSION['nome_distri'] = trim($_POST['nome']);
$_SESSION['cnpj']= trim($_POST['cnpj']);
$_SESSION['fantasia']= trim($_POST['fantasia']);
include "../conexao.php";
$comando = "select * from distribuidora where cnpj='$cnpj'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 8;
    header("location:../../distribuidor");
}else
{
    $comando = "insert into distribuidora(nome_distri,cnpj,nome_fantasia,status_distri) values ('$nome','$cnpj','$fantasia',1)";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../distribuidor");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../distribuidor");
    }
}
?>