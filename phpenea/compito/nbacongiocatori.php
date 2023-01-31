<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nbacongiocatori</title>
</head>
<body>
<?php

// Generatore di partite NBA del 2022

// Definire le squadre
$squadre = array("Celtics", "Lakers", "Rockets", "Warriors", "Heat", "76ers", "Nets", "Knicks");

// Definire i giocatori
$giocatori = array(
    "Celtics" => array("Kyrie Irving", "Jayson Tatum", "Jaylen Brown", "Gordon Hayward"),
    "Lakers" => array("LeBron James", "Anthony Davis", "Kyle Kuzma", "Rajon Rondo"),
    "Rockets" => array("James Harden", "Russell Westbrook", "Eric Gordon", "P.J. Tucker"),
    "Warriors" => array("Stephen Curry", "Klay Thompson", "Draymond Green", "Andrew Wiggins"),
    "Heat" => array("Jimmy Butler", "Goran Dragic", "Bam Adebayo", "Tyler Herro"),
    "76ers" => array("Ben Simmons", "Joel Embiid", "Tobias Harris", "Al Horford"),
    "Nets" => array("Kyrie Irving", "Kevin Durant", "DeAndre Jordan", "Spencer Dinwiddie"),
    "Knicks" => array("Julius Randle", "RJ Barrett", "Marcus Morris", "Elfrid Payton")
);

// Generare una partita casuale
$squadra1 = $squadre[array_rand($squadre)];
$squadra2 = $squadre[array_rand($squadre)];

// Generare un risultato casuale
$risultato1 = rand(0, 100);
$risultato2 = rand(0, 100);

// Generare i punteggi dei giocatori
$punteggi1 = array();
$punteggi2 = array();

foreach ($giocatori[$squadra1] as $giocatore) {
    $punteggi1[] = rand(0, 30);
}

foreach ($giocatori[$squadra2] as $giocatore);
echo "<h2>Partita NBA del 2022</h2>";
echo "<table>";
echo "<tr><th>Squadra</th><th>Punteggio</th><th>Giocatori</th></tr>";
echo "<tr><td>$squadra1</td><td>$punteggi1</td><td>";
foreach ($giocatori[$squadra1] as $giocatore) {
    echo "$giocatore, ";
}
echo "</td></tr>";
echo "<tr><td>$squadra2</td><td>$punteggi2</td><td>";
foreach ($giocatori[$squadra2] as $giocatore) {
    echo "$giocatore, ";
}
echo "</td></tr>";
echo "</table>";
?>
</body>
</html>