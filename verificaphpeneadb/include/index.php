<?php
include_once("./Include/connessionedb.php")
?>


<?php
//var_dump($_POST);
$postEmail = $_POST['email'];
$postPasswd = $_POST['passwd'];

//query SQL
$sql = "
    SELECT * 
    FROM `citta` 
    WHERE id_citta LIKE '%citta%'
    OR  provincia_nome LIKE '%provincia%';";

$login = "root";
$passwd = "";
$bindParams = [];
$dsn = "mysql:dbname=ifts;host=127.0.0.1";
$queryResponse = fz_sql($sql, $bindParams, $dsn, $login, $passwd);

//nome della città dei record selezionati
while ($row = mysqli_fetch_array($result)) {
    echo $row['id_citta'];
}

//link sui record del punto 4 alla pagina /citta.php
while ($row = mysqli_fetch_array($result)) {
    echo '<a href="/citta.php?id=' . $row['id'] . '">' . $row['id_citta'] . '</a>';
}
