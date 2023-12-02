<?php
include "conexao.php";
$pais =$_POST['pais'];
$comando = "select * from estado where cod_pais=$pais and status_est=1 order by nome_est";
$pesquisa = mysqli_query($conexao,$comando);
$retorno='<option value=0>Selecionar</option>';
while($dados = mysqli_fetch_array($pesquisa))
{

        $retorno=$retorno. "<option value='".$dados[0]."'>".$dados[1]."</option>";
}
echo $retorno;
?>