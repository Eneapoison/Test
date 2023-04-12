class Persona {
    constructor(nome, cognome, eta) {
        this.nome = nome;
        this.cognome = cognome;
        this.eta = eta;
    }
}

class Film {
    constructor(titolo, annoUscita, regista, cast) {
        this.titolo = titolo;
        this.annoUscita = annoUscita;
        this.regista = regista;
        this.cast = cast;
    }
}

const elencoFilm = [
    new Film("Limitless", 2011, "Neil Burger", [
        new Persona("Bradley", "Cooper", 48),
        new Persona("Robert", "De Niro", 80)
    ]),
    new Film("The Wolf of Wall Street", 2013, "Martin Scorsese", [
        new Persona("Leonardo", "Di Caprio", 49),
        new Persona("Margot", "Robbie", 33)
    ]),
    new Film("Interstellar", 2014, "Christopher Nolan", [
        new Persona("Matthew", "McConaughey", 51),
        new Persona("Anne", "Hathaway", 38)
    ]),
    new Film("Avatar", 2009, "James Cameron", [
        new Persona("Sam", "Worthington", 47),
        new Persona("Zoe", "Saldana", 45),
        new Persona("Sigourney", "Weaver", 74)
    ]),
    new Film("La Grande Bellezza", 2013, "Paolo Sorrentino", [
        new Persona("Toni", "Servillo", 62),
        new Persona("Carlo", "Verdone", 70)
    ]),
    new Film("Django Unchained", 2012, "Quentin Tarantino", [
        new Persona("Jamie", "Foxx", 53),
        new Persona("Christoph", "Waltz", 64),
        new Persona("Leonardo", "DiCaprio", 46),
        new Persona("Samuel L.", "Jackson", 72)
    ]),
    new Film("Whiplash", 2014, "Damien Chazelle", [
        new Persona("Miles", "Teller", 33),
        new Persona("J.K.", "Simmons", 66)
    ]),
    new Film("Inception", 2010, "Christopher Nolan", [
        new Persona("Leonardo", "DiCaprio", 46),
        new Persona("Ellen", "Page", 34)
    ]),
    new Film("Blade Runner 2049", 2017, "Denis Villeneuve", [
        new Persona("Ryan", "Gosling", 40),
        new Persona("Harrison", "Ford", 78),
        new Persona("Ana", "de Armas", 32)
    ])
];

const filmDopo2000 = elencoFilm.filter(film => film.annoUscita > 2000);

console.log(filmDopo2000);

    // Output:
/*
[
Film {
titolo: 'Limitless',
annoUscita: 2011,
regista: 'Neil Burger',
cast: [
Persona { nome: 'Bradley', cognome: 'Cooper', eta: 48 },
Persona { nome: 'Robert', cognome: 'De Niro', eta: 80 }
]
},
Film {
titolo: 'Interstellar',
annoUscita: 2014,
regista: 'Christopher Nolan',
cast: [
Persona { nome: 'Matthew', cognome: 'McConaughey', eta: 51 },
Persona { nome: 'Anne', cognome: 'Hathaway', eta: 38 }
]
},
Film {
titolo: 'La Grande Bellezza',
annoUscita: 2013,
regista: 'Paolo Sorrentino',
cast: [
Persona { nome: 'Toni', cognome: 'Servillo', eta: 62 },
Persona { nome: 'Carlo', cognome: 'Verdone', eta: 70 }
]
},
Film {
titolo: 'Django Unchained',
annoUscita: 2012,
regista: 'Quentin Tarantino',
cast: [
Persona { nome: 'Jamie', cognome: 'Foxx', eta: 53 },
Persona { nome: 'Christoph', cognome: 'Waltz', eta: 64 },
Persona { nome: 'Leonardo', cognome: 'DiCaprio', eta: 46 },
Persona { nome: 'Samuel L.', cognome: 'Jackson', eta: 72 }
]
},
Film {
titolo: 'Whiplash',
annoUscita: 2014,
regista: 'Damien Chazelle',
cast: [
Persona { nome: 'Miles', cognome: 'Teller', eta: 33 },
Persona { nome: 'J.K.', cognome: 'Simmons', eta: 66 }
]
},
Film {
titolo: 'Avatar',
annoUscita: 2009,
regista: 'James Cameron',
cast: [ 
Persona { nome: 'Sam', cognome: 'Worthington', eta: 47 },
Persona { nome: 'Zoe', cognome: 'Saldana', eta: 45 }
Persona { nome: 'Sigourney', cognome: 'Weaver', eta: 74 }
]
},
Film {
titolo: 'Blade Runner 2049',
annoUscita: 2017,
regista: 'Denis Villeneuve',
cast: [
Persona { nome: 'Ryan', cognome: 'Gosling', eta: 40 },
Persona { nome: 'Harrison', cognome: 'Ford', eta: 78 },
Persona { nome: 'Ana', cognome: 'de Armas', eta: 32 }
]
}
]
*/