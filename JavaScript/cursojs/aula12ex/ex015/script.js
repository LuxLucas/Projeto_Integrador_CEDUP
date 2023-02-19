function verificar(){
    var ano = window.document.getElementById('ano')
        ano = Number(ano.value)
    var tano = new Date().getFullYear()

    if(ano > tano || ano == 0){
      window.alert('[ERRO] Data inválida. Verifique os dados e tente novamente.')
      alert('[POSSÍVEIS ERROS] Ou o ser vivo tem 0 anos, ou não nasceu, ou seu calendário está errado ou é um erro de digitação... (sim, muitos "ou")')
    
    }else{
        var idade = tano-ano
        var res = window.document.getElementById('res')
        var gsex = document.getElementsByName('radsex')
        var genero = ' '
           if (gsex[0].checked){
            genero = 'Homem'
            var  img = document.createElement('img')
            img.setAttribute('id','foto')

            if(idade>=0 && idade<13){
                //MENINO
                img.setAttribute('src','img/menino.png')
                img.setAttribute('alt','MENINO') 
                genero = 'Menino'               
            }else if(idade < 30){
                //JOVEM
                img.setAttribute('src','img/jovem.png')
                img.setAttribute('alt','JOVEM') 
                genero = 'Jovem' 
            }else if(idade < 60){
                //ADULTO
                img.setAttribute('src','img/adulto.png')
                img.setAttribute('alt','ADULTO') 
                genero = 'Adulto' 
            }else{
                //IDOSO
                img.setAttribute('src','img/idoso.png')
                img.setAttribute('alt','IDOSO') 
                genero = 'Idoso' 
            }

           }else if(gsex[1].checked){
            genero = 'Mulher'
            var  img = document.createElement('img')
            img.setAttribute('id','foto')

            if(idade>=0 && idade<13){
                //MENINA
                img.setAttribute('src','img/menina.png')
                img.setAttribute('alt','MENINA') 
                genero = 'Menina' 

            }else if(idade < 30){
                //JOVINA
                img.setAttribute('src','img/jovina.png')
                img.setAttribute('alt','JOVEM') 
                genero = 'Jovem' 

            }else if(idade < 60){
                //ADULTA
                img.setAttribute('src','img/adulta.png')
                img.setAttribute('alt','ADULTA') 
                genero = 'Adulta'

            }else{
                //IDOSA
                img.setAttribute('src','img/idosa.png')
                img.setAttribute('alt','IDOSA') 
                genero = 'Idosa'

            }
           }
        res.innerHTML = `Detectamos ${genero} com ${idade} anos de idade`
        res.appendChild(img) 
    }
}