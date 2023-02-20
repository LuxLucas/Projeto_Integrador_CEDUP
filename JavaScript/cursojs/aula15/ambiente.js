var num = [5,8,2,9,3]
num.push(1)
console.log(`Nosso vetor tem ${num.length} posições.`)
console.log(`Sendo seus valores: ${num}.`)
console.log(`Esses valores de forma crescente ficam: ${num.sort()}`) 
/*for(var i=0;i<num.length;i++){
    console.log(num[i])
}*/
var pos = num.indexOf(5)
if(pos <0){
    console.log(`O valor não foi encontrado`) 
}else{
console.log(`O valor está na posição/índex ${pos}`)
}