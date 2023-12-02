<?php
session_start();
$id = $_POST['id'];
$codigo = trim($_POST['codigo']);
$desconto = trim($_POST['desconto']);
include "../conexao.php";

    $comando = "update cupom set nome_cupom='$codigo',valor_desconto=$desconto where id_cupom=$id";
    if(mysqli_query($conexao, $comando)==true)
    {
    header("location:../../cupom");
    }else{
        $_SESSION['erro'] = 2;
        header("location:../../cupom");
    }

?>