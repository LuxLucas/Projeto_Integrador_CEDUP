<?php
session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$fantasia = $_POST['fantasia'];
include "../conexao.php";
    $comando = "update distribuidora set nome_distri='$nome',nome_fantasia='$fantasia' where id_distri=$id";
    if(mysqli_query($conexao, $comando)==true)
    {
    header("location:../../distribuidor.php");
    }else{
        $_SESSION['erro'] = 2;
        header("location:../../distribuidor.php");
    }
?>