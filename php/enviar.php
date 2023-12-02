<?php
include "email/Exception.php";
include "email/PHPMailer.php";
include "email/SMTP.php";
include "conexao.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$numero_de_bytes = 4;

$restultado_bytes = random_bytes($numero_de_bytes);
$resultado_final = bin2hex($restultado_bytes);
$email = new PHPMailer(true);
$destinatario = $_POST['email'];
$comando = "select * from usuario where email_usu='$destinatario'";
$pesquisa = mysqli_query($conexao,$comando);
$quant = mysqli_num_rows($pesquisa);
session_start();
if($quant > 0){
$_SESSION['recuperar'] = $resultado_final;
$_SESSION['email_recuperar'] = $destinatario;
try
{
 $email->isSMTP();
 $email->Host = 'smtp.gmail.com';
 $email->SMTPAuth = true;
 $email->Username = 'beautifulProject2@gmail.com';
 $email->Password = 'dkaj pvhm iohc dals';
 $email->Port = 587;

 $email->setFrom("beautifulProject2@gmail.com");
 $email->addAddress($destinatario);

 $email->isHTML(true);
 $email->Subject = "Recuperacao de conta";
 $email->Body = "Bom dia nossa equipe detectou um pedido de recuperar conta vindo do seu email o seu codigo é: $resultado_final";
 $email->AltBody = "meu nome é jhoni";
 if($email->send())
 {
    header("location:../codigo_recuperar");
 }else{
    echo"ixi";
 }
}catch (Exception $e)
{
    echo "$email->Username";
    echo "$email->Password";
    echo $email->ErrorInfo;
}
}else
{
   header("location:../recuperar.php");
   $_SESSION['erro'] = 14;
}
?>