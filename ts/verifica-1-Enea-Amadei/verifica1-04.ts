function convertiInLinguaNumeroX(numero: number, lingua: string): string {
  const numeriInLingua = {
    it: ['zero', 'uno', 'due', 'tre', 'quattro', 'cinque', 'sei', 'sette', 'otto', 'nove'],
    en: ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine']
  };

  if (numero < 0 || numero > 9) {
    throw new Error('Il numero deve essere compreso tra 0 e 9');
  }

  if (lingua !== 'it' && lingua !== 'en') {
    throw new Error('Lingua non valida');
  }

  return numeriInLingua[lingua][numero];
}