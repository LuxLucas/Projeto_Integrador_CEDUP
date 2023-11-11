<?php
session_start();
$nome = $_POST['nome'];
include "../conexao.php";
$comando = "select * from pais where nome_pais='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 6;
    header("location:../../pais.php");
}else
{
    $comando = "insert into pais(nome_pais) values ('$nome')";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../pais.php");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../pais.php");
    }
}
?>