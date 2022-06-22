<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$primaGiornata = [
        [
        'squadraOspite' => 'Cesena',
        'punteggioOspite' => 24,
        'squadraCasa' => 'Cosenza',
        'punteggioCasa' => 42,
        ],
        [
        'squadraOspite' => 'Como',
        'punteggioOspite' => 34,
        'squadraCasa' => 'Livorno',
        'punteggioCasa' => 32,
        ],
        [
        'squadraOspite' => 'Perugia',
        'punteggioOspite' => 54,
        'squadraCasa' => 'Padova',
        'punteggioCasa' => 35,
        ],
];
var_dump($primaGiornata);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Prima Giornata</h2>
    <pre>
        <?php print_r ($primaGiornata); ?>
    </pre>
        <ul>
            <?php for($i = 0; $i < count($primaGiornata); $i++) { ?>
                <li><?php echo $primaGiornata[$i]['squadraOspite'] . " - " . $primaGiornata[$i]['squadraCasa'] . " | " . $primaGiornata[$i]['punteggioCasa'] . "-" . $primaGiornata[$i]['punteggioOspite']; ?></li>
            <?php } ?>
        </ul>
    
</body>
</html>