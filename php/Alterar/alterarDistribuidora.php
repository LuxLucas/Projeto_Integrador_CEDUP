<?php
session_start();
$id = $_POST['id'];
$nome = trim($_POST['nome']);
$fantasia = trim($_POST['fantasia']);
include "../conexao.php";
    $comando = "update distribuidora set nome_distri='$nome',nome_fantasia='$fantasia' where id_distri=$id";
    if(mysqli_query($conexao, $comando)==true)
    {
    header("location:../../distribuidor");
    }else{
        $_SESSION['erro'] = 2;
        header("location:../../distribuidor");
    }
?>