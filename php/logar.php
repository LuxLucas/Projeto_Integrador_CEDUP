<?php
session_start();
$Email = $_POST['email'];
$Senha = $_POST['senha'];
$_SESSION['email'] = $Email;
 if(empty($Email) || empty($Senha))
 {
    header("location:../login");
 }
 include "conexao.php";
 $comando = "select * from usuario where email_usu = '$Email' and senha_usu= md5('$Senha') and status_usu=1";
 $pesquisa = mysqli_query($conexao,$comando);
 $resultados = mysqli_num_rows($pesquisa);
 if($resultados>0)
 {
    $dados = mysqli_fetch_assoc($pesquisa);
    $_SESSION['id'] = $dados['id_usu'];
    $_SESSION['logado'] = TRUE;
    $_SESSION['tipo_usu'] = $dados['cod_tipo'];
    header("location:../index");
 }else{
   $_SESSION['erro'] = 1;
    header("location:../login");
 }
?>