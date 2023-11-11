<?php
session_start();
$id = $_SESSION['id'];
$municipio = $_POST['municipio'];
$est = $_POST['est'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$logradouro = $_POST['logradouro'];
$complemento = $_POST['complemento'];

include "../conexao.php";

$comando = "insert into endereco(cod_est,municipio_end,bairro_end,logradoro_end,complemento,cep_end,cod_usu)
values ($est,'$municipio','$bairro','$logradouro','$complemento','$cep',$id)";
mysqli_query($conexao,$comando);
$end = mysqli_insert_id($conexao);
echo"  <tr>
        <td>
        $end
        </td>
        <td>
        $cep
        </td>
        <td>
        $estado
        </td>
        <td>
        $municipio
        </td>
        <td>
        $bairro
        </td>
        <td>
        $logradouro
        </td>
        <td>
        $complemento
        </td>
        <td>
        <div class='form-check form-switch'>
            <input type='checkbox' class='form-check-input' role='switch' onclick='desativar(this)' name='selectEndereco' id='selectEndereco'>
        </div>
    </td>
  </tr>";
?>