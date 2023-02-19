/*var idade = 22
if (idade >= 16){
    if (idade < 18){
     console.log('Voto opcional')
    }else{
     console.log('Voto obrigatório')   
    }   
}else{
    console.log('Não vota')
}*/
var idade = 99
console.log(`Você tem ${idade} anos.`)
if(idade < 16){
    console.log('Não vota')
}else if(idade<18||idade>65){
    console.log('Voto opcional')
}else{
    console.log('Vota obrigatóriamente')
}