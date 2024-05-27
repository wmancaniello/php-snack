<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$validate = "Accesso riuscito!";

// Controllo che il nome sia più lungo di 3 caratteri
if (strlen($name) <= 3) {
    $validate = "Accesso negato!";
}

// Verifico che mail contenga un punto e una @
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $validate = "Accesso negato!";
}

// Verifico che age sia un numero
if (!is_numeric($age)) {
    $validate = "Accesso negato!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1><?php echo $validate; ?></h1>
    </div>
</body>

</html>

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>