
function tabuada(){
    var txtn = document.getElementById('txtn')
    
    if(txtn.value.length == 0){
    alert("Por favor, digite um número.")
    }else{
      var num = Number(txtn.value)
      var tab = document.querySelector('select#seltab')
      var c=10
      tab.innerHTML ='' 
      var c=1

    while(c<=10){
       var item = document.createElement('option')
       item.text = `${num} X ${c} = ${num*c}`
       item.value = `tab${c}` 
       tab.appendChild(item)
       c++
      }
    }
}