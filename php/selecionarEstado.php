<?php
$pais = $_POST['pais'];
$texto = "";
include "conexao.php";
$comando = "select a.id_est,a.sigla_est from estado as a join pais as b where a.cod_pais=$pais and a.cod_pais=b.id_pais";
$pesquisa = mysqli_query($conexao,$comando);
while($dados = mysqli_fetch_array($pesquisa))
{
$texto = $texto."<option value=".$dados[0].">".$dados[1]."</option>";
}
echo $texto;
?>