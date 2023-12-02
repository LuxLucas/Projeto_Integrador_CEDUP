<?php
include "../conexao.php";
$nome = trim($_POST['nomeEstado']);
$pais = $_POST['pais'];
$sigla = trim($_POST['Sigla']);

$comando = "select * from estado where nome_est='$nome' and cod_pais=$pais";
$pesquisa = mysqli_query($conexao,$comando);

if(mysqli_num_rows($pesquisa)>0)
{
    header("location:../../endereco");
}else
{
    $comando = "insert into estado(nome_est,sigla_est,cod_pais,status_est) values ('$nome','$sigla',$pais,1)";
    mysqli_query($conexao,$comando);
    header("location:../../endereco");
}
?>