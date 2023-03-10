<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //estrarre dal db tutti i dati della regione $regione
    function connessione($sql)
    {
        $records = [];
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        try {
            //1
            $connessione = new PDO($dsn, "root", "");
            //2
            $st = $connessione->prepare($sql);
            //3 bind
            //4
            $st->execute();
            //5
            $records = $st->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo ("Errore di connessione " . $e->getMessage());
        }
        return $records;
    }

    //def la funzione che estrae da $regioni la regione $regione
    function fz_regione($r, $regioni)
    {
        foreach ($regioni as $regione) {
            if ($regione['regione'] == $r) {
                return $regione;
            }
        }
        return [];
    }





    $regioni = connessione("SELECT * FROM regioni");
    $regione = "Lazione";
    $risultato = fz_regione($regione, $regioni);

    //print_r($risultato);
    if ($risultato) { //se array vuoto allora è false
        echo "Trovata regione $regione con area geografica " .
            $risultato['area_geografica'];
    } else
        echo "Regione non trovata";




    ?>
</body>

</html>