function excluindo(e){
    var linha = $(e).closest("tr");
    var id = linha.find("td:eq(0)").text().trim(); 
    $("#excluirID").val(id);
 }
 function excluindo1(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   $("#excluirIDPais").val(id);
}
function excluindo2(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   $("#excluirIDEstado").val(id);
}
function excluindo3(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   $("#excluirIDCidade").val(id);
}
function excluindo4(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   $("#excluirIDBairro").val(id);
}

function ativar1(e){
  var linha = $(e).closest("tr");
  var id = linha.find("td:eq(0)").text().trim(); 
  $("#ativarIDPais").val(id);
}
function ativar2(e){
  var linha = $(e).closest("tr");
  var id = linha.find("td:eq(0)").text().trim(); 
  $("#AtivarIDEstado").val(id);
}
function ativar3(e){
  var linha = $(e).closest("tr");
  var id = linha.find("td:eq(0)").text().trim(); 
  $("#AtivarIDCidade").val(id);
}
function ativar4(e){
  var linha = $(e).closest("tr");
  var id = linha.find("td:eq(0)").text().trim(); 
  $("#AtivarIDBairro").val(id);
}
$("#selectPais").change(function()
{
   var pais = $("#selectPais").val();
   $.post("php/selecionarEnderecos.php",{pais:pais})
.done(function(data)
{
   $("endCompra").empty();
   $("endCompra").append(data);
})
})
 function excluindo2(e){
   var linha = $(e).closest("tr");
   var id = linha.attr("data-iden");
   $("#excluirID").val(id);
}

 function ativando(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   $("#ativarID").val(id);
}
$("#senhaCheck").click(function()
{
   if($("#senhaCheck").val()==0)
   {
      $("#senha").attr("type", "text");
      $("#senhaCheck").val(1);
   }else
   {
      $("#senha").attr("type", "password"); 
      $("#senhaCheck").val(0);
   }
})
function ativando2(e){
   var linha = $(e).closest("tr");
   var id = linha.attr("data-iden");
   $("#ativarID").val(id);
}
$("filtro_favorito").click(function()
{
   alert("oi");
})
$(document).ready(function(){
   $("#cpf").mask("000.000.000-00");
   $("#tele").mask("(00) 00000-0000");
   $("#cpf1").mask("000.000.000-00");
   $("#tele1").mask("(00) 00000-0000");
   $("#inputTele").mask("(00) 00000-0000");
   $("#cnpj1").mask("00.000.000/0000-00")
   $("#cnpj2").mask("00.000.000/0000-00")
   var erro = $("#erro").attr("data-erro");
   if(erro!=0)
   {
   if (erro==1)
   {
      $("#texto_erro").text("Não foi possÍvel autenticar email ou senha.");
   }else if (erro==2)
   {
      $("#texto_erro").text("Pedimos perdão, não conseguimos atualizar os dados por motivos desconhecidos.");
   }else if (erro==3)
   {
      $("#texto_erro").text("Pedimos perdão, não conseguimos cadastrar os dados por motivos desconhecidos.");
   }else if(erro==4)
   {
      $("#texto_erro").text("Não foi possível concluir a operação pois este nome de categoria já está em uso.");
   }else if(erro==5)
   {
      $("#texto_erro").text("Não foi possível concluir a operação pois este código de cupom já está em uso.");
   }else if(erro==6)
   {
      $("#texto_erro").text("Não foi possível concluir a operação pois este país já existe em nosso banco de dados.");
   }else if(erro==7)
   {
      $("#texto_erro").text("Não foi possível concluir a operação por conta de um erro na imagem.");
   }else if(erro==8)
   {
      $("#texto_erro").text("Não foi possível cadastrar distribuidora pois este CNPJ já está uso.");
   }else if(erro==9)
   {
      $("#texto_erro").text("Não foi possível concluir a operação por este estado já existir no país.");
   }else if(erro==10)
   {
      $("#texto_erro").text("CPF ou email já estão sendo utilizados.");
   }else if(erro==11)
   {
      $("#texto_erro").text("CPF inválido.");
   }else if(erro==12)
   {
      $("#texto_erro").text("Não existe essa quantidade em estoque.");
   }else if(erro==13)
   {
      $("#texto_erro").text("Produto já esta no carrinho.");
   }else if(erro==14)
   {
      $("#texto_erro").text("Email não cadastrado no sistema");
   }else if(erro==15)
   {
      $("#texto_erro").text("Codigo invalido");
   }
   
   $("#erro").modal("show");
}
 });

 function alterarCategoria(e){
    var linha = $(e).closest("tr");
    var id = linha.find("td:eq(0)").text().trim(); 
    var nome = linha.find("td:eq(1)").text().trim(); 
    $("#alterarCategoria").val(id);
    $("#nomeCategoria").val(nome);
 }

 function alterarDistribuidora(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   var nome = linha.find("td:eq(1)").text().trim(); 
   var cnpj = linha.find("td:eq(2)").text().trim(); 
   var fantasia = linha.find("td:eq(3)").text().trim(); 
   $("#idDistribuidora").val(id);
   $("#nomeDistribuidora").val(nome);
   $("#cnpj").val(cnpj);
   $('#nomeFantasia').val(fantasia);
}

function alterarPais(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   var nome = linha.find("td:eq(1)").text().trim(); 
   $("#idPais").val(id);
   $("#nomePais").val(nome);
}

function alterarCupom(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   var nome = linha.find("td:eq(1)").text().trim(); 
   var desconto = linha.find("td:eq(2)").text().trim(); 
   $("#idCupom").val(id);
   $("#codigoCupom").val(nome);
   $("#descontoCupom").val(desconto);
}

function alterarEstado(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   var nome = linha.find("td:eq(1)").text().trim(); 
   var sigla = linha.find("td:eq(2)").text().trim(); 
   var pais = linha.attr("data-id");
   $("#idEstado").val(id);
   $("#nomeEstado").val(nome);
   $("#siglaEstado").val(sigla);
   $('#paises').val(pais);
}

function alterarCidade(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   var nome = linha.find("td:eq(1)").text().trim(); 
   var estado = linha.attr("data-iden");
   $("#idCidade").val(id);
   $("#nomeCidade").val(nome);
   $('#estados').val(estado);
}

function alterarBairro(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   var nome = linha.find("td:eq(1)").text().trim(); 
   var estado = linha.attr("data-iden");
   $("#idBairro").val(id);
   $("#nomeBairro").val(nome);
   $('#cidades').val(estado);
}

$("#btn_perfil").click(function()
{
   var nome = $("#nome").val();
   var cpf = $("#cpf").val();
   var email = $("#email").val();
   var nasc = $("#nasc").val();
   var tele = $("#tele").val();
   $("#inputNome").val(nome);
   $("#inputCpf").val(cpf);
   $("#inputEmail").val(email);
   $("#inputNasc").val(nasc);
   $("#inputTele").val(tele);
})

function alterarVendedor(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   var nome = linha.find("td:eq(1)").text().trim(); 
   var cpf = linha.find("td:eq(2)").text().trim(); 
   var nascimento = linha.find("td:eq(3)").text().trim(); 
   var telefone = linha.find("td:eq(4)").text().trim(); 
   $("#idVendedor").val(id);
   $("#nomeVendedor").val(nome);
   $("#cpf").val(cpf);
   $('#nasc').val(nascimento);
   $('#tele').val(telefone);
}

function alterarProduto(e){
   var linha = $(e).closest("tr");
   var id = linha.find("td:eq(0)").text().trim(); 
   var nome = linha.find("td:eq(2)").text().trim(); 
   var preco = linha.find("td:eq(3)").text().trim(); 
   var quantidade = linha.find("td:eq(4)").text().trim(); 
   var distri = linha.attr("data-distri");
   var categoria = linha.attr("data-categ");
   var descri = linha.find("td:eq(7)").text().trim();  
   $("#idProduto").val(id);
   $("#nomeProduto").val(nome);
   $("#precoProduto").val(preco);
   $('#qtdProduto').val(quantidade);
   $('#categProduto').val(categoria);
   $('#distProduto').val(distri)
   $('#descProduto').val(descri)
}

function alterarQtd(e)
{
   var linha   = $(e).closest("tr");
   var id      = linha.find("td:eq(0)").text().trim(); 
   var qtde    = linha.find("td:eq(4)").text().trim(); 
   var preco   = linha.find("td:eq(3)").text().trim(); 
   var tot     = linha.find("td:eq(6)").text().trim(); 
   $("#id").val(id);
   $("#qtdProduto").val(qtde);
   $("#precoProd").val(preco);
   $("#total_quant").text("Total em estoque: "+tot);
}

$(".corazon").click(function(){
   document.alert("oi");
   let id      = $(".corazon").attr("data-id");
   let status  = $(".corazon").attr("data-status");

   if(status == 0){
      $.get("php/Cadastrar/adicionarFavorito.php",{id : id}).done(function(){
         $(".corazon").attr("data-status",0); 
         $(".corazon").attr("class","btn corazon corazonAtivo shadow-sm");
      });
   }else{
      $.get("php/Excluir/excluirFavorito.php",{id : id}).done(function(){
         $(".corazon").attr("data-status",1); 
         $(".corazon").attr("class","btn corazon corazonInativo shadow-sm");
      });   
   }

});

function favoritar(e)
{
   var id = $(e).attr("data-iden");
   var status = $(e).attr("data-status");
   if(status==0)
   {
      $.post("php/Cadastrar/adicionarFavorito.php",{id : id}).done(function()
      {
   $("[data-iden="+id+"]").css('color', 'red');
   $("[data-iden="+id+"]").attr("data-status",1);
      })
   }else{
      $.post("php/Excluir/excluirFavorito.php",{id : id}).done(function()
      {
   $("[data-iden="+id+"]").css('color', 'black');
   $("[data-iden="+id+"]").attr("data-status",0);
      })
   }

}


function adicionar(e)
{
   var linha = $(e).closest("tr");
   var id = linha.attr("data-iden");
   var preco = parseFloat(linha.find("td:eq(1)").find("span").text().trim());
   var quantidade = parseInt(linha.find("td:eq(2)").find("p").text().trim());
   var desconto = parseFloat($('#cupomDesconto').attr('data-descon'));
   var descontado = (preco*0.01)*desconto;
   quantidade +=1;
   var total = preco*quantidade;
   var sinal = 1;
   $.post("php/Alterar/alterarCarrinho.php",{id :id,sinal:sinal})
   .done(function(data){
      if(data=='sucesso')
      {
         linha.find("td:eq(2)").find("p").text(quantidade);
         linha.find("td:eq(3)").find("span").text(total.toFixed(2));
         var quantProds = parseInt($("#totProd").text())+1;
         $("#totProd").text(quantProds);
         var subtotpreco = parseFloat($("#subTotPreco").text())+descontado;
         $("#subTotPreco").text(subtotpreco.toFixed(2));
         var subtotprecos = parseFloat($("#subTotPrecos").text())+preco;
         $("#subTotPrecos").text(subtotprecos.toFixed(2));
         var total_venda = (parseFloat($("#totalPreco").text())+(preco-descontado));
         $("#totalPreco").text(total_venda.toFixed(2))
      }else{
         $("#texto_erro").text("Não existe essa quantidade em estoque.");
         $("#erro").modal("show");
      }
   })
}

function retirar(e)
{
   var linha = $(e).closest("tr");
   var id = linha.attr("data-iden");
   var preco = parseFloat(linha.find("td:eq(1)").find("span").text().trim());
   var quantidade = parseInt(linha.find("td:eq(2)").find("p").text().trim());
   var desconto = parseFloat($('#cupomDesconto').attr('data-descon'));
   var descontado = (preco*0.01)*desconto;
   quantidade -=1;
   var sinal = 2;
   var total = preco*quantidade;
   $.post("php/Alterar/alterarCarrinho.php",{id :id,sinal:sinal})
   .done(function(data){
      if(data=='sucesso')
      {
         linha.find("td:eq(2)").find("p").text(quantidade);
         linha.find("td:eq(3)").find("span").text(total.toFixed(2));
         var quantProds = parseInt($("#totProd").text())-1;
         $("#totProd").text(quantProds);
         var subtotpreco = parseFloat($("#subTotPreco").text())-descontado;
         $("#subTotPreco").text(subtotpreco.toFixed(2));
         var subtotprecos = parseFloat($("#subTotPrecos").text())-preco;
         $("#subTotPrecos").text(subtotprecos.toFixed(2));
         var total_venda = (parseFloat($("#totalPreco").text())-(preco-descontado));
         $("#totalPreco").text(total_venda.toFixed(2))
      }else{
         $("#texto_erro").text("Não existe essa quantidade em estoque.");
         $("#erro").modal("show");
      }
   })
}

function adicionarProd()
{
  var preco = parseFloat($("#preco").text());
  var quantidade = parseInt($("#qtdProduto").text());
  var total = preco/quantidade;
  quantidade++;
  total *= quantidade;
  $("#preco strong").text(total.toFixed(2));
  $("#qtdProduto").text(quantidade);
}

function diminuirProd()
{
  var preco = parseFloat($("#preco").text());
  var quantidade = parseInt($("#qtdProduto").text());
  var total = preco/quantidade;
  quantidade--;
  total *= quantidade;
  if(quantidade>0)
  {
  $("#preco strong").text(total.toFixed(2));
  $("#qtdProduto").text(quantidade);
  }
}
$("#qtdProdutoView").change(function()
{
   var quant = parseInt($("#qtdProdutoView").val());
   if(quant<1 || isNaN(quant))
   {
      $("#qtdProdutoView").val(1);
   }else{
      $("#qtdProdutoView").val(quant);
   }

})

$("#menos").click(function()
{
   var quant = parseInt($("#qtdProdutoView").val());
   quant -=1;
   if(quant<1 || isNaN(quant))
   {
      $("#qtdProdutoView").val(1);
   }else{
      $("#qtdProdutoView").val(quant);
   }
})

$("#mais").click(function()
{
   var quant = parseInt($("#qtdProdutoView").val());
   quant +=1;
      $("#qtdProdutoView").val(quant);
}
)

function adicionarCarrinho()
{
   var id = $("#btnFavorito").attr("data-iden");
   var preco = $("#preco").text();
   var quant = $("#qtdProduto").text();
   $.post("php/Cadastrar/adicionarCarrinho.php",{id:id,preco:preco,quant:quant}).done(function(data)
   {
      if(data=='registrado')
      {
      $("#texto_aviso").text("Seu produto foi adicionado no carrinho com sucesso");
         $("#aviso").modal("show");  
      }else{
         $("#texto_aviso").text("Esse produto já existe em seu carrinho");
         $("#aviso").modal("show");  
      }
   })
}

function cadastrarEnd()
{
var municipio =$('#municipio').val();
var estado =$('#estado').text();
var est =$('#estado').val();
var cep =$('#cep').val();
var bairro =$('#bairro').val();
var logradouro =$('#logradouro').val();
var complemento =$('#complemento').val();

$.post("php/Cadastrar/cadastrarEndereco.php",{municipio:municipio,estado:estado,cep:cep,bairro:bairro,
   logradouro:logradouro,complemento:complemento,est:est}).done(function(data)
   {
      $("#endCompra tbody").append(data);
   })
}

function desativar(e)
{
   var checado = $(e).attr("data-check")
   if(checado==0){
    $("input:checkbox").prop("checked",false);
    $(e).prop("checked",true);
    var endereco = $(e).attr("data-end");
    $('#btnProximoEnd').removeAttr("disabled");
    $("#pagamento").attr("href","php/pagamento1?end="+endereco);
    $(e).attr("data-check",1)
}else{
   $('#btnProximoEnd').attr("disabled",true);
    $(e).attr("data-check",0)
    $("#pagamento").attr("href","#");
}
}

function desativarCategoria(e)
{
   if($(e).prop("checked")==true)
   {
       $("input:checkbox[name='categorias']").prop("checked",false);
       $(e).prop("checked",true);
       $("#FormFiltro").submit();
   }else
   {
      $("#FormFiltro").submit();
   }
}
function desativarCategoria2(e)
{
   if($(e).prop("checked")==true)
   {
       $("input:checkbox[name='categorias']").prop("checked",false);
       $(e).prop("checked",true);
       $("#FormFiltro2").submit();
   }else
   {
      $("#FormFiltro2").submit();
   }
}

function desativarDistribuidora(e)
{
   if($(e).prop("checked")==true)
   {
       $("input:checkbox[name='distribuidora']").prop("checked",false);
       $(e).prop("checked",true);
       $("#FormFiltro").submit();
   }else
   {
      $("#FormFiltro").submit();
   }
}
function desativarDistribuidora2(e)
{
   if($(e).prop("checked")==true)
   {
       $("input:checkbox[name='distribuidora']").prop("checked",false);
       $(e).prop("checked",true);
       $("#FormFiltro2").submit();
   }else
   {
      $("#FormFiltro2").submit();
   }
}

function DesativarPreco(e)
{
   $("#FormFiltro").submit(); 
}

function DesativarPreco2(e)
{
   $("#FormFiltro2").submit(); 
}
function remover(e)
{
   var linha = $(e).closest("tr");
   var preco = parseFloat(linha.find("td:eq(3)").find("span").text());
   var uni = parseFloat(linha.find("td:eq(1)").find("span").text().trim());
   var quantidade = parseInt(linha.find("td:eq(2)").find("p").text().trim());
   var desconto = parseFloat($('#cupomDesconto').attr('data-descon'));
   var descontado = ((uni*0.01)*desconto)*quantidade;
   quantprods = parseInt($("#totProd").text())-quantidade;
   var total_venda = parseFloat($("#subTotPrecos").text())-preco;
   var total2 = (total_venda*0.01)*desconto;
   $("#subTotPrecos").text(total_venda.toFixed(2));
   var precinho = parseFloat($("#subTotPreco").text())-descontado;
   $("#subTotPreco").text(precinho.toFixed(2));
   $("#totProd").text(quantprods)
   $("#totalPreco").text(total2.toFixed(2));
   var id = linha.attr("data-iden");
   $.post("php/Excluir/excluirCarrinho.php",{id:id}).done(function()
   {
      linha.remove();
    var vazio = $("#tabelacarrinho tbody").html().trim();
    vazio = vazio.length;
    if(vazio==0)
    {
      location.reload();
    }
   })
}
$("#btn_endereco").click(function()
{
   var pais = $("#selectPais").val();
   $.post("php/selecionarEstado.php",{pais:pais}).done(function(data)
   {
      $("#inputEstado").empty();
      $("#inputEstado").append(data);
   })
})

$("#inputEstado").change(function()
{
   var estado = $("#inputEstado").val();
   $.post("php/selecionarCidade.php",{estado:estado}).done(function(data)
   {
      $("#inputCidade").empty();
      $("#inputCidade").prop("disabled",false);
      $("#inputCidade").append(data);
   })
})
$("#inputCidade").change(function()
{
   var cidade= $("#inputCidade").val();
   $.post("php/selecionarBairro.php",{cidade:cidade}).done(function(data)
   {
      $("#inputBairro").empty();
      $("#inputBairro").prop("disabled",false);
      $("#inputBairro").append(data);
   })
})
$("#selectPais").change(function()
{
   var pais = $("#selectPais").val();
   $.post("php/selecionarEnderecos.php",{pais:pais}).done(function(data)
   {
      $("#endCompra tbody").empty();
      $("#endCompra tbody").append(data);
      $.post("php/selecionarEstado.php",{pais:pais}).done(function(data)
      {
         alert(data);
         $("#estado").empty();
         $("#estado").append(data);
      })
   })
})