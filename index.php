<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$primaGiornata = [
        [
        'squadraOspite' => 'Cesena',
            ["punteggio" => "24"],
        'squadraCasa' => 'Cosenza',
            ["punteggio" => "42"],
        ],
        [
        'squadraOspite' => 'Como',
            ["punteggio" => "34"],
        'squadraCasa' => 'Livorno',
            ["punteggio" => "32"],
        ],
        [
         'squadraOspite' => 'Perugia',
            ["punteggio" => "54"],
        'squadraCasa' => 'Padova',
            ["punteggio" => "35"],
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
                <li><?php print_r( $primaGiornata['squadraOspite'][$i] . $primaGiornata['squadraCasa'][$i] . $primaGiornata['squadraCasa']['punteggio'][$i] . $primaGiornata['squadraOspite']['punteggio'][$i]); ?></li>
            <?php } ?>
        </ul>
    <ul>
         
            <?php echo $primaGiornata[$i]['squadraOspite']; ?>
        
    </ul>
    
</body>
</html>