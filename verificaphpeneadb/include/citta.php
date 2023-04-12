<?php
include_once("./Include/connessionedb.php")
?>


<?php

//creo la pagina citta.ph con l’elenco di tutti i campi della città
while ($row = mysqli_fetch_array($result)) {
    echo $row['id'] . ' ' . $row['id_citta'] . ' ' . $row['provincia_nome'] . '<br>';
}


//Inserisco l'elenco dei clienti della città
while ($row = mysqli_fetch_array($result)) {
    echo '<h2>' . $row['id_citta'] . '</h2>';
    $query_clienti = "SELECT * FROM clienti WHERE id_citta = " . $row['id'];
    $result_clienti = mysqli_query($conn, $query_clienti);
    while ($row_clienti = mysqli_fetch_array($result_clienti)) {
        echo $row_clienti['nome'] . ' ' . $row_clienti['cognome'] . '<br>';
    }
}



//Opzionale
if(isset($_POST['submit'])){
    $citta = $_POST['citta'];
    $query = "INSERT INTO citta (citta) VALUES ('$citta')";
    $result = mysqli_query($conn,$query);
}
?>

<form method="post" action="">
    <label for="citta">Città:</label>
    <input type="text" name="citta" id="citta">
    <input type="submit" name="submit" value="Aggiungi">
</form>