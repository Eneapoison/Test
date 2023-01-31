<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>

<body>
    <?php
    //$a = []; //inizializo un array vuoto
    $a = ['mario' => 10, 'giacomo' => 1, 'maria' => 1, 'simone' => 5, 'giuseppe' => 8, 'materia' => 'HTML', 'prof' => ""]; //inizializzazione
    $a['coordinatore'] = "Sara Forlivesi";

    foreach ($a as $chiave => $valore) {
        echo "<br>[$chiave] => $valore";
    }

    echo "<hr>";
    //memorizzare in questo array $risultato le chiavi dell'array $a 
    //relative alle posizioni in cui è memorizzato il valore $val
    //cioè: chi ha preso 10???
    $val = 10;
    $risultato = []; //inizializzato ad array vuoto
    foreach ($a as $k => $v) {
        //$v valore dell'elemento considerato
        //$k chiave dell'elemento considerato
        //$v e $a[$k] sono la stessa cosa!!!!!
        if ($v == $val) {
            //trovato elemnto da aggiungere in $risultato
            $risultato[] = $k; //aggiunge in "fondo" all'array
        }
    }

    //assegno alla chiave prof ore Rossi se la materia è database
    //il valore Casadei se la materia è HTML
    if ($a['materia'] == 'database') {
        $a['prof'] = "Rossi";
    } else if ($a['materia'] == 'HTML') {
        $a['prof'] = "Casadei";
    }


    echo "La materia " . $a['materia'] . " insegnata da {$a['prof']} ha ottenuto questi risultati";
    if ($risultato) { //true se l'array ccontiene almeno 1 elemento
        echo "<br>Contenuto di risultato:";
        //con ciclo for
        for ($i = 0; $i < count($risultato); $i++) {
            echo "<br>" . $risultato[$i];
        }
        //con ciclo foreach (stessa cosa del ciclo sopra)
        foreach ($risultato as $r) {
            echo "<br>" . $r;
        }
    } else { //false se è un array vuoto
        echo "<br>Nessun risultato";
    }

    ?>

</body>

</html>