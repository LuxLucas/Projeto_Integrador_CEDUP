var btn_proximo1 = document.getElementById("proximo1");
var btn_proximo2 = document.getElementById("proximo2");
var div1 = document.getElementById("etapaUm");
var div2 = document.getElementById("etapaDois");
var div3 = document.getElementById("etapaTres");



btn_proximo1.addEventListener("click",function()
{
div1.className = "row g-3 justify-content-center d-none";
div2.className = "row g-3 justify-content-center";
});

btn_proximo2.addEventListener("click",function()
{
div2.className = "row g-3 justify-content-center d-none";
div3.className = "row g-3 justify-content-center";
});
