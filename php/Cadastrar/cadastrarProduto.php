<?php
session_start();
$nome = trim($_POST['nome']);
$preco = trim($_POST['preco']);
$quantidade = trim($_POST['quantidade']);
$descricao = trim($_POST['descricao']);
$categoria = trim($_POST['categoria']);
$distribuidora = trim($_POST['distribuidora']);

$_SESSION['nome_prod'] = trim($_POST['nome']);
$_SESSION['preco_prod'] = trim($_POST['preco']);
$_SESSION['quant_prod'] = trim($_POST['quantidade']);
$_SESSION['descri_prod'] = trim($_POST['descricao']);

$imagem = $_FILES["photo"]["name"];
include "../conexao.php";
$comando = "select max(id_prod) from produto";
$pesquisa = mysqli_query($conexao,$comando);
$dados = mysqli_fetch_array($pesquisa);
$id = $dados[0]+1;
mkdir("../../view/imagem/$id",0755,true);
$caminho = "../../view/imagem/$id/". $_FILES['photo']['name'];
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$caminho)==true)
    {
    $comando = "insert into produto(nome_prod,preco_prod,quantidade_prod,descricao_prod,cod_distri,cod_categ,imagem,status_prod) values ('$nome',$preco,$quantidade,'$descricao',$distribuidora,$categoria,'$id/$imagem',1)";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../produto");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../produto");
    }
}else{
    $_SESSION['erro'] = 7;
        header("location:../../produto");
}

?>