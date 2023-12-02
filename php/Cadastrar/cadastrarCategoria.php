<?php
session_start();
$nome = trim($_POST['nome']);
$_SESSION['nome_categ'] = trim($_POST['nome']);
include "../conexao.php";
$comando = "select * from categoria where nome_categ='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 4;
    header("location:../../categoria");
}else
{
    $comando = "insert into categoria(nome_categ,status_categ) values ('$nome',1)";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../categoria");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../categoria");
    }
}
?>