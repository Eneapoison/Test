<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificaenea</title>
</head>

<body>
    <?php
    $numeropartecipanti = 25;
    $punteggipartecipanti = [];
    $numeropunteggiopieno = 0;
    $postidilavoro = 0;
    $attesa = 0;
    echo "<ul>";
    for ($i = 0; $i < ($numeropartecipanti - 5); $i++) {
        $punteggipartecipanti[$i] = rand(0, 10);
        if ($punteggipartecipanti >= 6) {
            echo "<strong>";
        } else {

            echo "<i>";
        }

        if ($i % 2) {
            echo "<li style=backround-color:#ccc>$punteggipartecipanti[$i]</strong></i></li></p>";
        } else {
            echo "<li style=backround-color:#fff>$punteggipartecipanti[$i]</strong></i></li></p>";
        }
        if ($punteggipartecipanti[$i] == 10) {
            $numeropunteggiopieno++;
        }
        if ($punteggipartecipanti[$i] > 8) {
            $postidilavoro++;
        }
        // if ($attesa[$i] < 8) {

        // } mi da errore
    }
    echo "</ul>";
    echo "<fieldset>";
    echo "I partecipanti che hanno ottenuto il punteggio pieno sono $numeropunteggiopieno<br>";
    echo "Accesso immediato $postidilavoro è stato assegnato";
    echo "In lista d'attesa sono $attesa";
    echo "</fieldset>";

    ?>
</body>

</html>