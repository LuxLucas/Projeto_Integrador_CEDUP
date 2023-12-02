<?php
include "conexao.php";
session_start();
$id=$_SESSION['id'];
$pais =$_POST['pais'];
   $comando=" SELECT e.id_logradouro,a.nome_est,c.nome_cidade,d.nome_bairro,e.nome_logradouro,e.complemento 
   from estado as a join pais as b join cidade as c join bairro as d join logradouro as e join usuario as f where
    a.cod_pais=b.id_pais and c.cod_estado=a.id_est and d.cod_cidade=c.id_cidade and
     e.cod_bairro=d.id_bairro and e.cod_usu=f.id_usu and b.id_pais=$pais and f.id_usu=$id";
     $pesquisa = mysqli_query($conexao,$comando);
     $imprimir='';
     while($dados = mysqli_fetch_array($pesquisa))
     {
       $imprimir=$imprimir."  <tr>
        <td>
            ".$dados[0]."
        </td>
        <td>
        ".$dados[1]."
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
     echo $imprimir;
     ?>