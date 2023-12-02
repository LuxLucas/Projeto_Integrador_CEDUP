<?php
include "../conexao.php";
$id = $_POST['idEstado'];
$nome = trim($_POST['nomeEstado1']);
$pais = $_POST['pais1'];
$sigla = trim($_POST['Sigla1']);

$comando = "select * from estado where nome_est='$nome' and cod_pais=$pais and id_est!=$id";
$pesquisa = mysqli_query($conexao,$comando);

if(mysqli_num_rows($pesquisa)>0)
{
    header("location:../../endereco");
}else
{
    $comando = "update estado set nome_est='$nome',sigla_est='$sigla',cod_pais=$pais where id_est=$id";
    mysqli_query($conexao,$comando);
    header("location:../../endereco");
}
?>