<?php

/*$sql["host"]    = "www.cedup.net.br:33061";
$sql["usuario"] = "beautiful";
$sql["senha"]   = "Cafeinapreta";
$sql["base"]    = "beautiful_bd2";

//Na conexão deve ter a base de dados como 4° parâmentro
$conexao = mysqli_connect($sql["host"],$sql["usuario"],$sql["senha"],$sql["base"]);

//A conexão é agora o 1° parâmetro do mysqli_query
mysqli_query($conexao, "SET NAMES utf8");*/

$sql["host"]    = "localhost";
$sql["usuario"] = "root";
$sql["senha"]   = "";
$sql["banco"]   = "beautiful_bd2";

try{
    $conexao = mysqli_connect($sql["host"],$sql["usuario"],$sql["senha"],$sql["banco"]);
}catch(exception $erro){
    echo "Erro detectado: ".$erro -> getMessage();
}

?>