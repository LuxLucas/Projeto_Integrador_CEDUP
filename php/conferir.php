<?php
session_start();
$codigo1 = $_SESSION['recuperar'];
$codigo2 = $_POST['codigo'];

if($codigo1==$codigo2)
{
    header("location:../redefinirSenha");
}else{
    header("location:../codigo_recuperar");
    $_SESSION['erro'] = 15;
}
?>