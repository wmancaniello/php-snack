<?php
$matches = [
    [
        'homeTeam' => 'Olimpia Milano',
        'awayTeam' => 'Cantù',
        'homePoints' => 55,
        'awayPoints' => 60
    ],
    [
        'homeTeam' => 'Virtus Bologna',
        'awayTeam' => 'Treviso',
        'homePoints' => 78,
        'awayPoints' => 70
    ],
    [
        'homeTeam' => 'Reyer Venezia',
        'awayTeam' => 'Pallacanestro Varese',
        'homePoints' => 85,
        'awayPoints' => 80
    ],
    [
        'homeTeam' => 'Dinamo Sassari',
        'awayTeam' => 'Aquila Trento',
        'homePoints' => 65,
        'awayPoints' => 68
    ],
    [
        'homeTeam' => 'Pallacanestro Trieste',
        'awayTeam' => 'Fortitudo Bologna',
        'homePoints' => 90,
        'awayPoints' => 88
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($matches as $match) : ?>

            <li><?php echo $match['homeTeam'] . ' - ' . $match['awayTeam'] . ' - ' . $match['homePoints'] . ' | ' . $match['awayPoints'] ?></li>

        <?php endforeach; ?>

        
    </ul>
</body>

</html>