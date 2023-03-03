let calciatori = [
    { nome: "Lorenzo", cognome: "Pellegrini", maglia: 10 },
    { nome: "Edin", cognome: "Dzeko", maglia: 23 },
    { nome: "Federico", cognome: "Chiesa", maglia: 99 },
    { nome: "Paulo", cognome: "Dybala", maglia: 10 },
    { nome: "Lorenzo", cognome: "Insigne", maglia: 10 },
    { nome: "Andrea", cognome: "Belotti", maglia: 9 },
    { nome: "Antonio", cognome: "Vacca", maglia: undefined },
];

function stampaCalciatoriNumeroMaglia10() {
    for (let i = 0; i < calciatori.length; i++) {
        let calciatore = calciatori[i];
        if (calciatore.maglia === 10) {
            console.log(calciatore.nome + " " + calciatore.cognome);
        }
    }
}
stampaCalciatoriNumeroMaglia10();

