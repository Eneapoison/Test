<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio tipo verifica</title>
</head>

<body>
    <?php

    // for($i=1; $i<=5; $i++){
    //     echo $i;
    // }

    $numero_iterazioni = 0;
    $bc1 = "#ccc";
    $bc2 = "#fff";
    $start = 10;
    $repeat = 6;
    $pari = 0;
    //numeri pari sono 0

    for ($i = $start; $i > ($start - $repeat); $i--) {

        //se $i è pari allora icremento i numeri pari trovati

        $bc = $bc1;
        if ($i % 2) {
            $bc = $bc2;
        }
        echo "<div style='background-color:$bc'>";
        echo $i;
        echo " - " . "<span style='color:#f00'>" . ($i * 2) . "</span>";
        echo "</div>";
        if ($i % 2 == 0) {
            $pari++;
        }


        //echo " una iterazione in più";
        $numero_iterazioni++;
        //echo " " . ($numero_iterazioni);
    }
    echo "<hr>";
    echo 'Numero iterazioni:' . "$numero_iterazioni";
    echo "<br>";
    echo 'I numeri pari sono:' . "$pari"
    ?>
</body>

</html>