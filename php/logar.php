<?php
session_start();
$Email = $_POST['email'];
$Senha = $_POST['senha'];
 if(empty($Email) || empty($Senha))
 {
    header("location:../login.php");
 }
 include "conexao.php";
 $comando = "select * from usuario where email_usu = '$Email' and senha_usu= md5('$Senha')";
 $pesquisa = mysqli_query($conexao,$comando);
 $resultados = mysqli_num_rows($pesquisa);
 if($resultados>0)
 {
    $dados = mysqli_fetch_assoc($pesquisa);
    $_SESSION['id'] = $dados['id_usu'];
    $_SESSION['logado'] = TRUE;
    $_SESSION['tipo_usu'] = $dados['cod_tipo'];
    header("location:../index.php");
 }else{
   $_SESSION['erro'] = 1;
    header("location:../login.php");
 }
?>