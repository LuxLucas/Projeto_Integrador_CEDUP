<?php
function Pais()
{
    include "conexao.php";

    $comando = "select * from pais";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo "<option value=".$dados[0].">".$dados[1]."</option>";
    }
}

function Categoria()
{
    include "conexao.php";

    $comando = "select * from categoria";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo "<option value=".$dados[0].">".$dados[1]."</option>";
    }
}

function Distribuidora()
{
    include "conexao.php";

    $comando = "select * from distribuidora";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo "<option value=".$dados[0].">".$dados[1]."</option>";
    }
}
?>