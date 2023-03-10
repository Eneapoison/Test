function Calcolatrice(){
    this.x = 0,
    this.y = 0,
    this.leggi = function(x, y){
        this.x = typeof x == "number" ? x : 0;
        this.y = typeof y == "number" ? y : 0;
    };
    this.somma = function(){
        return this.x + this.y;
    };

    this.moltiplica = function(){
        return this.x * this.y;
    };

    this.dividi = function(){
        if (this.y <= 0){
            return NaN;
        }
        return this.x / this.y;
    }
}

let calc = new Calcolatrice();

calc.leggi(5, 6);
console.log(calc.somma());
console.log(calc.moltiplica());
console.log(calc.dividi());