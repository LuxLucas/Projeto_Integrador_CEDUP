<?php
session_start();
include "conexao.php"; 
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$tele = $_POST["telefone"];
$senha = $_POST["senha"];
$tipo = $_SESSION["tipo"];

$comando = "select * from usuario where email_usu='$email'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados1 = mysqli_num_rows($pesquisa);
if($tipo==1){
$comando = "select * from cliente where cpf_cliente='$cpf'";
}else{
    $comando = "select * from vendedor where cpf_vendedor='$cpf'";
}
$pesquisa = mysqli_query($conexao,$comando);
$resultados2 = mysqli_num_rows($pesquisa);
echo"$resultados2";
if($resultados1<>0 || $resultados2<>0)
{
    header("location:../index.php");
}else{
    $comando = "insert into usuario(email_usu,cod_tipo,senha_usu) values ('$email',$tipo,md5('$senha'))";
    mysqli_query($conexao,$comando);

    $comando = "SELECT MAX(ID) FROM usuario";
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
    $id = $dados["id_usu"];

    if($tipo==1)
    {
        $comando = "INSERT INTO `cliente`( `nome_cliente`, `data_nasc`, `telefone`, `cpf_cliente`, `cod_usu`) VALUES ('$nome',$nascimento,'$tele','$cpf',$id)";
    }else{
        $comando = "INSERT INTO `vendedor`( `nome_vendedor`, `cpf_vendedor`, `data_nasc`, `telefone`, `cod_usu`) VALUES ('$nome','$cpf',$nascimento,'$tele',$id)";
    }
    mysqli_query($conexao,$comando);
    header("location:../index.php");
}
?>