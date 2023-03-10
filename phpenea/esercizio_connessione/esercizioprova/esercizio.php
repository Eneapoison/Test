<?php
// Collegamento al database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ifts";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Elenca tutte le città del Sud
$sql = "SELECT nome, regione FROM citta WHERE regione = 'Sud'";
$result = $conn->query($sql);

// Stampa il numero di città elencate
$num_citta = $result->num_rows;
echo "Numero di città nel Sud: " . $num_citta . "<br>";

// Crea un array delle regioni e conta le città per regione
$regioni = array();
$sql = "SELECT regione FROM citta WHERE regione = 'Sud'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $regione = $row['regione'];
    if (array_key_exists($regione, $regioni)) {
        $regioni[$regione]++;
    } else {
        $regioni[$regione] = 1;
    }
}

// Trova la regione con il maggior numero di città
$max_citta = 0;
$max_regione = '';
foreach ($regioni as $regione => $num_citta) {
    if ($num_citta > $max_citta) {
        $max_citta = $num_citta;
        $max_regione = $regione;
    }
}

echo "La regione con più città è: " . $max_regione . "<br>";

// Definizione della classe Regione
class Regione {
    private $nome;
    public $numeroCittaCollegate;

    function __construct($nome) {
        $this->nome = $nome;
        $this->numeroCittaCollegate = 0;
    }

    function valorizzaNumeroCitta($conn) {
        $sql = "SELECT COUNT(*) AS num_citta FROM citta WHERE regione = '" . $this->nome . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $this->numeroCittaCollegate = $row['num_citta'];
    }
}

// Esempio di utilizzo della classe Regione
$calabria = new Regione('Calabria');
$calabria->valorizzaNumeroCitta($conn);
echo "La Calabria ha " . $calabria->numeroCittaCollegate . " città collegate nel database.";
?>
