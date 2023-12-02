<?php
session_start();
include "../conexao.php";
$nome = trim($_POST['nomePerfil']);
$telefone = trim($_POST['telefonePerfil']);
$tipo = $_SESSION['tipo_usu'];
$id = $_SESSION['id'];
if($tipo==1)
{
    $comando = "update cliente set nome_cliente='$nome',telefone='$telefone' where id_cliente=$id";
}else
{
    $comando = "update vendedor set nome_vendedor='$nome',telefone='$telefone' where id_vendedor=$id";
}
mysqli_query($conexao,$comando);
header("location:../../perfil");
?>