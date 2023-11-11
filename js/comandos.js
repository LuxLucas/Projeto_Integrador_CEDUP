var btn_proximo1    = document.getElementById("proximo1");
var btn_proximo2    = document.getElementById("proximo2");

var div1            = document.getElementById("etapaUm");
var div2            = document.getElementById("etapaDois");
var div3            = document.getElementById("etapaTres");

var corazon         = document.getElementsByClassName("corazon")[1];

var excluir         = document.getElementById("excluindo");

function alterarEtapa(div1,div2){
    div1.className = "row g-3 justify-content-center d-none";
    div2.className = "row g-3 justify-content-center";  
}

function recebeCor(elemento, cor){
    elemento.style.color = cor;
}

btn_proximo1.addEventListener("click",function(){
    alterarEtapa(div1,div2)
});

btn_proximo2.addEventListener("click",function(){
    alterarEtapa(div2,div3)
});

corazon.addEventListener("click",function(){
    recebeCor(this,"#d11149")
});
