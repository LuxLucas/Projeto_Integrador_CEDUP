<?php

function BuscarEndereco(){
    include "conexao.php";

    $comando = "SELECT `id_end`, estado.`sigla_est`, `cep_end`, `municipio_end`, `bairro_end`, `logradoro_end`, `complemento` FROM `endereco` join estado where estado.id_est = endereco.cod_est";

    $pesquisa = mysqli_query($conexao,$comando);
    while($dados= mysqli_fetch_array($pesquisa)){
        echo"
        <tr>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td>".$dados[2]."</td>
            <td>".$dados[3]."</td>
            <td>".$dados[4]."</td>
            <td>".$dados[5]."</td>
            <td>".$dados[6]."</td>
            <td>
            <div>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
            </div>
            </td>
        </tr>";
    }
}

function BuscarFuncionario(){
    include "conexao.php";
    $id = $_SESSION['id'];
    $comando = "SELECT a.*,b.status_usu FROM vendedor as a join usuario as b
    where a.cod_usu=b.id_usu and b.id_usu!=$id";
    
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-iden={$dados[5]}>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td><p class='m-0'>".$dados[2]."</td>
            <td><p class='m-0'>".$dados[3]."</td>
            <td><p class='m-0'>".$dados[4]."</td>
            <td>
            <div cLASS='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarVendedor(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[6]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo2(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativar'  onclick='ativando2(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }echo"
            </div>
            </td>
        </tr>";
    }
}

function BuscarCategoria()
{
    include "conexao.php";

    $comando = "select * from categoria";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td>
            <div class='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarCategoria(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[2]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativar'  onclick='ativando(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }echo"
            </div>
            </td>
        </tr>";
    }
}


function BuscarCupom()
{
    include "conexao.php";

    $comando = "select * from cupom";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td>".$dados[2]."</td>
            <td>
            <div class='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarCupom(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[3]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativar'  onclick='ativando(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }echo"
            </div>
            </td>
        </tr>";
    }
}

function BuscarPais()
{
    include "conexao.php";

    $comando = "select * from pais";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td>
            <div class='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltPais' onclick='alterarPais(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[2]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluirPais'  onclick='excluindo1(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativarPais'  onclick='ativar1(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }
            echo"</div>
            </td>
        </tr>";
    }
}
function BuscarCidade()
{
    include "conexao.php";

    $comando = "select a.id_cidade,a.nome_cidade,b.nome_est,a.status_cidade,a.cod_estado from cidade as a join estado as b
    where a.cod_estado=b.id_est";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-iden={$dados[4]}>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td>".$dados[2]."</td>
            <td>
            <div class='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltMunicipio' onclick='alterarCidade(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[3]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluirCidade'  onclick='excluindo3(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativarCidade'  onclick='ativar3(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }echo"
            </div>
            </td>
        </tr>";
    }
}
function BuscarBairro()
{
    include "conexao.php";

    $comando = "select a.id_bairro,a.nome_bairro,b.nome_cidade,a.status_bairro,a.cod_cidade from bairro as a join cidade as b
    where a.cod_cidade=b.id_cidade";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-iden={$dados[4]}>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td>".$dados[2]."</td>
            <td>
            <div class='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltBairro' onclick='alterarBairro(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[3]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluirBairro'  onclick='excluindo4(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativarBairro'  onclick='ativar4(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }echo"
            </div>
            </td>
        </tr>";
    }
}
function BuscarEstado()
{
    include "conexao.php";

    $comando = "select e.id_est, e.nome_est, e.sigla_est, p.nome_pais,p.id_pais,e.status_est from estado as e join pais as p where p.id_pais = e.cod_pais;";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-id='".$dados[4]."'>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td>".$dados[2]."</td>
            <td>".$dados[3]."</td>
            <td>
            <div class='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltEstado' onclick='alterarEstado(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[5]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluirEstado'  onclick='excluindo2(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativarEstado'  onclick='ativar2(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }echo"
            </div>
            </td>
        </tr>";
    }
}

function BuscarProduto()
{
    include "conexao.php"; 

    $comando = "select a.id_prod,a.imagem,a.nome_prod,a.preco_prod,a.quantidade_prod,b.nome_distri,c.nome_categ,b.id_distri,c.id_categ,a.descricao_prod,a.status_prod
     from produto as a join distribuidora as b join categoria as c on a.cod_distri=b.id_distri and a.cod_categ=c.id_categ;";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-distri=".$dados[7]." data-categ=".$dados[8].">
            <td><div class='divTd-100'><p>".$dados[0]."</p></div></td>
            <td><img class='img-fluid' src='view/imagem/".$dados[1]."' alt='Imagem Produto'></td>
            <td><div class='divTd-100'><p class='m-0 text-truncate-2l'>".$dados[2]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0'>".$dados[3]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0'>".$dados[4]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0'>".$dados[5]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0 text-truncate-1l'>".$dados[6]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0 text-truncate-2l'>".$dados[9]."</p></div></td>
            <td>
            <div class='divTd-100 justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[10]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativar'  onclick='ativando(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }echo"
            </div>
            </td>
        </tr>";
    }
}

function BuscarDistribuidor()
{
    include "conexao.php";

    $comando = "select * from distribuidora";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td>".$dados[2]."</td>
            <td>".$dados[3]."</td>
            <td>
            <div class='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarDistribuidora(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>";
            if($dados[4]==1)
            {
                echo"<button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Desativar <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>";}else
            {
                echo"<button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#ativar'  onclick='ativando(this)'><p class='my-auto me-1'>Reativar<i class='ms-1 bi bi-trash3-fill' ></i></p>
                </button>";
            }echo"
            </div>
            </td>
        </tr>";
    }
}

function pesquisando($e,$f,$g,$h)
{
include "conexao.php";
if(isset($_GET['pagina']))
{
    $pagina = $_GET['pagina'];
}else
{
    $pagina = 1;
}


$limite = 9;
if($h==0)
{
  $filtropreco = '';
}else if($h==1) 
{
  $filtropreco = 'and a.preco_prod<=25';
}else if($h==2) 
{
  $filtropreco = 'and a.preco_prod<=50';
}else if($h==3) 
{
  $filtropreco = 'and a.preco_prod<=75';
}else
{
  $filtropreco = 'and a.preco_prod<=100';
}
if($f==0 && $g!=0)
{
    $filtrado = "from
    produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%' and
    a.cod_distri=$g and a.status_prod=1 ".$filtropreco;
}else if($g==0 && $f!=0)
{
    $filtrado = "from
    produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%' and
    a.cod_categ=$f and a.status_prod=1 ".$filtropreco;
    
}else if($g!=0 and $f!=0)
{
    $filtrado = "from
    produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%' and
    a.cod_categ=$f and a.cod_distri=$g and a.status_prod=1 ".$filtropreco;
}else if($g==0 and $f==0)
{
    $filtrado = "from
    produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%' and a.status_prod=1 ".$filtropreco;
}
$comando = "select a.* ".$filtrado;
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
$inicio = ($limite*$pagina)-$limite;
$quantPaginas = ceil($resultados/$limite);
if(!isset($_SESSION['filtro']) || $_SESSION['filtro']==0 )
{ 
$comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod $filtrado
  order by a.nome_prod  limit $inicio,$limite";
}else if($_SESSION['filtro']==1)
{
    $comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod $filtrado
  order by a.preco_prod  limit $inicio,$limite";
}else
{
    $comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod $filtrado
  order by a.preco_prod desc limit $inicio,$limite";
}
$pesquisa = mysqli_query($conexao,$comando);
while($dados = mysqli_fetch_array($pesquisa))
{
  echo "<div class='col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
    <div class='card text-center'>";
    ProdFavorito($dados[4]);
    echo"
  <a href='view_produto?id=".$dados[4]."'>
       <img src='view/imagem/".$dados[0]."' alt='Produto' class='card-img-top'>
       </a>
       <div id='preco' class='card-header'>
         <strong>R$ ".$dados[3]."</strong>
       </div>
       <div class='card-body'>
           <p class='fs-5 card-title text-truncate-2l'>".$dados[2]."</p>
           <p class='card-text text-truncate-3l'>".$dados[5]."</p>
       </div>
       <a href='view_produto?id={$dados[4]}' class='text-black'>
       <div class='card-footer'>
           <button type='button' class='btn btn-primary'>
               <strong>ADQUIRA AGORA</strong>
           </button>
       </div>
   </div>
   </a>
</div>";
}
echo"</div>";
if($f==0 && $g==0)
    {
    $comando = "select count(*) from
    produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%' and a.status_prod=1 ".$filtropreco;
    }else if($f!=0 && $g==0)
    {
        $comando = "select count(*) from
        produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
         and a.status_prod=1 and a.cod_categ=$f ".$filtropreco;   
    }else if($f==0 && $g!=0)
    {
        $comando = "select count(*) from
        produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
         and a.status_prod=1 and a.cod_distri=$g ".$filtropreco;   
    }else{
        $comando = "select count(*) from
        produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
         and a.status_prod=1 and a.cod_distri=$g and a.cod_categ=$f ".$filtropreco;   
    }
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
    if($dados[0]>$limite)
    {
$anterior = $pagina-1;
$proximo = $pagina+1;
echo "  <div class='col-12'>
<nav aria-label='Paginação'>
    <ul class='pagination justify-content-center'>";
    if($anterior>0)
{
 echo"       <li class='page-item'>
            <a class='page-link' href='pesquisa?pesquisa=$e&pagina=$anterior'>Anterior</a>
        </li>
";
}
for($i=1;$i<=$quantPaginas;$i++)
{
      echo"  <li class='page-item'><a class='page-link' href='pesquisa?pesquisa=$e&pagina=$i'>$i</a></li>";
}
     echo"   <li class='page-item'>
            <a class='page-link' href='pesquisa?pesquisa=$e&pagina=$proximo'>Próximo</a>
        </li>
    </ul>
</nav>
</div>
</div>";
    }
}

function ContarPesquisa($e,$f,$g,$h)
{
    include "conexao.php";
    if($h==0)
{
  $filtropreco = '';
}else if($h==1) 
{
  $filtropreco = ' and a.preco_prod<=25';
}else if($h==2) 
{
  $filtropreco = ' and a.preco_prod<=50';
}else if($h==3) 
{
  $filtropreco = ' and a.preco_prod<=75';
}else
{
  $filtropreco = ' and a.preco_prod<=100';
}
    if($f==0 && $g==0)
    {
    $comando = "select count(*) from
    produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%' and a.status_prod=1".$filtropreco;
    }else if($f!=0 && $g==0)
    {
        $comando = "select count(*) from
        produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
         and a.status_prod=1 and a.cod_categ=$f".$filtropreco;   
    }else if($f==0 && $g!=0)
    {
        $comando = "select count(*) from
        produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
         and a.status_prod=1 and a.cod_distri=$g".$filtropreco;   
    }else{
        $comando = "select count(*) from
        produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
         and a.status_prod=1 and a.cod_distri=$g and a.cod_categ=$f".$filtropreco;   
    }
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
echo"<p class='my-auto'>Produtos: <span id='qtdPesquisa'><strong>{$dados[0]}</strong></span></p>";}
function ContarFavoritos($id)
{
    include "conexao.php";
    $comando = "select count(*) from produto as a join favoritos as b join usuario as c where a.id_prod=b.cod_prod and c.id_usu=b.cod_usu and c.id_usu=$id";
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
    echo " <div class='d-flex d-flex justify-content-center justify-content-md-start'>
    <h1 class='title m-0 fs-2 mb-3 m-lg-0'>Seus favoritos ({$dados[0]})</h1>
</div>";
}
function favoritos($id)
{
include "conexao.php";
if(isset($_GET['pagina']))
{
    $pagina = $_GET['pagina'];
}else
{
    $pagina = 1;
}

$comando = "select * from produto as a join favoritos as b join usuario as c
  where a.id_prod=b.cod_prod and c.id_usu=b.cod_usu and c.id_usu=$id";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);
if($resultados>0)
{
$limite = 20;

$quantPaginas = ceil($resultados/$limite);

$inicio = ($limite*$pagina)-$limite;

if(!isset($_SESSION['filtro']) || $_SESSION['filtro']==0 )
{ 
$comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod from produto
as a join distribuidora as b join favoritos as c where a.cod_distri=b.id_distri and c.cod_prod=a.id_prod and c.cod_usu=$id
  order by a.nome_prod  limit $inicio,$limite";
}else if($_SESSION['filtro']==1)
{
    $comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod  from produto
    as a join distribuidora as b join favoritos as c where a.cod_distri=b.id_distri and c.cod_prod=a.id_prod and c.cod_usu=$id
  order by a.preco_prod  limit $inicio,$limite";
}else
{
    $comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod  from produto
    as a join distribuidora as b join favoritos as c where a.cod_distri=b.id_distri and c.cod_prod=a.id_prod and c.cod_usu=$id
  order by a.preco_prod desc limit $inicio,$limite";
}
$pesquisa = mysqli_query($conexao,$comando);
echo" <div class='row row-cols-md-3 row-cols-lg-4 g-3'>";
while($dados = mysqli_fetch_array($pesquisa))
{
   echo"           <div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
   <div class='card text-center'>
   <button type='submit' id='btnFavorito' class='btn corazonInativo shadow-sm position-absolute right-0 p-2' data-status=1  data-iden=$id style='color:red'>
   <a href='php/Excluir/excluirFavorito2?id=".$dados[4]."' class='favorito'>
    <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
    </a>
   </button>
   <a href='view_produto?id=".$dados[4]."'>
       <img src='view/imagem/".$dados[0]."' alt='Produto' class='card-img-top'>
       </a>
       <div id='preco' class='card-header'>
            <strong class='fs-5'>R$ ".$dados[3]." </strong>
       </div>
       <div class='card-body'>
           <p class='fs-5 card-title text-truncate-2l'>".$dados[2]."</p>
           <p class='card-text text-truncate-3l'>".$dados[5]."</p>
       </div>
       <a href='view_produto?id={$dados[4]}' class='text-black'>
       <div class='card-footer'>
           <button type='button' class='btn btn-primary'>
               <strong>ADQUIRA AGORA</strong>
           </button>
       </div>
   </div>
   </a>
</div>";
}
echo"</div>";
$anterior = $pagina-1;
$proximo = $pagina+1;
echo "  <div class='col-12'>
<nav aria-label='Paginação'>
    <ul class='pagination justify-content-center'>";
    if($anterior>0)
{
 echo"       <li class='page-item'>
            <span class='page-link' href='favorito?id=$id&pagina=$anterior'>Anterior</span>
        </li>
";
for($i=1;$i<=$quantPaginas;$i++)
{
      echo"  <li class='page-item'><a class='page-link' href='favorito?id=$id&pagina=$pagina'>$i</a></li>";
}
     echo"   <li class='page-item'>
            <a class='page-link' href='favorito?id=$id&pagina=$proximo'>Próximo</a>
        </li>
    </ul>
</nav>
</div>
</div>
</div>";
}
}else
{
  echo"  <div class='container pt-3 pb-5'>
      <h1 class='title'>Sem produtos favoritados ?</h1>
      <p class='title fs-4'>Sem problema, é só <a href='index' class='text-primary text-decoration-underline'><strong>se aventurar</strong></a> pelo site &#x1F60D;</p>
    </div>
    </div>
    <div class='mt-5 mb-3 d-flex justify-content-center'>
      <h2 class='title fs-3'>Já olhou esses ?</h2>
    </div>
          <div class='row row-cols-lg-4 row-cols-md-3 g-3'>";
          recem_adicionados();
          echo" </div>
          </div>";
}
}

function InformacoesProduto($e)
{
    include("conexao.php");

    $comando = "select a.nome_prod,a.preco_prod,b.nome_distri,c.nome_categ,a.imagem,a.descricao_prod,a.quantidade_prod from produto as a join distribuidora as b join categoria as c
    where a.cod_distri=b.id_distri and a.cod_categ=c.id_categ and a.id_prod=$e";
    return mysqli_query($conexao,$comando);
}

function ChecarFavorito($e)
{
    $prod = $e;
    if(isset($_SESSION['id']))
    {
    $usu = $_SESSION['id'];
    }else{
        $usu=0;
    }
    include "conexao.php";

    $comando = "select * from favoritos where cod_prod=$prod and cod_usu=$usu";

    $pesquisa = mysqli_query($conexao,$comando);

    $resultados = mysqli_num_rows($pesquisa);
    if($resultados == 0)
    {
        //bi bi-bookmark-heart-fill favoritoInSelect
        echo"<button type='button' id='btnFavorito' class='btn corazonInativo shadow-sm'>
        <p class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
        </button data-iden='.$prod.'>";
    }else{
        //bi bi-bookmark-heart-fill favoritoSelect
        echo"<button type='button' id='btnFavorito' class='btn corazonAtivo shadow-sm'>
        <p class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
        </button data-ide,='.$prod.'>";
    }
}
function BuscarPedido($e)
{
    include "conexao.php";
    $comando = "select a.imagem,a.nome_prod,a.preco_prod,b.nome_categ,c.quantidade_vendida,c.preco_total,c.id_itens,c.cod_venda
    from produto as a join categoria as b join itens_venda as c join vendas as d
    where a.cod_categ=b.id_categ and c.cod_prod=a.id_prod and c.cod_venda=d.id_venda  and d.id_venda=$e";
    $pesquisa = mysqli_query($conexao,$comando);
    echo"    <div class='col-lg-9 table-responsive'>
    <table class='table table-striped px-0 border'>
            <thead>
              <th>PRODUTO</th>
              <TH>PREÇO</TH>
              <th>QUANTIDADE</th>
              <th>TOTAL</th>
            </thead>
            <tbody>";
            while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-iden={$dados[6]}>
        <td class=''>
          <div class='d-flex align-items-center'>
            <div class='d-inline-block divImage'>
              <img src='view/imagem/{$dados[0]}' height='90px' width='90px''class='img-fluid pe-2' alt='Imagem do Produto'>
            </div>
            <div>
              <p class='mt-1 mb-1 text-truncate-2l'><strong>{$dados[1]}</strong></p>
              <p class='mb-1 text-truncate-1l'>{$dados[3]}</p>
            </div>
          </div>
        </td>
        <td>
          <div class='align-items-center d-flex divTd-100'>
            <p class='m-0'>R$ <span id='uniPreco'>{$dados[2]}</span></p>
          </div>
        </td>
        <td>
          <div class='align-items-center d-flex divTd-100 qtdBagBuy'>
              <p class='m-0 px-1'>{$dados[4]}</p>
            </div>
          </div>
        </td>
        <td>
        <div class='align-items-center d-flex divTd-100'>
            <p class='m-0'>R$ <span id='uniPreco'>{$dados[5]}</span></p>
          </div>
        </td>
      </tr>
       ";
    }
    echo"
    </tbody> 
    </table>
    </div>";
    InformacoesVenda3($e);
}
function EnderecoCompra($e)
{
    include "conexao.php";
    $comando="SELECT b.nome_pais,a.nome_est,c.nome_cidade,d.nome_bairro,e.nome_logradouro,e.complemento 
   from estado as a join pais as b join cidade as c join bairro as d join logradouro as e join usuario as f join vendas as g where
    a.cod_pais=b.id_pais and c.cod_estado=a.id_est and d.cod_cidade=c.id_cidade and
     e.cod_bairro=d.id_bairro and e.cod_usu=f.id_usu and  g.cod_usu=f.id_usu and g.cod_end=e.id_logradouro and g.id_venda=$e";
     $pesquisa = mysqli_query($conexao,$comando);
     $dados = mysqli_fetch_array($pesquisa);
   echo" <div class='row p-3 border bg-white rounded-2 my-2'>
                <div class='col-sm-12 col-lg-3'>
                  <div class='mb-3'>
                    <label for='nomeProduto' class='form-label'>Pais</label>
                    <input type='text' class='form-control' value='{$dados[0]}' disabled name='pais' id='pais' placeholder='pais'>
                  </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-3'>
                  <div class='mb-3'>
                    <label for='cpf' class='form-label'>Estado</label>
                    <input type='text'  class='form-control' value='{$dados[1]}' disabled name='estado' id='estado' placeholder='estado'>
                  </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                  <div class='mb-3'>
                    <label for='cidade' class='form-label'>Cidade</label>
                    <input type='text' class='form-control' value='{$dados[2]}' disabled name='cidade' id='cidade' placeholder='Cidade'>
                  </div>
                </div>
                <div class='col-12 col-lg-3'>
                  <div class='mb-3'>
                    <label for='text' class='form-label'>Bairro</label>
                    <input type='text' class='form-control' value='{$dados[3]}'  disabled id='bairro' placeholder='bairro'>
                  </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                  <div class='mb-3'>
                    <label for='tele' class='form-label'>Logradouro</label>
                    <input type='text' class='form-control' value='{$dados[4]}' disabled name='logradouro' id='logradouro' placeholder='logradouro'>
                  </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                  <div class='mb-3'>
                    <label for='tele' class='form-label'>Complemento</label>
                    <input type='text' class='form-control' value='{$dados[5]}' disabled name='complemento' id='complemento' placeholder='complemento'>
                  </div>
                </div>";
}
function BuscarCarrinho($e)
{
    include "conexao.php";
    $comando = "select * from itens_venda as a join vendas as b where a.cod_venda=b.id_venda and b.cod_usu=$e and b.status_venda=0";
    $pesquisa = mysqli_query($conexao,$comando);
    if(mysqli_num_rows($pesquisa)>0)
    {
    $comando = "select a.imagem,a.nome_prod,a.preco_prod,b.nome_categ,c.quantidade_vendida,c.preco_total,c.id_itens,c.cod_venda
    from produto as a join categoria as b join itens_venda as c join vendas as d
    where a.cod_categ=b.id_categ and c.cod_prod=a.id_prod and c.cod_venda=d.id_venda and d.status_venda=0 and
    d.cod_usu=$e";
    $pesquisa = mysqli_query($conexao,$comando);
    echo"    <div class='col-lg-9 table-responsive'>
    <table id='tabelacarrinho' class='table table-striped px-0 border'>
            <thead>
              <th>PRODUTO</th>
              <TH>PREÇO</TH>
              <th>QUANTIDADE</th>
              <th>TOTAL</th>
              <th></th>
            </thead>
            <tbody>";
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-iden={$dados[6]}>
        <td class=''>
          <div class='d-flex align-items-center'>
            <div class='d-inline-block divImage'>
              <img src='view/imagem/{$dados[0]}' height='90px' width='90px'  alt='Imagem do Produto'>
            </div>
            <div>
              <p class='mt-1 mb-1 text-truncate-2l'><strong>{$dados[1]}</strong></p>
              <p class='mb-1 text-truncate-1l'>{$dados[3]}</p>
            </div>
          </div>
        </td>
        <td>
          <div class='align-items-center d-flex divTd-100'>
            <p class='m-0'>R$ <span id='uniPreco'>{$dados[2]}</span></p>
          </div>
        </td>
        <td>
          <div class='align-items-center d-flex divTd-100 qtdBagBuy'>
            <div class='rounded-pill d-flex align-items-center bg-grey-claro'>
              <button type='button' class='btn py-1 px-2'  onclick='retirar(this)'>
                <i class='bi bi-dash-lg '></i>
              </button>
              <p class='m-0 px-1'>{$dados[4]}</p>
              <button type='button' class='btn py-1 px-2' onclick='adicionar(this)'>
                <i class='bi bi-plus'></i>
              </button>
            </div>
          </div>
        </td>
        <td>
        <div class='align-items-center d-flex divTd-100'>
            <p class='m-0'>R$ <span id='uniPreco'>{$dados[5]}</span></p>
          </div>
        </td>
        <td>
          <div class='align-items-center d-flex divTd-100 '>
            <div>
              <button type='button' class='btn rounded-pill' onclick='remover(this)'>
                <i class='bi bi-x-lg'></i>
              </button>
            </div>
          </div>
        </td>
      </tr>
       ";
    }
    echo"
    </tbody> 
    </table>
    </div>";
   InformacoesVenda();
}else
{
    echo"
    <div class='container pt-3 pb-5'>
    <div class='mt-5 mb-5'>
      <h1 class='title'>Sem produtos na bolsa.</h1>
      <p class='title fs-4'>É... acho que é hora de ir <a href='index.php' class='text-primary text-decoration-underline'><strong>às compras</strong></a> &#x1F60E;</p>
    </div>
    <div class='mt-5 mb-3 d-flex justify-content-center'>
      <h2 class='title fs-3'>Que tal começar por</h2>
    </div>
          <div class='row row-cols-lg-4 row-cols-md-3 g-3'>";
   recem_adicionados();
          "</div>
      </div>";
}
}

function InformacoesVenda()
{
    include "conexao.php";
    $id = $_SESSION['id'];
    $comando = "select id_venda from vendas where cod_usu=$id and status_venda=0";
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
    $venda = $dados[0];
    $comando = "select * from uso_cupom where cod_venda=$venda";
    $pesquisa = mysqli_query($conexao,$comando);
    if(mysqli_num_rows($pesquisa)==0)
    {
        
        $comando = "select SUM(a.quantidade_vendida) as quantidades,SUM(a.preco_total) as Totais
        from itens_venda as a join vendas as b where a.cod_venda=b.id_venda and b.id_venda=$venda";
        $pesquisa = mysqli_query($conexao,$comando);
        $dados = mysqli_fetch_array($pesquisa);
        $total = $dados[1];
        $total =  number_format($total, 2, '.', '');
   echo" <div class='col-12 col-lg-3'>
    <div class='d-flex justify-content-center'>
        <div class='card mb-auto'>
            <div class='card-header'>
              <div>
                  <h3 class='m-0'>Informações</h2>
              </div>
              <div class='mt-3'>
                <form action='php/Cadastrar/cadastrarUso.php' method='POST'>
                  <div class='input-group'>
                    <input type='text' name='cupom' data-descon='0' id='cupomDesconto' class='form-control form-control-sm' placeholder='Aplicar Cupom'>
                    <button type='submit' class='btn btn-primary btn-sm'>Usar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class='card-body'>
              <div class='d-flex justify-content-between'>
                <p>Produtos:</p>
                <p id='totProd'>{$dados[0]}</p>
              </div>
              <div class='d-flex justify-content-between'>
                <p>Desconto:</p>
                <p id='totProd' class='text-success'><strong>R$ <span id='subTotPreco'>0,00</span></strong></p>
              </div>
              <div class='d-flex justify-content-between'>
                <p class='m-0'>Sub-Total:</p>
                <p class='m-0' id='subTotPrec''>R$ <span id='subTotPrecos'>$total</span></p>
              </div>
            </div>
            <div class='card-footer'>
              <div class='d-flex justify-content-between'>
                <p class='fs-5 mb-0'>Total:</p>
                <p id='total' class='d-flex align-items-center mb-0 text-center text-primary'>
                  <strong>R$ <span id='totalPreco' class='text-primary'>$total</span></strong>
                </p>
              </div>
              <div class='mt-2'>
                <a href='carrinho_endereco'>
                  <button type='submit' class='btn btn-primary w-100'>Próxima Etapa</button>
                </a>
              </div>
              <div class='d-flex justify-content-center mt-2'>
                <a href='index' class='text-grey text-decoration-underline'>Continuar compando</a>
              </div>
            </div>
          </div>";
    }else
    {
        $comando = "select SUM(a.quantidade_vendida) as quantidades,SUM(a.preco_total) as Totais,d.valor_desconto,d.nome_cupom
        from itens_venda as a join vendas as b join uso_cupom as c join cupom as d
        where a.cod_venda=b.id_venda and b.id_venda=$venda and c.cod_venda=b.id_venda and c.cod_cupom=d.id_cupom";
        $pesquisa = mysqli_query($conexao,$comando);
        $dados = mysqli_fetch_array($pesquisa);
        $valor = $dados[1];
        $valor =  number_format($valor, 2, '.', '');
        $desconto = ($dados[1]*0.01)*$dados[2];
        $desconto =  number_format($desconto, 2, '.', '');
        $total = $dados[1]-$desconto;
        $total = number_format($total, 2, '.', '');
   echo" <div class='col-12 col-lg-3'>
    <div class='d-flex justify-content-center'>
        <div class='card mb-auto'>
            <div class='card-header'>
              <div>
                  <h3 class='m-0'>Informações</h2>
              </div>
              <div class='mt-3'>
                <form action='php/Excluir/excluirUso.php' method='POST'>
                  <div class='input-group'>
                    <input type='text' name='cupom' data-descon='{$dados[2]}' id='cupomDesconto' value='{$dados[3]}' readOnly class='form-control form-control-sm' placeholder='Aplicar Cupom'>
                    <button type='submit' class='btn btn-primary btn-sm'>Retirar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class='card-body'>
              <div class='d-flex justify-content-between'>
                <p>Produtos:</p>
                <p id='totProd'>{$dados[0]}</p>
              </div>
              <div class='d-flex justify-content-between'>
                <p>Desconto:</p>
                <p id='totProd' class='text-success'>-<strong>R$ <span id='subTotPreco'>$desconto</span></strong></p>
              </div>
              <div class='d-flex justify-content-between'>
                <p class='m-0'>Sub-Total:</p>
                <p class='m-0' id='totProd'>R$ <span id='subTotPrecos'>$valor</span></p>
              </div>
            </div>
            <div class='card-footer'>
              <div class='d-flex justify-content-between'>
                <p class='fs-5 mb-0'>Total:</p>
                <p id='total' class='d-flex align-items-center mb-0 text-center text-primary'>
                  <strong>R$ <span id='totalPreco' class='text-primary'>$total</span></strong>
                </p>
              </div>
              <div class='mt-2'>
                <a href='carrinho_endereco'>
                  <button type='submit' class='btn btn-primary w-100'>Próxima Etapa</button>
                </a>
              </div>
              <div class='d-flex justify-content-center mt-2'>
                <a href='index' class='text-grey text-decoration-underline'>Continuar compando</a>
              </div>
            </div>
          </div>";
    }
}
function InformacoesVenda3($venda)
{
    include "conexao.php";
    $comando = "select * from uso_cupom where cod_venda=$venda";
    $pesquisa = mysqli_query($conexao,$comando);
    if(mysqli_num_rows($pesquisa)==0)
    {
        
        $comando = "select SUM(a.quantidade_vendida) as quantidades,SUM(a.preco_total) as Totais
        from itens_venda as a join vendas as b where a.cod_venda=b.id_venda and b.id_venda=$venda";
        $pesquisa = mysqli_query($conexao,$comando);
        $dados = mysqli_fetch_array($pesquisa);
        $total = $dados[1];
        $total =  number_format($total, 2, '.', '');
   echo" <div class='col-12 col-lg-3'>
    <div class='d-flex justify-content-center'>
        <div class='card mb-auto'>
            <div class='card-header'>
              <div>
                  <h3 class='m-0'>Informações</h2>
              </div>
              <div class='mt-3'>
                  <div class='input-group'>
                    <input type='text' name='cupom' data-descon='0' id='cupomDesconto' class='form-control form-control-sm' placeholder='Sem Desconto' disabled>
                  </div>
              </div>
            </div>
            <div class='card-body'>
              <div class='d-flex justify-content-between'>
                <p>Produtos:</p>
                <p id='totProd'>{$dados[0]}</p>
              </div>
              <div class='d-flex justify-content-between'>
                <p>Desconto:</p>
                <p id='totProd' class='text-success'><strong>R$ <span id='subTotPreco'>0,00</span></strong></p>
              </div>
              <div class='d-flex justify-content-between'>
                <p class='m-0'>Sub-Total:</p>
                <p class='m-0' id='subTotPrec''>R$ <span id='subTotPrecos'>$total</span></p>
              </div>
            </div>
            <div class='card-footer'>
              <div class='d-flex justify-content-between'>
                <p class='fs-5 mb-0'>Total:</p>
                <p id='total' class='d-flex align-items-center mb-0 text-center text-primary'>
                  <strong>R$ <span id='totalPreco' class='text-primary'>$total</span></strong>
                </p>
              </div>
            </div>
          </div>";
    }else
    {
        $comando = "select SUM(a.quantidade_vendida) as quantidades,SUM(a.preco_total) as Totais,d.valor_desconto,d.nome_cupom
        from itens_venda as a join vendas as b join uso_cupom as c join cupom as d
        where a.cod_venda=b.id_venda and b.id_venda=$venda and c.cod_venda=b.id_venda and c.cod_cupom=d.id_cupom";
        $pesquisa = mysqli_query($conexao,$comando);
        $dados = mysqli_fetch_array($pesquisa);
        $valor = $dados[1];
        $valor =  number_format($valor, 2, '.', '');
        $desconto = ($dados[1]*0.01)*$dados[2];
        $desconto =  number_format($desconto, 2, '.', '');
        $total = $dados[1]-$desconto;
        $total = number_format($total, 2, '.', '');
   echo" <div class='col-12 col-lg-3'>
    <div class='d-flex justify-content-center'>
        <div class='card mb-auto'>
            <div class='card-header'>
              <div>
                  <h3 class='m-0'>Informações</h2>
              </div>
              <div class='mt-3'>
                  <div class='input-group'>
                    <input type='text' name='cupom' data-descon='{$dados[2]}' id='cupomDesconto' value='{$dados[3]}' readOnly class='form-control form-control-sm' placeholder='Aplicar Cupom'>
                  </div>
              </div>
            </div>
            <div class='card-body'>
              <div class='d-flex justify-content-between'>
                <p>Produtos:</p>
                <p id='totProd'>{$dados[0]}</p>
              </div>
              <div class='d-flex justify-content-between'>
                <p>Desconto:</p>
                <p id='totProd' class='text-success'>-<strong>R$ <span id='subTotPreco'>$desconto</span></strong></p>
              </div>
              <div class='d-flex justify-content-between'>
                <p class='m-0'>Sub-Total:</p>
                <p class='m-0' id='totProd'>R$ <span id='subTotPrecos'>$valor</span></p>
              </div>
            </div>
            <div class='card-footer'>
              <div class='d-flex justify-content-between'>
                <p class='fs-5 mb-0'>Total:</p>
                <p id='total' class='d-flex align-items-center mb-0 text-center text-primary'>
                  <strong>R$ <span id='totalPreco' class='text-primary'>$total</span></strong>
                </p>
              </div>
            </div>
          </div>";
    }
}
function BuscarmeuEndereco($id)
{
    include "conexao.php";
    $id2 = $_SESSION['id'];
    $comando = "SELECT a.id_end,b.nome_est,a.cep_end,a.municipio_end,a.bairro_end,a.logradoro_end,a.complemento from endereco as a
    join estado as b join pais as c join usuario as d where a.cod_est=b.id_est and b.cod_pais=$id and d.id_usu=$id2";

    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo "
        <tr>
        <td>".$dados[0]."</td>
        <td>".$dados[1]."</td>
        <td>".$dados[2]."</td>
        <td>".$dados[3]."</td>
        <td>".$dados[4]."</td>
        <td>".$dados[5]."</td>
        <td>".$dados[6]."</td>
        <td>
        <a href='view_relatorio.php?id=".$dados[0]."'><button class='editar btn p-0 pe-1 editarQuatidade'><i class='bi bi-pen-fill'></i></a>
        </td>
        ";
    }
}



function opcoesFiltro()
{
    if(!isset($_SESSION['filtro']) || $_SESSION['filtro']==0)
    {
       echo" <option value='0' selected>Ordenar por nome</option>
                            <option value='1'>Ordenar por menor preço</option>
                            <option value='2'>Ordenar por maior preço</option>";
    }else if($_SESSION['filtro']==1)
    {
        echo" <option value='0' >Ordenar por nome</option>
                            <option value='1' selected>Ordenar por menor preço</option>
                            <option value='2'>Ordenar por maior preço</option>";
    }else{
        echo" <option value='0'>Ordenar por nome</option>
                            <option value='1'>Ordenar por menor preço</option>
                            <option value='2' selected>Ordenar por maior preço</option>";
    }
}

function RelRanQuantidade()
{
    include "conexao.php";
    $mes = date('m');
    $comando = "select c.nome_prod,c.preco_prod,a.quantidade_vendida  from 
    itens_venda as a join vendas as b join produto as c
    where a.cod_venda=b.id_venda and a.cod_prod=c.id_prod and b.status_venda=1 and MONTH(b.data_venda)=$mes 
    order by a.quantidade_vendida desc limit 10";
    $pesquisa = mysqli_query($conexao,$comando);
    $i = 1;
    while($dados = mysqli_fetch_array($pesquisa))
    {
       echo" <tr>
        <td>
            <div class='align-items-center justify-content-center d-flex'>
                <p class='m-0'>$i °</p>
            </div>
        </td>
        <td>
            <span class='d-inline-block text-truncate text-truncate-table'>
            ".$dados[0]."
            </span>
        </td>
        <td>
        ".$dados[1]."
        </td>
        <td>
        ".$dados[2]."
        </td>
    </tr>";
    $i++;
    }
}

function RelRanLucro()
{
    include "conexao.php";
    $mes = date('m');
    $comando = "select c.nome_prod,c.preco_prod,a.preco_total from 
    itens_venda as a join vendas as b join produto as c
    where a.cod_venda=b.id_venda and a.cod_prod=c.id_prod and b.status_venda=1  and MONTH(b.data_venda)=$mes 
    order by a.preco_total desc limit 10";
    $pesquisa = mysqli_query($conexao,$comando);
    $i = 1;
    while($dados = mysqli_fetch_array($pesquisa))
    {
       echo" <tr>
        <td>
            <div class='align-items-center justify-content-center d-flex'>
                <p class='m-0'>$i °</p>
            </div>
        </td>
        <td>
            <span class='d-inline-block text-truncate text-truncate-table'>
            ".$dados[0]."
            </span>
        </td>
        <td>
        ".$dados[1]."
        </td>
        <td>
        ".$dados[2]."
        </td>
    </tr>";
    $i++;
    }
}

function RelQuantidade()
{
    include "conexao.php";
    $comando = "select c.id_prod,c.imagem,d.nome_categ,c.nome_prod,c.preco_prod,a.quantidade_vendida,c.quantidade_prod
     from itens_venda as a join vendas as b join produto as c join categoria as d
    where a.cod_venda=b.id_venda and a.cod_prod=c.id_prod and c.cod_categ=d.id_categ and b.status_venda=1 ";
$pesquisa = mysqli_query($conexao,$comando);
while($dados = mysqli_fetch_array($pesquisa))
{
   echo" <tr>
    <td>
        <div class='align-items-center justify-content-center d-flex divTdList'>
            <p class='m-0'>".$dados[0]."</p>
        </div>
    </td>
    <td>
        <div class='d-inline-block divImage'>
            <img src='view/imagem/".$dados[1]."' class='img-fluid' alt='Imagem do Produto'>
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex divTdList'>
        ".$dados[2]."
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex divTdList'>
            <span class='d-inline-block text-truncate text-truncate-table'>
            ".$dados[3]."
            </span>
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex divTdList'>
        ".$dados[4]."
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex divTdList'>
        ".$dados[5]."
        </div>
    </td>
    <td>
    <div class='align-items-center d-flex divTdList'>
    ".$dados[6]."
        </div>
    </td>
    <td>
        <div class='align-items-center justify-content-start justify-content-md-center d-flex divTdList'>
        <a href='relatorioQuant?prod=".$dados[0]."'>
            <button type='button' class='btn btn-sm btn-primary'>
                Analisar <i class='bi bi-file-earmark-text-fill ms-1 mt-sm-1'></i>
            </button>
            </a>
        </div>
    </td>
</tr>";
}
}
function pedido($e)
{
    include "conexao.php";
    $comando = "select a.id_venda,a.data_venda from vendas as a join usuario as b 
    where a.cod_usu=b.id_usu and cod_usu=$e and a.status_venda=1";
    $pesquisa1 = mysqli_query($conexao,$comando);
    while($dados1 = mysqli_fetch_array($pesquisa1))
    {
        echo " <tr> <td>
        <div class='align-items-center d-flex'>
        {$dados1[0]}
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex'>
        {$dados1[1]}
        </div>
    </td>
    <td>
    <div class='align-items-center justify-content-end d-flex'>
    <a href='view_entrega.php?id={$dados1[0]}'>
        <button type='button' class='btn btn-sm btn-primary'>
            Visualizar <i class='bi bi-file-earmark-text-fill ms-1 mt-sm-1'></i>
        </button>
        </a>
    </div>
</td>
</tr>";
    }
}
function Entregas()
{
    include "conexao.php";
    $comando = "select a.id_venda,b.id_usu,b.cod_tipo from vendas as a join usuario as b 
    where a.cod_usu=b.id_usu and a.status_venda=1";
    $pesquisa1 = mysqli_query($conexao,$comando);
    while($dados1 = mysqli_fetch_array($pesquisa1))
    {
        if($dados1[2]==1)
        {
            $comando = "select a.nome_cliente from cliente as a join usuario as b
            where a.cod_usu=b.id_usu and b.id_usu={$dados1[1]}";
        }else
        {
            $comando = "select a.nome_vendedor from vendedor as a join usuario as b
            where a.cod_usu=b.id_usu and b.id_usu={$dados1[1]}";
        }
        $pesquisa2 = mysqli_query($conexao,$comando);
        $dados2 = mysqli_fetch_array($pesquisa2);
        echo " <tr> <td>
        <div class='align-items-center d-flex'>
        {$dados1[0]}
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex'>
        {$dados2[0]}
        </div>
    </td>
    <td>
    <div class='align-items-center justify-content-end d-flex'>
    <a href='view_entrega.php?id={$dados1[0]}'>
        <button type='button' class='btn btn-sm btn-primary'>
            Visualizar <i class='bi bi-file-earmark-text-fill ms-1 mt-sm-1'></i>
        </button>
        </a>
    </div>
</td>
</tr>";
    }
}
function RelLucro()
{
    include "conexao.php";
    $comando = "select c.id_prod,c.imagem,d.nome_categ,c.nome_prod,c.preco_prod,a.preco_total ,c.quantidade_prod
     from itens_venda as a join vendas as b join produto as c join categoria as d
    where a.cod_venda=b.id_venda and a.cod_prod=c.id_prod and c.cod_categ=d.id_categ and b.status_venda=1 ";
$pesquisa = mysqli_query($conexao,$comando);
while($dados = mysqli_fetch_array($pesquisa))
{
   echo" <tr>
    <td>
        <div class='align-items-center justify-content-center d-flex divTdList'>
            <p class='m-0'>".$dados[0]."</p>
        </div>
    </td>
    <td>
        <div class='d-inline-block divImage'>
            <img src='view/imagem/".$dados[1]."' class='img-fluid' alt='Imagem do Produto'>
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex divTdList'>
        ".$dados[2]."
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex divTdList'>
            <span class='d-inline-block text-truncate text-truncate-table'>
            ".$dados[3]."
            </span>
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex divTdList'>
        ".$dados[4]."
        </div>
    </td>
    <td>
        <div class='align-items-center d-flex divTdList'>
        ".$dados[5]."
        </div>
    </td>
    <td>
    <div class='align-items-center d-flex divTdList'>
    ".$dados[6]."
        </div>
    </td>
    <td>
        <div class='align-items-center justify-content-start justify-content-md-center d-flex divTdList'>
        <a href='relatorioLucro?prod=".$dados[0]."'>
            <button type='button' class='btn btn-sm btn-primary'>
                Analisar <i class='bi bi-file-earmark-text-fill ms-1 mt-sm-1'></i>
            </button>
            </a>
        </div>
    </td>
</tr>";
}
}


function ProdFavorito($id)
{
    include "conexao.php";
    if(isset($_SESSION['id']))
    {
    $usu = $_SESSION['id'];
    }else{
        $usu = 0;
    }
    $comando = "select * from favoritos where cod_usu=$usu and cod_prod=$id";
    $pesquisa = mysqli_query($conexao,$comando);
    $resultado = mysqli_num_rows($pesquisa);
    if($resultado<=0)
    {
        echo"<button type='button' onclick='favoritar(this)' id='btnFavorito' class='btn corazonInativo shadow-sm position-absolute right-0 p-2' data-status=0 data-iden=$id >
                                    <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
                                </button>";
    }else{
        echo"<button type='button' onclick='favoritar(this)' id='btnFavorito' class='btn corazonInativo shadow-sm position-absolute right-0 p-2' data-status=1  data-iden=$id style='color:red'>
                                    <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
                                </button>";
    }
}

function ProdFavorito2($id)
{
    include "conexao.php";
    if(isset($_SESSION['id']))
    {
    $usu = $_SESSION['id'];
    }else{
        $usu = 0;
    }
    $comando = "select * from favoritos where cod_usu=$usu and cod_prod=$id";
    $pesquisa = mysqli_query($conexao,$comando);
    $resultado = mysqli_num_rows($pesquisa);
    if($resultado<=0)
    {
        echo"<button type='button' onclick='favoritar(this)' id='btnFavorito' class='btn corazonInativo shadow-sm ' data-status=0 data-iden=$id >
                                    <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
                                </button>";
    }else{
        echo"<button type='button' onclick='favoritar(this)' id='btnFavorito' class='btn corazonInativo shadow-sm ' data-status=1  data-iden=$id style='color:red'>
                                    <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
                                </button>";
    }
}


function EnderecosBrasil()
{
    $id = $_SESSION['id'];
    include "conexao.php";
    $comando = "select a.id_end,b.sigla_est,a.municipio_end,a.bairro_end,a.logradoro_end,a.complemento,a.cep_end
    from endereco as a join estado as b join pais as c where
    a.cod_est=b.id_est and b.cod_pais=c.id_pais and c.id_pais=4 and a.cod_usu=$id";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
      echo"  <tr>
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
}

function recem_adicionados()
{
    include "conexao.php";
    $comando = "SELECT id_prod,imagem,preco_prod,nome_prod,descricao_prod FROM produto where
    status_prod=1 ORDER By id_prod desc limit 4 ";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
    echo
    "<div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
    <div class='card text-center'>";
    ProdFavorito($dados[0]);
    echo"
    <a href='view_produto?id={$dados[0]}' class='text-black'>
            
        <img src='view/imagem/{$dados[1]}' alt='Produto' class='card-img-top'>
        
        <div id='preco' class='card-header'>
            <strong class='fs-5'>R$ {$dados[2]}</strong>
        </div>
        <div class='card-body'>
            <p class='fs-5 card-title text-truncate-2l'>{$dados[3]}</p>
            <p class='card-text text-truncate-2l'>{$dados[4]}</p>
        </div>
    </a>
    
    <a href='view_produto?id={$dados[0]}' class='text-black'>
        <div class='card-footer'>
            <button type='button' class='btn btn-primary'>
                <strong>ADQUIRA AGORA</strong>
            </button>
        </div>
    </div>
    </a>
</div>";
    }
}

function perfumes()
{
    include "conexao.php";
    $comando = "SELECT id_prod,imagem,preco_prod,nome_prod,descricao_prod FROM produto join categoria where
    cod_categ=id_categ and id_categ=15 and status_prod=1 ORDER By id_prod desc limit 4 ";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
    echo
    "<div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
    <div class='card text-center'>";
    ProdFavorito($dados[0]);
    echo"
    <a href='view_produto?id={$dados[0]}' class='text-black'>
            
        <img src='view/imagem/{$dados[1]}' alt='Produto' class='card-img-top'>
        
        <div id='preco' class='card-header'>
            <strong class='fs-5'>R$ {$dados[2]}</strong>
        </div>
        <div class='card-body'>
            <p class='fs-5 card-title text-truncate-2l'>{$dados[3]}</p>
            <p class='card-text text-truncate-2l'>{$dados[4]}</p>
        </div>
    </a>
    <a href='view_produto?id={$dados[0]}' class='text-black'>
        <div class='card-footer'>
            <button type='button' class='btn btn-primary'>
                <strong>ADQUIRA AGORA</strong>
            </button>
        </div>
    </div>
    </a>
</div>";
    }
}
function InformacoesVenda2()
{
    include "conexao.php";
    $id = $_SESSION['id'];
    $comando = "select id_venda from vendas where cod_usu=$id and status_venda=0";
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
    $venda = $dados[0];
    $comando = "select * from uso_cupom where cod_venda=$venda";
    $pesquisa = mysqli_query($conexao,$comando);
    if(mysqli_num_rows($pesquisa)==0)
    {
        $comando = "select SUM(a.quantidade_vendida) as quantidades,SUM(a.preco_total) as Totais
        from itens_venda as a join vendas as b where a.cod_venda=b.id_venda and b.id_venda=$venda";
        $pesquisa = mysqli_query($conexao,$comando);
        $dados = mysqli_fetch_array($pesquisa);
    echo"<div class='d-flex justify-content-center'>
    <div class='card mb-auto'>
               <div class='card-header'>
                 <div>
                     <h3 class='m-0'>Informações</h2>
                 </div>
                 <div class='mt-3'>
                   <form action='php/Cadastrar/cadastrarUso2.php' method='POST'>
                     <div class='input-group'>
                       <input type='text' name='cupom' id='inputCupom' class='form-control form-control-sm' placeholder='Aplicar Cupom'>
                       <button type='submit' class='btn btn-primary btn-sm'>Usar</button>
                     </div>
                   </form>
                 </div>
               </div>
               <div class='card-body'>
               <div class='d-flex justify-content-between'>
               <p>Produtos:</p>
               <p id='totProd'>{$dados[0]}</p>
             </div>
                 <div class='d-flex justify-content-between'>
                   <p>Desconto:</p>
                   <p id='descProd' class='text-success'><strong>R$ <span id='subTotPreco'>0,00</span></strong></p>
                 </div>
                 <div class='d-flex justify-content-between'>
                   <p class='m-0'>Sub-Total:</p>
                   <p class='m-0' id='subTotProd'>R$ <span id='subTotPreco'>{$dados[1]}</span></p>
                 </div>
               </div>
               <div class='card-footer'>
                 <div class='d-flex justify-content-between'>
                   <p class='fs-5 mb-0'>Total:</p>
                   <p id='total' class='d-flex align-items-center mb-0 text-center text-primary'>
                     <strong>R$ <span id='totalPreco' class=' text-primary'>{$dados[1]}</span></strong>
                   </p>
                 </div>
                 <div class='mt-2'>
                   <a href='#' id='pagamento'>
                     <button type='submit' class='btn btn-primary w-100' disabled>Próxima Etapa</button>
                   </a>
                 </div>
                 <div class='d-flex justify-content-center mt-2'>
                   <a href='index.php' class='text-grey text-decoration-underline'>Continuar compando</a>
                 </div>
               </div>
               </div>";
    }else
    {
        $comando = "select SUM(a.quantidade_vendida) as quantidades,SUM(a.preco_total) as Totais,d.valor_desconto,d.nome_cupom
        from itens_venda as a join vendas as b join uso_cupom as c join cupom as d
        where a.cod_venda=b.id_venda and b.id_venda=$venda and c.cod_venda=b.id_venda and c.cod_cupom=d.id_cupom";
        $pesquisa = mysqli_query($conexao,$comando);
        $dados = mysqli_fetch_array($pesquisa);
        $desconto = ($dados[1]*0.01)*$dados[2];
        $total = $dados[1]-$desconto;
        echo"<div class='d-flex justify-content-center'>
        <div class='card mb-auto'>
                   <div class='card-header'>
                     <div>
                         <h3 class='m-0'>Informações</h2>
                     </div>
                     <div class='mt-3'>
                       <form action='php/Excluir/excluirUso2.php' method='POST'>
                         <div class='input-group'>
                           <input type='text' name='cupom' value='{$dados[3]}' readonly id='inputCupom' class='form-control form-control-sm' placeholder='Aplicar Cupom'>
                           <button type='submit' class='btn btn-primary  btn-sm'>Retirar</button>
                         </div>
                       </form>
                     </div>
                   </div>
                   <div class='card-body'>
                   <div class='d-flex justify-content-between'>
                   <p>Produtos:</p>
                   <p id='totProd'>{$dados[0]}</p>
                 </div>
                     <div class='d-flex justify-content-between'>
                       <p>Desconto:</p>
                       <p id='descProd' class='text-success'><strong>R$ -<span id='subTotPreco'>$desconto</span></strong></p>
                     </div>
                     <div class='d-flex justify-content-between'>
                       <p class='m-0'>Sub-Total:</p>
                       <p class='m-0' id='subTotProd'>R$ <span id='subTotPreco'>{$dados[1]}</span></p>
                     </div>
                   </div>
                   <div class='card-footer'>
                     <div class='d-flex justify-content-between'>
                       <p class='fs-5 mb-0'>Total:</p>
                       <p id='total' class='d-flex align-items-center mb-0 text-center text-primary'>
                         <strong>R$ <span id='totalPreco' class=' text-primary'>$total</span></strong>
                       </p>
                     </div>
                     <div class='mt-2'>
                       <a href='#' id='pagamento'>
                         <button type='submit' class='btn btn-primary w-100' id='btnProximoEnd'  disabled>Próxima Etapa</button>
                       </a>
                     </div>
                     <div class='d-flex justify-content-center mt-2'>
                       <a href='index.php' class='text-grey text-decoration-underline'>Continuar compando</a>
                     </div>
                   </div>
                   </div>";
    }
}
function mais_vendido()
{
    include "conexao.php";
    $comando = "SELECT a.id_prod,a.imagem,a.preco_prod,a.nome_prod,a.descricao_prod FROM produto as a join itens_venda as b join vendas as c
    where a.id_prod=b.cod_prod and c.status_venda=1 and  b.cod_venda=c.id_venda and
    status_prod=1 ORDER By b.quantidade_vendida desc limit 4 ";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
    echo
    "<div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
    <div class='card text-center'>";
    ProdFavorito($dados[0]);
    echo"<a href='view_produto?id={$dados[0]}' class='text-black'>
            
        <img src='view/imagem/{$dados[1]}' alt='Produto' class='card-img-top'>
        
        <div id='preco' class='card-header'>
            <strong class='fs-5'>R$ {$dados[2]}</strong>
        </div>
        <div class='card-body'>
            <p class='fs-5 card-title text-truncate-2l'>{$dados[3]}</p>
            <p class='card-text text-truncate-2l'>{$dados[4]}</p>
        </div>
    </a>
    <a href='view_produto?id={$dados[0]}' class='text-black'>
        <div class='card-footer'>
            <button type='button' class='btn btn-primary'>
                <strong>ADQUIRA AGORA</strong>
            </button>
        </div>
    </div>
    </a>
</div>";
    }
}

function BuscarFiltroCategoria($e)
{
    include "conexao.php";
    $comando = "select * from categoria";
    $pesquisa = mysqli_query($conexao,$comando);
    if($e==0)
    {
    while($dados = mysqli_fetch_array($pesquisa))
    {
        
    echo " <div class='form-check'>
    <input class='form-check-input ' type='checkbox' onclick='desativarCategoria(this)' name='categorias' value='{$dados[0]}'  id='Categorias1'>
    <label class='form-check-label' for='Categorias1'>
        <p class='m-0'>{$dados[1]}</p>
    </label>
</div>";
    }
}else
{
    while($dados = mysqli_fetch_array($pesquisa))
    {
    echo " <div class='form-check'>";
    if($dados[0]==$e)
    {
   echo" <input class='form-check-input ' type='checkbox' onclick='desativarCategoria(this)' checked name='categorias' value='{$dados[0]}'  id='Categoria{$dados[0]}'>
    <label class='form-check-label' for='Categoria{$dados[0]}'>
        <p class='m-0'>{$dados[1]}</p>
    </label>";
    }else{
        echo"<input class='form-check-input ' type='checkbox' onclick='desativarCategoria(this)' name='categorias' value='{$dados[0]}'  id='Categoria{$dados[0]}}'>
        <label class='form-check-label' for='Categoria{$dados[0]}}'>
            <p class='m-0'>{$dados[1]}</p>
        </label>";
    }
echo"</div>";
}
}
}

function BuscarFiltroCategoria2($e)
{
    include "conexao.php";
    $comando = "select * from categoria";
    $pesquisa = mysqli_query($conexao,$comando);
    if($e==0)
    {
    while($dados = mysqli_fetch_array($pesquisa))
    {
        
    echo " <div class='form-check'>
    <input class='form-check-input ' type='checkbox' onclick='desativarCategoria2(this)' name='categorias' value='{$dados[0]}'  id='Categoria{$dados[0]}}'>
    <label class='form-check-label' for='Categoria{$dados[0]}}'>
        <p class='m-0'>{$dados[1]}</p>
    </label>
</div>";
    }
}else
{
    while($dados = mysqli_fetch_array($pesquisa))
    {
    echo " <div class='form-check'>";
    if($dados[0]==$e)
    {
   echo" <input class='form-check-input ' type='checkbox' onclick='desativarCategoria2(this)' checked name='categorias' value='{$dados[0]}'  id='Categoria{$dados[0]}}'>
    <label class='form-check-label' for='Categoria{$dados[0]}}'>
        <p class='m-0'>{$dados[1]}</p>
    </label>";
    }else{
        echo"<input class='form-check-input ' type='checkbox' onclick='desativarCategoria2(this)' name='categorias' value='{$dados[0]}'  id='Categoria{$dados[0]}'>
        <label class='form-check-label' for='Categoria{$dados[0]}'>
            <p class='m-0'>{$dados[1]}</p>
        </label>";
    }
echo"</div>";
}
}
}

function BuscarFiltroDistribuidora($e)
{
    include "conexao.php";
    $comando = "select * from distribuidora";
    $pesquisa = mysqli_query($conexao,$comando);
    if($e==0)
    {
    while($dados = mysqli_fetch_array($pesquisa))
    {
        
    echo " <div class='form-check'>
    <input class='form-check-input ' type='checkbox' onclick='desativarDistribuidora(this)' name='distribuidora' value='{$dados[0]}'  id='distribuidor{$dados[0]}'>
    <label class='form-check-label' for='distribuidor{$dados[0]}'>
        <p class='m-0'>{$dados[1]}</p>
    </label>
</div>";
    }
}else
{
    while($dados = mysqli_fetch_array($pesquisa))
    {
    echo " <div class='form-check'>";
    if($dados[0]==$e)
    {
   echo" <input class='form-check-input ' type='checkbox' onclick='desativarDistribuidora(this)' checked name='distribuidora' value='{$dados[0]}'  id='distribuidora{$dados[0]}'>
    <label class='form-check-label' for='distribuidora{$dados[0]}'>
        <p class='m-0'>{$dados[1]}</p>
    </label>";
    }else{
        echo"<input class='form-check-input ' type='checkbox' onclick='desativarDistribuidora(this)' name='distribuidora' value='{$dados[0]}'  id='distribuidora{$dados[0]}'>
        <label class='form-check-label' for='Categoria{$dados[0]}'>
            <p class='m-0'>{$dados[1]}</p>
        </label>";
    }
echo"</div>";
}
}
}
function FiltroPreco($e)
{
  if($e==0)
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=0 name='preco' id='Preco1' checked>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=1 name='preco' id='Preco2'>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=2 name='preco' id='Preco3'>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=3 name='preco' id='Preco4'>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=4 name='preco' id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }else if($e==1)
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=0 name='preco' id='Preco1'>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=1 name='preco' id='Preco2' checked>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=2 name='preco' id='Preco3'>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=3 name='preco' id='Preco4'>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=4 name='preco' id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }else if($e==2)
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=0 name='preco' id='Preco1'>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=1 name='preco' id='Preco2'>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=2 name='preco' id='Preco3' checked>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=3 name='preco' id='Preco4'>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=4 name='preco' id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }else if($e==3)
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=0 name='preco' id='Preco1'>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=1 name='preco' id='Preco2'>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=2 name='preco' id='Preco3'>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=3 name='preco' id='Preco4' checked>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=4 name='preco' id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }else
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=0 name='preco' id='Preco1'>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=1 name='preco' id='Preco2'>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=2 name='preco' id='Preco3'>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=3 name='preco' id='Preco4'>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco(this)' value=4 name='preco' checked id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }
}

function FiltroPreco2($e)
{
  if($e==0)
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=0 name='preco' id='Preco1' checked>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=1 name='preco' id='Preco2'>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=2 name='preco' id='Preco3'>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=3 name='preco' id='Preco4'>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=4 name='preco' id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }else if($e==1)
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=0 name='preco' id='Preco1'>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=1 name='preco' id='Preco2' checked>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=2 name='preco' id='Preco3'>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=3 name='preco' id='Preco4'>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=4 name='preco' id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }else if($e==2)
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=0 name='preco' id='Preco1'>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=1 name='preco' id='Preco2'>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=2 name='preco' id='Preco3' checked>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=3 name='preco' id='Preco4'>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=4 name='preco' id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }else if($e==3)
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=0 name='preco' id='Preco1'>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=1 name='preco' id='Preco2'>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=2 name='preco' id='Preco3'>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=3 name='preco' id='Preco4' checked>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=4 name='preco' id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }else
  {
    echo"
    <div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=0 name='preco' id='Preco1'>
    <label class='form-check-label' for='Preco1'>
        <p class='m-0'>Sem limite</p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=1 name='preco' id='Preco2'>
    <label class='form-check-label' for='Preco2'>
        <p class='m-0'>Até R$25,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=2 name='preco' id='Preco3'>
    <label class='form-check-label' for='Preco3'>
        <p class='m-0'>Até R$50,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=3 name='preco' id='Preco4'>
    <label class='form-check-label' for='Preco4'>
        <p class='m-0'>Até R$75,00 </p>
    </label>
</div>
<div class='form-check'>
    <input class='form-check-input' type='radio' onclick='DesativarPreco2(this)' value=4 name='preco' checked id='Preco5'>
    <label class='form-check-label' for='Preco5'>
        <p class='m-0'>Até R$ 100,00</p>
    </label>
</div>";
  }
}
function BuscarFiltroDistribuidora2($e)
{
    include "conexao.php";
    $comando = "select * from distribuidora";
    $pesquisa = mysqli_query($conexao,$comando);
    if($e==0)
    {
    while($dados = mysqli_fetch_array($pesquisa))
    {
        
    echo " <div class='form-check'>
    <input class='form-check-input ' type='checkbox' onclick='desativarDistribuidora2(this)' name='distribuidora' value='{$dados[0]}'  id='distribuidora1'>
    <label class='form-check-label' for='distribuidora1'>
        <p class='m-0'>{$dados[1]}</p>
    </label>
</div>";
    }
}else
{
    while($dados = mysqli_fetch_array($pesquisa))
    {
    echo " <div class='form-check'>";
    if($dados[0]==$e)
    {
   echo" <input class='form-check-input ' type='checkbox' onclick='desativarDistribuidora2(this)' checked name='distribuidora' value='{$dados[0]}'  id='distribuidora{$dados[0]}'>
    <label class='form-check-label' for='distribuidora{$dados[0]}'>
        <p class='m-0'>{$dados[1]}</p>
    </label>";
    }else{
        echo"<input class='form-check-input ' type='checkbox' onclick='desativarDistribuidora2(this)' name='distribuidora' value='{$dados[0]}'  id='distribuidora{$dados[0]}'>
        <label class='form-check-label' for='Categoria{$dados[0]}'>
            <p class='m-0'>{$dados[1]}</p>
        </label>";
    }
echo"</div>";
}
}
}
function BuscarEnderecos($e,$f)
{
    include "conexao.php";
   $comando=" SELECT e.id_logradouro,a.nome_est,c.nome_cidade,d.nome_bairro,e.nome_logradouro,e.complemento 
   from estado as a join pais as b join cidade as c join bairro as d join logradouro as e join usuario as f where
    a.cod_pais=b.id_pais and c.cod_estado=a.id_est and d.cod_cidade=c.id_cidade and
     e.cod_bairro=d.id_bairro and e.cod_usu=f.id_usu and b.nome_pais='$e' and status_pais=1 and f.id_usu=$f";
     $pesquisa = mysqli_query($conexao,$comando);
     while($dados = mysqli_fetch_array($pesquisa))
     {
        echo"  <tr>
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
            <input type='checkbox' data-check=0 data-end={$dados[0]} onclick='desativar(this)' class='form-check-input' role='switch' name='selectEndereco' id='selectEndereco'>
        </div>
    </td>
  </tr>";
     }
}

function checarLogado()
{
    if(!isset($_SESSION['tipo_usu']))
    {
        header("location:login");
    }
}

function checarAdm()
{
    if(!isset($_SESSION['tipo_usu']) || ($_SESSION['tipo_usu']==1))
    {
        header("location:index");
    }
}

function VerRelatorio($e)
{
  include "conexao.php";
  $comando = "select a.nome_prod,a.quantidade_prod,SUM(b.preco_total),a.preco_prod,c.nome_distri,d.nome_categ,a.descricao_prod
  from produto as a join itens_venda as b join distribuidora as c join categoria as d join vendas as e 
  where a.cod_distri=c.id_distri and a.cod_categ=d.id_categ and b.cod_prod=a.id_prod and b.cod_venda=e.id_venda
  and e.status_venda=1 and a.id_prod=$e" ;
  $pesquisa = mysqli_query($conexao,$comando);
  $dados = mysqli_fetch_array($pesquisa);
  echo "<div class='col-md-10 col-lg-6 mb-3'>
  <label for='nomeProduto'>Nome do Produto</label>
  <input type='text' class='form-control form-control-sm' value='{$dados[0]}' name='nomeProduto' id='nomeProduto' disabled readonly>
</div>
<div class='col-6 col-md-3 col-lg-2 mb-3'>
<label for='idProduto'>ID do Produto</label>
<input type='text' class='form-control form-control-sm' value=$e name='idProduto' id='idProduto' disabled readonly>
</div>
<div class='col-6 col-md-3 col-lg-2 mb-3'>
<label for='qtdProduto'>Quant. Produto</label>
<input type='text' class='form-control form-control-sm' value='{$dados[1]}'name='qtdProduto' id='qtdProduto' disabled readonly>
</div>
<div class='col-md-2 d-none d-lg-flex'></div>
<div class='col-6 col-lg-2 col-md-3 mb-3'>
<label for='precoProduto'>Preço Venda</label>
<input type='text' class='form-control form-control-sm'value='{$dados[2]}' name='precoProduto' id='precoProduto' disabled readonly>
</div>
<div class='col-6 col-lg-2 col-md-3 mb-3'>
<label for='precoProduto'>Preço Base</label>
<input type='text' class='form-control form-control-sm' value='{$dados[3]}'name='precoProduto' id='precoProduto' disabled readonly>
</div>
<div class='col-md-10 col-lg-6 mb-3'>
<label for='distProduto'>Distribuidor</label>
<input type='text' class='form-control form-control-sm'value='{$dados[4]}' name='distProduto' id='distProduto' disabled readonly>
</div>
<div class='col-md-6 col-lg-4 mb-3'>
<label for='categProduto'>Categoria Produto</label>
<input type='text' class='form-control form-control-sm'value='{$dados[5]}' name='categProduto' id='categProduto' disabled readonly>
</div>
<div class='col-lg-6 d-flex-none d-lg-flex'>
</div>
<div class='col-12 col-lg-8 mb-3'>
<label for='descProduto'>Descrição Produto</label>
<textarea type='text' class='form-control form-control-sm' name='descProduto' id='descProduto' disabled readonly>{$dados[6]}</textarea>
</div>
</div>
<div class='mb-4 mt-3 mx-2'>
<a href='produto' class='btn btn-outline-primary me-2' role='button'>
<p class='my-auto'>Gerenciar produtos</p>
</a>
</div>";
}

function DestruirSalvo()
{
    if(isset($_SESSION['email']))
    {
    unset($_SESSION['email']);
    }
    if(isset($_SESSION['email_cad']))
    {
    unset($_SESSION['email_cad']);
    }
    if(isset($_SESSION['cpf']))
    {
    unset($_SESSION['cpf']);
    }
    if(isset($_SESSION['nasc']))
    {
    unset($_SESSION['nasc']);
    }
    if(isset($_SESSION['tele']))
    { 
    unset($_SESSION['tele']);
    }
    if(isset($_SESSION['nome_usu']))
    {
    unset($_SESSION['nome_usu']);
    }
    if(isset($_SESSION['nome_categ']))
    {
    unset($_SESSION['nome_categ']);
    }
    if(isset($_SESSION['nome_cupom']))
    {
    unset($_SESSION['nome_cupom']);
    }
    if(isset($_SESSION['descon']))
    {
    unset($_SESSION['descon']);
    }
    if(isset($_SESSION['nome_distri']))
    {
    unset($_SESSION['nome_distri']);
    }
    if(isset($_SESSION['cnpj']))
    {
    unset($_SESSION['cnpj']);
    }
    if(isset($_SESSION['fantasia']))
    {
    unset($_SESSION['fantasia']);
    }
    if(isset($_SESSION['nome_prod']))
    {
    unset($_SESSION['nome_prod']);
    }
    if(isset($_SESSION['descri_prod']))
    {
    unset($_SESSION['descri_prod']);
    }
    if(isset($_SESSION['quant_prod']))
    {
    unset($_SESSION['quant_prod']);
    }
    if(isset($_SESSION['preco_prod']))
    {
    unset($_SESSION['preco_prod']);
    }
}
?>