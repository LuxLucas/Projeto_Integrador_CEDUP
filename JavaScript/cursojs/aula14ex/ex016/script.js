/*function clicar(){
    var inicio = Number(window.document.getElementById('inicio').value)
    var fim = Number(window.document.getElementById('fim').value)
    var passo = Number(window.document.getElementById('passo').value)
    var res = window.document.getElementById('res')
        res.innerHTML = '' 
if(inicio === null || fim === null || passo === null){
    if(inicio === null){
        window.alert('[ERRO] "Início" está sem valor')
    }
    if(fim === null){
        window.alert('[ERRO] "Fim" está sem valor')
    }
    if(passo === null){
        window.alert('[ERRO] "Passo" está sem valor')
    }
}else{
    if(fim > 0 && passo > 0){
        for(inicio;inicio<=fim;inicio+=passo){
        if(inicio>=fim){
           res.innerHTML += `${inicio} &#x1F449`
        }else{
           res.innerHTML += `${inicio} &#x1F449`
        }
    }
        if(inicio>fim){
            res.innerHTML += `&#x1F6A9` 
        }
    }else{
        for(inicio;inicio>=fim;inicio+=passo){
            if(inicio<=fim){
               res.innerHTML += `${inicio} &#x1F449`
            }else{
               res.innerHTML += `${inicio} &#x1F449`
            }
        }
            if(inicio<fim){
            res.innerHTML += `&#x1F6A9` 
            }   
    }
  }  
}*/

function contar(){
    var ini = window.document.getElementById('txti')
    var fim = window.document.getElementById('txtf')
    var passo = window.document.getElementById('txtp')
    var res = window.document.getElementById('res')
    var nomepasso = window.document.getElementById('txtpasso')

    if(ini.value.length == 0 || fim.value.length == 0 || passo.value.length == 0){
        alert('[ERRO] Faltam dados !')
        res.innerHTML = "Impossível contar"
    }else{
        res.innerHTML = "Contando: "
        var n = Number(ini.value)
        var f = Number(fim.value)
        var p = Number(passo.value)

        if(n > f){  
            //Contagem Regressiva
           if(-p > 0){
               //Detecta o Looping
               l = f-1
               alert(`[ALERTA] Looping encontrado. "${nomepasso.innerHTML}" está negativo.`)
               res.innerHTML = `Contando... `
           }else{ 
            //Faz a Contagem  
            for(var l = n; l >= f; l -= p){    
             res.innerHTML += `${l} \u{1f449}`  
            }
           res.innerHTML += ` \u{1F3C1}` 
        }
        }else{
            //Contagem Crescente
            if(p < 0){
                //Detecta o Looping
                i = f+1
                alert(`[ALERTA] Looping encontrado. "${nomepasso.innerHTML}" está negativo.`)
                res.innerHTML = "Contando... "
            }else{
                //Faz a Contagem
            for(var i = n; i <= f; i+=p){
            res.innerHTML += `${i} \u{1f449}`
        }
        res.innerHTML += ` \u{1F3C1}`
            }
    }         
    }
}

