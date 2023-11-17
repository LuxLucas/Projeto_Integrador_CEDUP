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
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
            </div>
            </td>
        </tr>";
    }
}

function BuscarFuncionario(){
    include "conexao.php";

    $comando = "SELECT * FROM vendedor";
    
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr>
            <td>".$dados[0]."</td>
            <td>".$dados[1]."</td>
            <td><p class='m-0'>".$dados[2]."</td>
            <td><p class='m-0'>".$dados[3]."</td>
            <td><p class='m-0'>".$dados[4]."</td>
            <td>
            <div cLASS='d-flex justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
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
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
            </div>
            </td>
        </tr>";
    }
}

function BuscarDesconto()
{
    include "conexao.php";

    $comando = "select * from cupom";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr>
        <td>".$dados[0]."</td>
        <td>".$dados[1]."</td>".
        "<td>".$dados[2]."</td>
        <td>
        <div>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
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
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
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
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltPais' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#modDelPais'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
            </div>
            </td>
        </tr>";
    }
}

function BuscarEstado()
{
    include "conexao.php";

    $comando = "select e.id_est, e.nome_est, e.sigla_est, p.nome_pais,p.id_pais from estado as e join pais as p where p.id_pais = e.cod_pais;";
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
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#modAltEstado' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#modDelEstado'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
            </div>
            </td>
        </tr>";
    }
}

function BuscarProduto()
{
    include "conexao.php"; 

    $comando = "select a.id_prod,a.imagem,a.nome_prod,a.preco_prod,a.quantidade_prod,b.nome_distri,c.nome_categ,b.id_distri,c.id_categ,a.descricao_prod
     from produto as a join distribuidora as b join categoria as c on a.cod_distri=b.id_distri and a.cod_categ=c.id_categ;";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-distri=".$dados[6]." data-categ=".$dados[7].">
            <td><div class='divTd-100'><p>".$dados[0]."</p></div></td>
            <td><img class='img-fluid' src='view/imagem/".$dados[1]."' alt='Imagem Produto'></td>
            <td><div class='divTd-100'><p class='m-0 text-truncate-2l'>".$dados[2]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0'>".$dados[3]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0'>".$dados[4]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0'>".$dados[5]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0 text-truncate-1l'>".$dados[8]."</p></div></td>
            <td><div class='divTd-100'><p class='m-0 text-truncate-2l'>".$dados[9]."</p></div></td>
            <td>
            <div class='divTd-100 justify-content-end'>
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
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
                <button class='btn btn-sm btn-success pe-1 ps-2 me-2' data-bs-toggle='modal' data-bs-target='#alterar' onclick='alterarProduto(this)'><p class='my-auto me-1'>Editar <i class='ms-1 bi bi-pen-fill'></i></p>
            </button>
                <button class='btn btn-sm btn-danger pe-1 ps-2' data-bs-toggle='modal' data-bs-target='#excluir'  onclick='excluindo(this)'><p class='my-auto me-1'>Excluir <i class='ms-1 bi bi-trash3-fill' ></i></p>
            </button>
            </div>
            </td>
        </tr>";
    }
}

function paginaPrincipal()
{
include "conexao.php";

if(isset($_GET['pagina']))
{
    $pagina = $_GET['pagina'];
}else
{
    $pagina = 1;
}

$comando = "select * from produto";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);

$limite = 20;


$inicio = ($limite*$pagina)-$limite;
$quantPaginas = ceil($resultados/$limite);
if(!isset($_SESSION['filtro']) || $_SESSION['filtro']==0 )
{ 
$comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod from
 produto as a join distribuidora as b where cod_distri=id_distri order by a.nome_prod  limit $inicio,$limite";
}else if($_SESSION['filtro']==1)
{
    $comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod from
 produto as a join distribuidora as b where cod_distri=id_distri order by a.preco_prod  limit $inicio,$limite";
}else
{
    $comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod from
 produto as a join distribuidora as b where cod_distri=id_distri order by a.preco_prod desc limit $inicio,$limite";
}
$pesquisa = mysqli_query($conexao,$comando);

while($dados = mysqli_fetch_array($pesquisa))
{
   echo"           <div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
   <div class='card text-center'>";
   echo  ProdFavorito($dados[4]);
   echo"
   <a href='view_produto.php?id=".$dados[4]."'>
       <img src='view/imagem/".$dados[0]."' alt='Produto' class='card-img-top'>
       </a>
       <div id='preco' class='card-header'>
           R$".$dados[3]."
       </div>
       <div class='card-body'>
           <p class='fs-5 card-title text-truncate-2l'>".$dados[2]."</p>
           <p class='card-text text-truncate-3l'>".$dados[5]."</p>
       </div>
       <div class='card-footer'>
           <button type='button' class='btn btn-primary'>
               Adicionar na bolsa
           </button>
       </div>
   </div>
</div>";
}
echo " </div>
<hr class='mt-3'>
<div class='row mb-4'>
    <div class='col-12'>
    <div class='d-flex justify-content-center justify-content-md-end flex-row'>
        <nav class='d-inline-block'>
        <ul class='pagination pagination-sm pagination-list'>";
for($i=1;$i<=$quantPaginas;$i++)
{
echo" <li class='page-item'>
<a href='index.php?pagina=".$i."'>
<button class='page-link'>".$i."</button>
</li>
</a>";
}
echo"</ul>
</nav>";
}

function pesquisando($e)
{
include "conexao.php";

include "conexao.php";

if(isset($_GET['pagina']))
{
    $pagina = $_GET['pagina'];
}else
{
    $pagina = 1;
}

$comando = "select * from produto";
$pesquisa = mysqli_query($conexao,$comando);
$resultados = mysqli_num_rows($pesquisa);

$limite = 20;


$inicio = ($limite*$pagina)-$limite;
$quantPaginas = ceil($resultados/$limite);
if(!isset($_SESSION['filtro']) || $_SESSION['filtro']==0 )
{ 
$comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod from
 produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
  order by a.nome_prod  limit $inicio,$limite";
}else if($_SESSION['filtro']==1)
{
    $comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod from
 produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
  order by a.preco_prod  limit $inicio,$limite";
}else
{
    $comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod from
 produto as a join distribuidora as b where cod_distri=id_distri and a.nome_prod like '%$e%'
  order by a.preco_prod desc limit $inicio,$limite";
}
$pesquisa = mysqli_query($conexao,$comando);

while($dados = mysqli_fetch_array($pesquisa))
{
   echo"           <div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
   <div class='card text-center'>";
   echo  ProdFavorito($dados[4]);
   echo"
   <a href='view_produto.php?id=".$dados[4]."'>
       <img src='view/imagem/".$dados[0]."' alt='Produto' class='card-img-top'>
       </a>
       <div id='preco' class='card-header'>
           R$".$dados[3]."
       </div>
       <div class='card-body'>
           <p class='fs-5 card-title text-truncate-2l'>".$dados[2]."</p>
           <p class='card-text text-truncate-3l'>".$dados[5]."</p>
       </div>
       <div class='card-footer'>
           <button type='button' class='btn btn-primary'>
               Adicionar na bolsa
           </button>
       </div>
   </div>
</div>";
}
echo " </div>
<hr class='mt-3'>
<div class='row mb-4'>
    <div class='col-12'>
    <div class='d-flex justify-content-center justify-content-md-end flex-row'>
        <nav class='d-inline-block'>
        <ul class='pagination pagination-sm pagination-list'>";
for($i=1;$i<=$quantPaginas;$i++)
{
echo" <li class='page-item'>
<a href='pesquisa.php?pagina=".$i."'>
<button class='page-link'>".$i."</button>
</li>
</a>";
}
echo"</ul>
</nav>";
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

$limite = 20;

$quantPaginas = ceil($resultados/$limite);

$inicio = ($limite*$pagina)-$limite;

$comando = "select a.imagem,b.nome_distri,a.nome_prod,a.preco_prod,a.id_prod,a.descricao_prod from
 produto as a join distribuidora as b join favoritos as c join usuario as d
 where cod_distri=id_distri and a.id_prod=c.cod_prod and d.id_usu=c.cod_usu and d.id_usu=$id
  limit $inicio,$limite";
$pesquisa = mysqli_query($conexao,$comando);

while($dados = mysqli_fetch_array($pesquisa))
{
   echo"           <div class='col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-sm-3 align-items-strech'>
   <div class='card text-center'>
   <button type='submit' id='btnFavorito' class='btn corazonInativo shadow-sm position-absolute right-0 p-2' data-status=1  data-iden=$id style='color:red'>
   <a href='php/Excluir/excluirFavorito2.php?id=".$dados[4]."' class='favorito'>
    <p id='pCorazon' class='m-0'>Favoritar <i class='bi bi-bookmark-heart-fill'></i></p>
    </a>
   </button>
   <a href='view_produto.php?id=".$dados[4]."'>
       <img src='view/imagem/".$dados[0]."' alt='Produto' class='card-img-top'>
       </a>
       <div id='preco' class='card-header'>
           R$".$dados[3]."
       </div>
       <div class='card-body'>
           <p class='fs-5 card-title text-truncate-2l'>".$dados[2]."</p>
           <p class='card-text text-truncate-3l'>".$dados[5]."</p>
       </div>
       <div class='card-footer'>
           <button type='button' class='btn btn-primary'>
               Adicionar na bolsa
           </button>
       </div>
   </div>
</div>";
}
echo " </div>
<hr class='mt-3'>
<div class='row mb-4'>
    <div class='col-12'>
    <div class='d-flex justify-content-center justify-content-md-end flex-row'>
        <nav class='d-inline-block'>
        <ul class='pagination pagination-sm pagination-list'>";
for($i=1;$i<=$quantPaginas;$i++)
{
echo" <li class='page-item'>
<a href='favorito.php?id=$id'>
<button class='page-link'>".$i."</button>
</li>
</a>";
}
echo"</ul>
</nav>";
}

function InformacoesProduto($e)
{
    include("conexao.php");

    $comando = "select a.nome_prod,a.preco_prod,b.nome_distri,c.nome_categ,a.imagem from produto as a join distribuidora as b join categoria as c
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

function BuscarCarrinho($e)
{
    include "conexao.php";
    $comando = "select a.imagem,a.nome_prod,a.preco_prod,b.nome_categ,c.quantidade_vendida,c.preco_total,c.id_itens
    from produto as a join categoria as b join itens_venda as c join vendas as d
    where a.cod_categ=b.id_categ and c.cod_prod=a.id_prod and c.cod_venda=d.id_venda and d.status_venda=0 and
    d.cod_usu=$e";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
        echo"
        <tr data-iden=".$dados[6].">
        <td class=''>
          <div class='d-flex align-items-center'>
            <div class='d-inline-block divImage'>
              <img src='view/imagem/".$dados[0]."' class='img-fluid' alt='Imagem do Produto'>
            </div>
            <div>
              <p class='mt-1 mb-1 text-truncate-2l'><strong>".$dados[1]."</strong></p>
              <p class='mb-1 text-truncate-1l'>".$dados[3]."</p>
            </div>
          </div>
        </td>
        <td>
          <div class='align-items-center d-flex divTd-100'>
            <p class='m-0'>R$<span id='uniPreco'>".$dados[2]."</p>
          </div>
        </td>
        <td>
          <div class='align-items-center d-flex divTd-100 qtdBagBuy'>
            <div class='rounded-pill d-flex align-items-center bg-grey-claro'>
              <button type='button' onClick='retirar(this)' class='btn py-1 px-2'>
                <i class='bi bi-dash-lg '></i>
              </button>
              <p class='m-0 px-1'>".$dados[4]."</p>
              <button type='button' onClick='adicionar(this)' class='btn py-1 px-2'>
                <i class='bi bi-plus'></i>
              </button>
            </div>
          </div>
        </td>
        <td>
        <div class='align-items-center d-flex divTd-100'>
            <p class='m-0'>R$<span id='uniPreco'>".$dados[5]."</span></p>
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
    $comando = "select SUM(a.quantidade_vendida) as  quant,SUM(a.preco_total) as preco from 
    itens_venda as a join vendas as b where a.cod_venda=b.id_venda and b.status_venda=0 and b.cod_usu=$e";
    $pesquisa = mysqli_query($conexao,$comando);
    $dados = mysqli_fetch_array($pesquisa);
    if($dados[0]==null)
    {
        $quant = "Sem produtos";
    }else{
        $quant = $dados[0];
    }
    if($dados[1]==null)
    {
        $valor = "0.00";
    }else{
        $valor = $dados[1];
    }
    echo"        </tbody>
    </table>
  </div>
  <div class='col-lg-3 col-sm-12 d-flex px-lg-0 justify-content-center'>
    <div class='card mb-auto'>
      <div class='card-header'>
        <div>
            <h3 class='m-0'>Informações</h2>
        </div>
      </div>
      <div class='card-body'>
        <div class='d-flex justify-content-between'>
          <p>Produtos:</p>
          <p id='totProd'>$quant</p>
        </div>
      </div>
      <div class='card-footer'>
        <div class='d-flex justify-content-between'>
          <p class='fs-5 mb-0'>Total:</p>
          <p id='total' class='mb-0 text-center text-primary'>
            <strong>R$ <span id='totalPreco' class='text-primary'>$valor</span></strong>
          </p>
        </div>
        <div class='mt-2'>
          <a href='carrinho_endereco.php'>
            <button type='submit' class='btn btn-sm btn-primary w-100'>Próxima Etapa</button>
          </a>
        </div>
        <div class='d-flex justify-content-center mt-2'>
          <a href='index.php' class='text-grey text-decoration-underline'>Continuar compando</a>
        </div>
      </div>
    </div>
  </div>";
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
    $comando = "select c.nome_prod,c.preco_prod,SUM(a.quantidade_vendida) as quant from 
    itens_venda as a join vendas as b join produto as c
    where a.cod_venda=b.id_venda and a.cod_prod=c.id_prod and b.status_venda=1 and MONTH(b.data_venda)=$mes 
    order by quant desc limit 10";
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
    }
}

function RelRanLucro()
{
    include "conexao.php";
    $mes = date('m');
    $comando = "select c.nome_prod,c.preco_prod,SUM(a.preco_total) as preco_tot from 
    itens_venda as a join vendas as b join produto as c
    where a.cod_venda=b.id_venda and a.cod_prod=c.id_prod and b.status_venda=1  and MONTH(b.data_venda)=$mes 
    order by preco_tot desc limit 10";
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
    }
}

function RelQuantidade()
{
    include "conexao.php";
    $comando = "select c.id_prod,c.imagem,d.nome_categ,c.nome_prod,c.preco_prod,SUM(a.quantidade_vendida) as quant,c.quantidade_prod
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
        <a href='relatorioQuant.php?prod=".$dados[0]."'>
            <button type='button' class='btn btn-sm btn-primary'>
                Analisar <i class='bi bi-file-earmark-text-fill ms-1 mt-sm-1'></i>
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
    $comando = "select c.id_prod,c.imagem,d.nome_categ,c.nome_prod,c.preco_prod,SUM(a.preco_total) as preco,c.quantidade_prod
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
        <a href='relatorioLucro.php?prod=".$dados[0]."'>
            <button type='button' class='btn btn-sm btn-primary'>
                Analisar <i class='bi bi-file-earmark-text-fill ms-1 mt-sm-1'></i>
            </button>
            </a>
        </div>
    </td>
</tr>";
}
}

function Estado()
{
    include "conexao.php";
    $comando = "select a.id_est,a.sigla_est from estado as a join pais as b where a.cod_pais=4 and a.cod_pais=b.id_pais";
    $pesquisa = mysqli_query($conexao,$comando);
    while($dados = mysqli_fetch_array($pesquisa))
    {
    echo"<option value=".$dados[0].">".$dados[1]."</option>";
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
?>

