function tuttoInMaiuscolo(arr: string[]): string[] {
  const nuovoArr: string[] = [];
  for (let i = 0; i < arr.length; i++) {
    nuovoArr.push(arr[i].toUpperCase());
  }
  return nuovoArr;
}