<?php
session_start();
$id = $_POST['idPais'];
$nome = trim($_POST['nomePais1']);
include "../conexao.php";
$comando = "select * from pais where nome_pais='$nome' and id_pais!=$id";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
    $_SESSION['erro'] = 8;
    header("location:../../endereco");
}else
{
    $comando = "update pais set nome_pais='$nome' where id_pais=$id";
    if(mysqli_query($conexao, $comando)==true)
    {
    header("location:../../endereco");
    }else{
        $_SESSION['erro'] = 2;
        header("location:../../endereco");
    }
}
?>