<?php
include "../conexao.php";
$id = trim($_POST['idBairro']);
$nome = trim($_POST['nomeBairro1']);
$cidade = $_POST['cidade1'];

$comando = "select * from bairro where nome_bairro='$nome' and cod_cidade=$cidade and id_bairro!=$id";
$pesquisa = mysqli_query($conexao, $comando);

if (mysqli_num_rows($pesquisa) > 0) {
    header("location:../../endereco");
} else {
    $comando = "update bairro set nome_bairro='$nome',cod_cidade=$cidade where id_bairro=$id";
    mysqli_query($conexao, $comando);
    header("location:../../endereco");
}
