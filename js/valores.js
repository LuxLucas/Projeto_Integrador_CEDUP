function excluindo(e){
    var linha = $(e).closest("tr");
    var id = linha.find("td:eq(0)").text().trim(); 
    $("#excluirID").val(id);
 }
function formartarCpf()
{
   $("#cpf").inputMask("999.999.999-99")
}
$(document).ready(function(){
   $("#cpf").mask("000.000.000-00");
   $("#tele").mask("(00) 00000-0000");
   $("#cpf1").mask("000.000.000-00");
   $("#tele1").mask("(00) 00000-0000");
   var erro = $("#erro").attr("data-erro");
   if(erro!=0)
   {
   if (erro==1)
   {
      $("#texto_erro").text("não foi possivel autenticar email ou senha");
   }else if (erro==2)
   {
      $("#texto_erro").text("pedimos perdão mas não conseguimos atualizar os dados por motivos desconhecidos");
   }else if (erro==3)
   {
      $("#texto_erro").text("pedimos perdão mas não conseguimos cadastrar os dados por motivos desconhecidos");
   }else if(erro==4)
   {
      $("#texto_erro").text("não foi possivel concluir a operação por este nome de categoria ja esta em uso");
   }else if(erro==5)
   {
      $("#texto_erro").text("não foi possivel concluir a operação por este codigo de cupom  ja esta em uso");
   }else if(erro==6)
   {
      $("#texto_erro").text("não foi possivel concluir a operação por este pais ja existir nos cadastros");
   }else if(erro==7)
   {
      $("#texto_erro").text("não foi possivel concluir a operação por conta de um erro na imagem");
   }else if(erro==8)
   {
      $("#texto_erro").text("não foi possivel cadastrar distribuidora por cnpj em uso");
   }else if(erro==9)
   {
      $("#texto_erro").text("não foi possivel concluir a operação por este estado já existir no país");
   }else if(erro==10)
   {
      $("#texto_erro").text("CPF ou email já estão sendo utilizados");
   }else if(erro==11)
   {
      $("#texto_erro").text("CPF invalido");
   }else if(erro==12)
   {
      $("#texto_erro").text("Não existe essa quantidade em estoque");
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
   $("#codigoPais").val(nome);
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
   var nome = linha.find("td:eq(1)").text().trim(); 
   var preco = linha.find("td:eq(2)").text().trim(); 
   var quantidade = linha.find("td:eq(3)").text().trim(); 
   var distri = linha.attr("data-distri");
   var categoria = linha.attr("data-categ");
   var descri = linha.find("td:eq(6)").text().trim();  
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
   $(e).css('color', 'red');
   $(e).attr("data-status",1);
      })
   }else{
      $.post("php/Excluir/excluirFavorito.php",{id : id}).done(function()
      {
   $(e).css('color', 'black');
   $(e).attr("data-status",0);
      })
   }

}


function adicionar(e)
{
   var linha = $(e).closest("tr");
   var id = linha.attr("data-iden");
   var preco = parseFloat(linha.find("td:eq(1)").find("span").text().trim());
   var quantidade = parseInt(linha.find("td:eq(2)").find("p").text().trim());
   quantidade +=1;
   var total = preco*quantidade;
   $.post("php/Alterar/alterarCarrinho.php",{id :id,quantidade : quantidade,total : total})
   .done(function(data){
      if(data=='sucesso')
      {
         linha.find("td:eq(2)").find("p").text(quantidade);
         linha.find("td:eq(3)").find("span").text(total.toFixed(2));
         var quantProds = parseInt($("#totProd").text())+1;
         $("#totProd").text(quantProds);
         var total_venda = (parseFloat($("#totalPreco").text())+preco);
         $("#totalPreco").text(total_venda.toFixed(2))
      }else{
         $("#texto_erro").text("Não existe essa quantidade em estoque");
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
   quantidade -=1;
   var total = preco*quantidade;
   $.post("php/Alterar/alterarCarrinho.php",{id :id,quantidade : quantidade,total : total})
   .done(function(data){
      if(data=='sucesso')
      {
         linha.find("td:eq(2)").find("p").text(quantidade);
         linha.find("td:eq(3)").find("span").text(total.toFixed(2));
         var quantProds = parseInt($("#totProd").text())-1;
         $("#totProd").text(quantProds);
         var total_venda = parseFloat($("#totalPreco").text())-preco;
         $("#totalPreco").text(total_venda.toFixed(2))
      }else{
         $("#texto_erro").text("Não existe essa quantidade em estoque");
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
   if($(e).prop("checked")==true)
{
    $("input:checkbox").prop("checked",false);
    $(e).prop("checked",true);
}
}

function remover(e)
{
   var linha = $(e).closest("tr");
   var preco = parseFloat(linha.find("td:eq(3)").find("span").text());
   var quantidade = parseInt(linha.find("td:eq(2)").find("p").text().trim());
   quantprods = parseInt($("#totProd").text())-quantidade;
   var total_venda = parseFloat($("#totalPreco").text())-preco;
   $("#totalPreco").text(total_venda.toFixed(2))
   $("#totProd").text(quantprods)
   var id = linha.attr("data-iden");
   $.post("php/Excluir/excluirCarrinho.php",{id:id}).done(function()
   {
      linha.remove();
   })
}

$("#selectPais").change(function()
{
   var pais = $("#selectPais").val();
   $.post("php/selecionarEnderecos.php",{pais:pais}).done(function(data)
   {
      $("#endCompra tbody").empty();
      $("#endCompra tbody").append(data);
      $.post("php/selecionarEstado.php",{pais:pais}).done(function(data)
      {
         $("#estado").empty();
         $("#estado").append(data);
      })
   })
})