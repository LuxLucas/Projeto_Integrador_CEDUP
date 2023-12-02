<?php
session_start();
$id = $_POST['id'];
$nome = trim($_POST['nome']);
$preco = trim($_POST['preco']);
$quantidade = trim($_POST['quantidade']);
$descricao = trim($_POST['descricao']);
$categoria = $_POST['categoria'];
$distribuidora = $_POST['distribuidora'];
$imagem = $_FILES["photo"]["name"];


include "../conexao.php";
if($imagem!=null)
{
$caminho = "../../view/imagem/". $_FILES['photo']['name'];
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$caminho)==true)
    {

    $comando = "update produto set
    nome_prod='$nome',preco_prod=$preco,quantidade_prod=$quantidade,descricao_prod='$descricao',
    cod_distri=$distribuidora,cod_categ=$categoria,imagem='$imagem' where id_prod=$id";
    }else{
        $_SESSION['erro'] = 7;
        header("location:../../produto");
    }
}else
{
    $comando = "update produto set
    nome_prod='$nome',preco_prod=$preco,quantidade_prod=$quantidade,descricao_prod='$descricao',
    cod_distri=$distribuidora,cod_categ=$categoria where id_prod=$id";
}
if(mysqli_query($conexao, $comando)==true)
{
header("location:../../produto");
}else{
    $_SESSION['erro'] = 2;
    header("location:../../produto");
}
?>
