<?php
session_start();
include "../conexao.php"; 
include "../comandos.php";
$nome =         trim($_POST["nome"]);
$cpf =          trim($_POST["cpf"]);
$email =        trim($_POST["email"]);
$nascimento =   trim($_POST["nascimento"]);
$tele =         trim($_POST["telefone"]);
$senha =        trim($_POST["senha"]);
$tipo = $_SESSION['tipo'];
$_SESSION['nome_usu'] = trim($_POST["nome"]);
$_SESSION['cpf'] =  trim($_POST["cpf"]);
$_SESSION['email_cad'] =trim($_POST["email"]);
$_SESSION['nasc'] =  trim($_POST["nascimento"]);
$_SESSION['tele'] =  trim($_POST["telefone"]);

if(validaCPF($cpf)==false)
{
if($tipo==1)
{
    $_SESSION['erro'] = 11;
header("location:../../cadastro");
}else
{
    $_SESSION['erro'] = 11;
    header("location:../../funcionario");
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
    header("location:../../cadastro");
    }else
    {
        $_SESSION['erro'] = 11;
        header("location:../../funcionario");
    }
}else{
    $comando = "insert into usuario(email_usu,cod_tipo,senha_usu,status_usu) values ('$email',$tipo,md5('$senha'),1)";
    mysqli_query($conexao,$comando);

    $comando = "SELECT MAX(id_usu) FROM usuario";
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
    $id = $dados[0];

    if($tipo == 1){
        $comando = "INSERT INTO `cliente`( `nome_cliente`, `data_nasc`, `telefone`, `cpf_cliente`, `cod_usu`) VALUES ('$nome','$nascimento','$tele','$cpf',$id)";
        if(mysqli_query($conexao,$comando)==true)
        {
            $comando = "select MAX(id_usu) from usuario";
            $pesquisa = mysqli_query($conexao,$comando);
            $dados = mysqli_fetch_array($pesquisa);
            $id = $dados[0];
            $comando = "select * from usuario where id_usu=$id";
            $pesquisa = mysqli_query($conexao,$comando);
            $dados = mysqli_fetch_assoc($pesquisa);
            $_SESSION['id'] = $dados['id_usu'];
            $_SESSION['logado'] = TRUE;
            $_SESSION['tipo_usu'] = $dados['cod_tipo'];
            header("location:../../index");
        }else
        {
            $_SESSION['erro'] = 3;
            header("location:../../cadastro");
        }
    }else{
        $comando = "INSERT INTO `vendedor`( `nome_vendedor`, `cpf_vendedor`, `data_nasc`, `telefone`, `cod_usu`) VALUES ('$nome','$cpf','$nascimento','$tele',$id)";
        if(mysqli_query($conexao,$comando)==true)
        {
        header("location:../../funcionario");
        }else
        {
            $_SESSION['erro'] = 3;
            header("location:../../funcionario");
        }
    }
} 
} 
?>