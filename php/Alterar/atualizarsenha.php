<?php
session_start();
include "../conexao.php";
$novasenha = $_POST['senha'];
$email = $_SESSION['email_recuperar'];
$comando = "update usuario set senha_usu=md5('$novasenha') where email_usu='$email'";
mysqli_query($conexao,$comando);
header ("location:../../login");