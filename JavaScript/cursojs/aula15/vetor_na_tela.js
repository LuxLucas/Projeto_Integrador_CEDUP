var valores = [8,1,7,4,2,9]

/*for(var i=0;i<valores.length;i++){
console.log(`A posição ${i} tem o valor ${valores[i]}`)
}
*/
for(var i in valores){
    console.log(`A posição ${i} tem o valor ${valores[i]}`)
}
console.log(' ')
for(var i in valores){
    var div = 0

    for(var j = valores[i];j >=1; j--){ 
       if( valores[i] % j == 0 ){
        div++
       }   
    }
    if(div<=2){
        console.log(`A posição ${i} tem o valor ${valores[i]}, que é primo.`)
       }
}