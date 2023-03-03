let etichetta = "nomeProprieta";
let oggetto = {
    [etichetta]: "ciao"
}
let oggetto1 = {
    "etichetta": "ciao"
}
let oggetto2 = {
    etichetta: "ciao"
}

console.log(oggetto.nomeProprieta);
console.log(oggetto[etichetta]);
console.log(oggetto["nomeProprieta"]);
console.log(etichetta);

function makeObj(nominativo) {
    return {
        //nome: nominativo
        //nominativo, 
        nome
    };
}

let og = makeObj("prova");
console.log(og.nominativo);

function existsProperty(nomePropery, obj) {
    if (obj === null || obj === undefined) {
        return false;
    }

    if (nomePropery === null || nomePropery === undefined) {
        return false;
    }

    if (obj[nomePropery] === undefined) {
        return false;
    }
    return true;
}