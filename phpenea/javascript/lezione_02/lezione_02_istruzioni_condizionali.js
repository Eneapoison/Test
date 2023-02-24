const MAX_INTERI = 10;
const MIN_INTERI = 1;
let numero = 12;

/*if (numero >= MAX_INTERI || numero < MIN_INTERI){
    console.log("numero: " + numero + " inserito non valido.");
} else {
    let resto = numero % 2;
    if (resto == 0){
        console.log("numero e' un numero pari");
    }else{
        console.log("numero e' un numero dispari");
    }    
}*/


let auto = "punto";

switch(auto){
    case "bmw":{
        console.log("la mia auto è una bmw");
        break;
    }
    case "fiat":
    case "500L":{
        console.log("la mia auto è una fiat");
        break;
    }
    case "punto":{
        console.log("la mia auto è una fiat punto");
        break;
    }
    /*default: {
        console.log("non so che tipo di auto è");
        break;
    }*/
}