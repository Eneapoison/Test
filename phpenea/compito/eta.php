<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio</title>
</head>

<body>
    <?php
    //inizializzo l'array $eta
    $eta = []; //opzionale
    for ($i = 0; $i < 20; $i++) {
        $eta[$i] = rand(0, 90);
    }

    //echo $eta; //NON VA BENE
    //print_r($eta);
    //var_dump($eta);

    $max = $eta[0]; //solo se so che l'indice 0 esiste!!
    $neonati = 0;
    $eta_maggiorenni = 0;
    $numero_maggiorenni = 0;
    for ($i = 0; $i < count($eta); $i++) {
        //echo $eta[$i] . "<br>";
        if ($eta[$i] >= 18) {
            //gestione età dei maggiorenni
            $numero_maggiorenni++;
            $eta_maggiorenni += $eta[$i];

            echo "<strong>" . "$eta[$i]" . "</strong>";
        } else {
            echo "<i>";
            $color = "#000";
            if ($eta[$i] == 0) {
                $color = '#f00';
            }
            echo "<span style='color:$color'>" . $eta[$i] . "</span>";
            echo "</i>";
        }
        //calcolo il più anziano
        if ($eta[$i] > $max) {
            $max = $eta[$i];
        }
        //numero neonati
        if ($eta[$i] == 0) {
            $neonati++;
        }

        echo "<br>";
    }
    echo "<hr>";
    echo "<table border=1><tr><td>";
    echo "Il più anziano ha $max anni (e si trova ad indice ????)";
    echo "<br>Il numero di neonati è $neonati";
    // if ($numero_maggiorenni > 0) {
    //     echo "<br>L'età media dei maggiorenni è " .
    //         ($eta_maggiorenni / $numero_maggiorenni);
    // } else
    //     echo "<br>L'età media dei maggiorenni è 0 ";

    echo "<br>L'età media dei maggiorenni è " .
        (($numero_maggiorenni > 0) ?
            round($eta_maggiorenni / $numero_maggiorenni)
            : "non disponibile!");

    echo "<br>Le schede per le elezioni sono " . $numero_maggiorenni;
    echo "</td></tr></table>"


    ?>

</body>

</html>