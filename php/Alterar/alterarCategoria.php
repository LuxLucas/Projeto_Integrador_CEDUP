<?php
session_start();
$id = $_POST['id'];
$nome = trim($_POST['nome']);

include "../conexao.php";

$comando = "select * from categoria where nome_categ='$nome'";
$pesquisa = mysqli_query($conexao, $comando);
$resultados = mysqli_num_rows($pesquisa);

if($resultados > 0){
    header("location:../../categoria");
    $_SESSION['erro'] = 4;
}else{
    $comando = "update categoria set nome_categ='$nome' where id_categ=$id";
    if(mysqli_query($conexao, $comando)==true)
    {
    header("location:../../categoria");
    }else{
        $_SESSION['erro'] = 2;
        header("location:../../categoria");
    }
}
?>