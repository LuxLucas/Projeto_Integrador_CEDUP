var btnProximo    = document.getElementById("proximo");
var btnVoltar   = document.getElementById("voltar");
var div1            = document.getElementById("etapaUm");
var div2            = document.getElementById("etapaDois");
var div3            = document.getElementById("etapaTres");
var corazon         = document.getElementsByClassName("corazon")[1];
var excluir         = document.getElementById("excluindo");

function alterarEtapa(div1,div2){
    div1.className = "p-2 p-md-5 mx-auto cardLCD bg-white border rounded-3 rounded-sm-0 d-none"; 
    div2.className = "p-2 p-md-5 mx-auto cardLCD bg-white border rounded-3 rounded-sm-0";  
}

function recebeCor(elemento, cor){
    elemento.style.color = cor;
}

btnProximo.addEventListener("click",function(){
    alterarEtapa(div1,div2)
});

btnVoltar.addEventListener("click",function(){
    alterarEtapa(div2,div1)
});

corazon.addEventListener("click",function(){
    recebeCor(this,"#d11149")
});

