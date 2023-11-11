<?php
session_start();
$usu = $_SESSION['id'];
$pais = $_POST['pais'];
$texto = "";
include "conexao.php";
    $comando = "select a.id_end,b.sigla_est,a.municipio_end,a.bairro_end,a.logradoro_end,a.complemento,a.cep_end
    from endereco as a join estado as b join pais as c where
    a.cod_est=b.id_est and b.cod_pais=c.id_pais and c.id_pais=$pais and a.cod_usu=$usu";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
      $texto =$texto."  <tr>
        <td>
            ".$dados[0]."
        </td>
        <td>
        ".$dados[1]."
        </td>
        <td>
        ".$dados[6]."
        </td>
        <td>
        ".$dados[2]."
        </td>
        <td>
        ".$dados[3]."
        </td>
        <td>
        ".$dados[4]."
        </td>
        <td>
        ".$dados[5]."
        </td>
        <td>
        <div class='form-check form-switch'>
            <input type='checkbox' onclick='desativar(this)' class='form-check-input' role='switch' name='selectEndereco' id='selectEndereco'>
        </div>
    </td>
  </tr>";
    }
    echo $texto; 
?>