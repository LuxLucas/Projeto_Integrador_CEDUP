/*var btn_proximo1    = document.getElementById("proximo1");
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
});*/
console.log("rtuvh");

var body = document.body; // Correção aqui

let btnCadPais = document.querySelector("#btnCadPais");

body.addEventListener("load", function () {
    gerarModalCadastroPais();
});

function gerarModalCadastroPais() {

    alert("6yfuyy");

    const modal = document.createElement("div");
    modal.className = "modal fade";
    modal.id = "cadastroPais";
    modal.tabIndex = "-1";
    modal.setAttribute("aria-labelledby", "cadastrarLabel");
    modal.setAttribute("aria-hidden", "false");

    body.appendChild(modal);

    const modalDialog = document.createElement("div");
    modalDialog.className = "modal-dialog";

    modal.appendChild(modalDialog);

    const modalContent = document.createElement("div");
    modalContent.className = "modal-content";

    modalDialog.appendChild(modalContent);

    const modalHeader = document.createElement("div");
    modalHeader.className = "modal-header";

    modalContent.appendChild(modalHeader);

    const modalTitulo = document.createElement("h2");
    modalTitulo.className = "modal-title";
    modalTitulo.id = "cadastrarLabel";
    modalTitulo.textContent = "Cadastrar País";

    modalHeader.appendChild(modalTitulo);

    const btnClose = document.createElement("button");
    btnClose.type = "button";
    btnClose.className = "btn-close";
    btnClose.setAttribute("data-bs-dismiss", "modal");
    btnClose.setAttribute("aria-label", "Close");

    modalHeader.appendChild(btnClose);

    const modalBody = document.createElement("div");
    modalBody.className = "modal-body";

    modalContent.appendChild(modalBody);

    const modalForm = document.createElement("form");
    modalForm.action = "php/Cadastrar/cadastrarPais.php";
    modalForm.method = "POST";

    const divNulaForm = document.createElement("div");
    divNulaForm.className = "w-100 d-none d-lg-block";

    modalForm.appendChild(divNulaForm);

    modalBody.appendChild(modalForm);

}
