<?php
function Pais()
{
    include "conexao.php";

    $comando = "select * from pais where status_pais=1 order by nome_pais ";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        if($dados[1]!='Brasil')
        {
        echo "<option value='".$dados[0]."'>".$dados[1]."</option>";
        }else
        {
            echo "<option selected value='".$dados[0]."'>".$dados[1]."</option>";  
        }
    }
}


function Estado()
{
    include "conexao.php";

    $comando = "select * from estado order by nome_est";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo "<option value='".$dados[0]."'>".$dados[1]."</option>";
    }
}


function Cidade()
{
    include "conexao.php";

    $comando = "select * from cidade order by nome_cidade";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo "<option value='".$dados[0]."'>".$dados[1]."</option>";
    }
}

function Categoria()
{
    include "conexao.php";

    $comando = "select * from categoria order by nome_categ";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo "<option value=".$dados[0].">".$dados[1]."</option>";
    }
}

function Distribuidora()
{
    include "conexao.php";

    $comando = "select * from distribuidora order by nome_distri";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo "<option value=".$dados[0].">".$dados[1]."</option>";
    }
}
?>