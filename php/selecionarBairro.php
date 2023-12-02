<?php
include "conexao.php";
$cidade =$_POST['cidade'];
$comando = "select * from bairro where cod_cidade=$cidade and status_bairro=1 order by nome_bairro";
$pesquisa = mysqli_query($conexao,$comando);
$retorno='<option value=0>Selecionar</option>';
while($dados = mysqli_fetch_array($pesquisa))
{

        $retorno=$retorno. "<option value='".$dados[0]."'>".$dados[1]."</option>";
}
echo $retorno;
?>