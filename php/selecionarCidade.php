<?php
include "conexao.php";
$estado =$_POST['estado'];
$comando = "select * from cidade where cod_estado=$estado and status_cidade=1 order by nome_cidade";
$pesquisa = mysqli_query($conexao,$comando);
$retorno='<option value=0>Selecionar</option>';
while($dados = mysqli_fetch_array($pesquisa))
{

        $retorno=$retorno. "<option value='".$dados[0]."'>".$dados[1]."</option>";
}
echo $retorno;
?>