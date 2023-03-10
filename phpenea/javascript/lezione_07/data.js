function creaDivColonne(valoreTesto) {
    let divCol = document.createElement("div");
    divCol.className = "col-md-3";
    divCol.innerHTML = valoreTesto;
    return divCol;
}

function creaDivRighe(indice) {
    let divRow = document.createElement("div");
    divRow.setAttribute("data-id", indice);

    if (indice % 2 === 0) {
        divRow.className = "row";
    } else {
        divRow.className = "row bg-light";
    }

    return divRow;
}

let divRowRoot = document.getElementById("ordini-row");


setTimeout(function () {
    let divLoader = document.getElementById("loader");
    divLoader.className = "d-none";
    for (let index = 0; index < ordini.length; index++) {
        const ordine = ordini[index];
        let divRiga = creaDivRighe(index +1);
        divRiga.appendChild(creaDivColonne(index +1));
        divRiga.appendChild(creaDivColonne(ordine.contatto));
        divRiga.appendChild(creaDivColonne(ordine.indirizzo));
        divRiga.appendChild(creaDivColonne(ordine.prodotti));
        divRowRoot.appendChild(divRiga);
        
    }
}, 3000);
