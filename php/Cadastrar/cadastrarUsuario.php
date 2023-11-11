<?php
session_start();
include "../conexao.php"; 
include "../comandos.php";
$nome =         $_POST["nome"];
$cpf =          $_POST["cpf"];
$email =        $_POST["email"];
$nascimento =   $_POST["nascimento"];
$tele =         $_POST["telefone"];
$senha =        $_POST["senha"];
$tipo =         $_SESSION["tipo"];

if(validaCPF($cpf)==false)
{
if($tipo==1)
{
    $_SESSION['erro'] = 11;
header("location:../../cadastro.php");
}else
{
    $_SESSION['erro'] = 11;
    header("location:../../funcionario.php");
}
}else{
$comando =  "select * from usuario where email_usu='$email'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados1 = mysqli_num_rows($pesquisa);

if($tipo == 1){
    $comando = "select * from cliente where cpf_cliente='$cpf'";
}else{
    $comando = "select * from vendedor where cpf_vendedor='$cpf'";
}

$pesquisa = mysqli_query($conexao,$comando);
$resultados2 = mysqli_num_rows($pesquisa);

if(($resultados1<>0) || ($resultados2<>0)){
    if($tipo==1)
    {
        $_SESSION['erro'] = 11;
    header("location:../../cadastro.php");
    }else
    {
        $_SESSION['erro'] = 11;
        header("location:../../funcionario.php");
    }
}else{
    $comando = "insert into usuario(email_usu,cod_tipo,senha_usu) values ('$email',$tipo,md5('$senha'))";
    mysqli_query($conexao,$comando);

    $comando = "SELECT MAX(id_usu) FROM usuario";
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
    $id = $dados[0];

    if($tipo == 1){
        $comando = "INSERT INTO `cliente`( `nome_cliente`, `data_nasc`, `telefone`, `cpf_cliente`, `cod_usu`) VALUES ('$nome','$nascimento','$tele','$cpf',$id)";
        if(mysqli_query($conexao,$comando)==true)
        {
        header("location:../../cadastro.php");
        }else
        {
            $_SESSION['erro'] = 3;
            header("location:../../cadastro.php");
        }
    }else{
        $comando = "INSERT INTO `vendedor`( `nome_vendedor`, `cpf_vendedor`, `data_nasc`, `telefone`, `cod_usu`) VALUES ('$nome','$cpf','$nascimento','$tele',$id)";
        if(mysqli_query($conexao,$comando)==true)
        {
        header("location:../../funcionario.php");
        }else
        {
            $_SESSION['erro'] = 3;
            header("location:../../funcionario.php");
        }
    }
} 
} 
?>