<?php
session_start();
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$distribuidora = $_POST['distribuidora'];
$imagem = $_FILES["photo"]["name"];

$caminho = "../../view/imagem/". $_FILES['photo']['name'];

include "../conexao.php";

    if(move_uploaded_file($_FILES['photo']['tmp_name'],$caminho)==true)
    {
    $comando = "insert into produto(nome_prod,preco_prod,quantidade_prod,descricao_prod,cod_distri,cod_categ,imagem) values ('$nome',$preco,$quantidade,'$descricao',$distribuidora,$categoria,'$imagem')";
    if(mysqli_query($conexao,$comando)==true)
    {
    header("location:../../produto.php");
    }else
    {
        $_SESSION['erro'] = 3;
        header("location:../../produto.php");
    }
}else{
    $_SESSION['erro'] = 7;
        header("location:../../produto.php");
}

?>