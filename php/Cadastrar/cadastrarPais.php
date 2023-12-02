<?php
include "../conexao.php";
$nome = trim($_POST["nomePais"]);
$comando = "select * from pais where nome_pais='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
if(mysqli_num_rows($pesquisa)==0)
{
$comando = "insert into Pais(nome_pais,status_pais) values ('$nome',1)";
mysqli_query($conexao,$comando);
header("location:../../endereco");
}else{
    header("location:../../endereco");
}
?>