<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica 1</title>
</head>

<body>
    <?php
    $npartecipanti = rand(6, 50);
    $assenti = 5;
    $bg1 = "#fff";
    $bg2 = "#ccc";
    //copio e incollo l'inizializzazione dagli esercizi svolti
    for ($i = 0; $i < $npartecipanti - $assenti; $i++) {
        $voti[$i] = rand(0, 10);
    }
    echo "<ul>";
    $dieci = 0;
    $minimo = 10;
    $nminimi = 0;
    $somma = 0;
    $promossi = 0;
    $elite = 0;
    $posti = 10;
    for ($i = 0; $i < count($voti); $i++) { //ciclo che scorre tutti gli elementi dell'array
        //$voto = $voti[$i];

        //stampa elenco
        $bg = $bg1;
        if ($i % 2) {
            $bg = $bg2;
        }
        echo "<li style='background-color:$bg' >";
        if ($voti[$i] >= 6)
            echo "<strong> {$voti[$i]} </strong>";
        else
            echo "<i> {$voti[$i]} </i>";
        echo "</li>";

        //conto le lodi o il 10
        if ($voti[$i] == 10) {
            $dieci++;
        }
        //minimo
        if ($voti[$i] < $minimo) {
            $minimo = $voti[$i];
            $nminimi = 0; //resetto il n. di minimi perchè è cambiato il minimo di riferimento
        }
        if ($voti[$i] == $minimo) {
            $nminimi++;
        }

        //punteggio dei voti sufficienti
        if ($voti[$i] >= 6) {
            $somma += $voti[$i];
            $promossi++;
        }

        //assunzione o corso specialistico
        if ($voti[$i] >= 8) {
            //abilitato all'assunzione
            $elite++;
        }
    }
    echo "</ul>";

    echo "<hr>";
    echo "N. punteggi massimi assegnabili: $dieci";
    echo "<br>N. punteggio minimo assegnato: $minimo, $nminimi volte";
    echo "<br>Media voti promossi: " . round($somma / $promossi);

    //n lista d'attesa = $elite - $posti;
    //percentuale lista d'attesa = n lista d'attesa / $elite *100
    if ($posti > $elite)
        $perc_attesa = 0;
    else {
        $perc_attesa = ($elite - $posti) / $elite * 100;
    }
    echo "<br>posti = $posti elite = $elite - in lista d'attesa = $perc_attesa%";

    ?>
</body>

</html>