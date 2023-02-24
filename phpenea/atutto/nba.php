<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nba</title>
</head>

<body>
    <?php

    $nba_teams = array(
        "Atlanta Hawks",
        "Boston Celtics",
        "Brooklyn Nets",
        "Charlotte Hornets",
        "Chicago Bulls",
        "Cleveland Cavaliers",
        "Dallas Mavericks",
        "Denver Nuggets",
        "Detroit Pistons",
        "Golden State Warriors",
        "Houston Rockets",
        "Indiana Pacers",
        "Los Angeles Clippers",
        "Los Angeles Lakers",
        "Miami Heat",
        "Memphis Grizzlies",
        "Milwaukee Bucks",
        "Minnesota Timberwolves",
        "New Orleans Pelicans",
        "New York Knicks",
        "Oklahoma City Thunder",
        "Orlando Magic",
        "Philadelphia 76ers",
        "Phoenix Suns",
        "Portland Trail Blazers",
        "Sacramento Kings",
        "San Antonio Spurs",
        "Toronto Raptors",
        "Utah Jazz",
        "Washington Wizards"
    );

    $random_team1 = $nba_teams[array_rand($nba_teams)];
    $random_team2 = $nba_teams[array_rand($nba_teams)];

    $random_score1 = rand(90, 130);
    $random_score2 = rand(90, 130);

    echo "<table>";
    echo "<tr><th>Squadra</th><th>Punteggio</th><th>Risultato</th></tr>";
    echo "<tr><td>$random_team1</td><td>$random_score1</td>";

    if ($random_score1 > $random_score2) {
        echo "<td style='color:green;'>Vincitore</td>";
    } else {
        echo "<td style='color:red;'>Perdente</td>";
    }

    echo "</tr>";
    echo "<tr><td>$random_team2</td><td>$random_score2</td>";

    if ($random_score2 > $random_score1) {
        echo "<td style='color:green;'>Vincitore</td>";
    } elseif ($random_score1 == $random_score2) {
        echo "<td style='color:blue;'>Overtime</td>";
    } else {
        echo "<td style='color:red;'>Perdente</td>";
    }





    echo "</tr>";
    echo "</table>";
    echo "<br /><input type='submit' name='submitAdd' value='AGGIORNA' onclick='window.location.reload();'>";

    ?>
</body>

</html>