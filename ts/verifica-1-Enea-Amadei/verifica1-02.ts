class Accumulatore {
  private carica: number;

  constructor(private valoreMassimo: number) {
    this.carica = 0;
  }

  carica(n: number) {
    this.carica = Math.min(this.valoreMassimo, this.carica + n);
  }

  scarica(n: number) {
    this.carica = Math.max(0, this.carica - n);
  }

  livello() {
    return this.carica;
  }

  livello100() {
    return Math.round(this.carica / this.valoreMassimo * 100);
  }

  reset() {
    this.carica = 0;
  }
}