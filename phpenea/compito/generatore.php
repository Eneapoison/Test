<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore</title>
</head>

<body>
    <?php
    // prendere un numero casuale da 0 a 2
    $randomNumber = rand(0, 2);

    // Stampare true, false o forse in base a quel numero 
    if ($randomNumber == 0) {
        echo 'Vero';
    } elseif ($randomNumber == 1) {
        echo 'Falso';
    } else {
        echo 'Forse';
    }
    ?>
</body>

</html>