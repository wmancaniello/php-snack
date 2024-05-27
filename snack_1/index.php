<?php
$students = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'votes' => [8, 5, 7, 6]
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'votes' => [10, 2, 4]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'votes' => [2, 8]
    ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_1</title>
</head>

<body>

    <?php foreach ($students as $student) : ?>
        <div>
            <h4>Nome: <?php echo $student['name']; ?></h4>
            <h4>Cognome:<?php echo $student['lastname']; ?></h4>
            <p>Media Voti:
                <?php
                // Faccio prima somma
                $somma = array_sum($student['votes']);

                // Media della somma per la lunghezza dell'array votes
                echo $media = $somma / count($student['votes']) ?></p>
        </div>
    <?php endforeach; ?>

</body>

</html>