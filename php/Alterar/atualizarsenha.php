<?php
$novasenha = $_POST['senha'];
$email = $_SESSION['email_recuperar'];
include "conexao.php";
$comando = "update usuario set senha_usu=md5('$senha') where email_usu='$email'";
mysqli_query($conexao,$comando);
header("location:../../index.php");