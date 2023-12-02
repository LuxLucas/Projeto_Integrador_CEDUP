<?php
include "../conexao.php";
$id = $_POST['idCidade'];
$nome = trim($_POST['nomeCidade1']);
$estado = $_POST['estado1'];

$comando = "select * from cidade where nome_cidade='$nome' and cod_estado=$estado and id_cidade!=$id";
$pesquisa = mysqli_query($conexao,$comando);

if(mysqli_num_rows($pesquisa)>0)
{
    header("location:../../endereco");
}else
{
    $comando = "update cidade set nome_cidade='$nome',cod_estado=$estado where id_cidade=$id";
    mysqli_query($conexao,$comando);
    header("location:../../endereco");
}
?>