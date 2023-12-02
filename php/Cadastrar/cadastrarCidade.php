<?php
include "../conexao.php";
$nome = trim($_POST['nomeCidade']);
$estado = $_POST['estado'];

$comando = "select * from cidade where nome_cidade='$nome' and cod_estado=$estado";
$pesquisa = mysqli_query($conexao,$comando);

if(mysqli_num_rows($pesquisa)>0)
{
    header("location:../../endereco");
}else
{
    $comando = "insert into cidade(nome_cidade,cod_estado,status_cidade) values ('$nome',$estado,1)";
    mysqli_query($conexao,$comando);
    header("location:../../endereco");
}
?>