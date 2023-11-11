<?php
session_start();
$nome = $_POST['nome'];
$sigla = $_POST['sigla'];
$pais = $_POST['pais'];
include "../conexao.php";
$comando = "select * from estado where nome_est='$nome' and cod_pais=$pais";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 9;
    header("location:../../estado.php");
}else
{
    $comando = "insert into estado(nome_est,sigla_est,cod_pais) values ('$nome','$sigla',$pais)";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../estado.php");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../estado.php");
    }
}
?>