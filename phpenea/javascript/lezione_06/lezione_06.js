function conta(){
    let count = 0;
    return function(){
        return count++;
    }
}

let counter = conta();
console.log(typeof counter);//function
console.log(counter());//intero 


function conta2(numero){
    numero = 0;
    return numero++;
}

let counter2 = conta2(0);
console.log(counter2); //intero


let totale = 0;

function stampaTotale(){
    let totale = 5;
    console.log(totale);
}


let numeri = [1,2,3];

let scorri = function(elemento){
    console.log(elemento);
}
numeri.forEach(scorri);

numeri.forEach(elemento => {console.log(elemento)});

numeri.forEach(function(elemento){console.log(elemento)});
