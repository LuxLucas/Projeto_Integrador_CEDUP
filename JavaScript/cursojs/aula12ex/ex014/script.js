//window.alert('Olá')
function carregar(){
  var msg = window.document.getElementById('msg')
  var img = window.document.getElementById('imagem')  
  var data = new Date().getDay()
  var hora = new Date().getHours()
  var minutos = new Date().getMinutes()
  var segundos = new Date().getSeconds()
  var bom = window.document.getElementById('boahora')
  msg.innerHTML = `Eram exatamente <strong>${hora}</strong> hora(s), <strong>${minutos}</strong> minuto(s) e <strong>${segundos}</strong> segundo(s)`
  if(hora>=4 && hora<=12){ 
     //BOM DIA
     img.src = 'img/manhã.png'
     window.document.body.style.background = '#C4AFA3'
     bom.innerHTML ='<strong>Bom dia</strong>'

  }else if(hora>12 && hora<=18){
    //BOA TARDE
    img.src = 'img/tarde.png'
    window.document.body.style.background = '#98A6B0'
    bom.innerHTML ='<strong>Boa tarde</strong>'
    //'#F2766B'
    //'#A87864'

  }else{
    //BOA NOITE
    img.src = 'img/noite.png'
    window.document.body.style.background = '#592C3C'
    bom.innerHTML ='<strong>Boa noite</strong>' 
    /*CORES:
    //'#B62049'
    //'#592C3C'
    //'#C01648'*/

  }
}
/*var segundos = new Date().getSeconds() 
var seconds = new Date().getSeconds()
while(seconds == segundos){
  seconds = new Date().getSeconds()
}
if(seconds != segundos){
  location.reload()
}*/
