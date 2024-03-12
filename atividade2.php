<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // A partir do PHP 7
    define('ANIMALS', array(
        'dog',
        'cat',
        'bird'
    ));
    echo ANIMALS[1]; // imprime "cat"
    ?>

    <?php
    // A partir do PHP 7
    define('Lojinha', array(
        'Base Dior',
        'Lipbalm  Mari Maria',
        'Gloss Kiko',
        'Delineado Ruby Rose',
        'Corretivo YSL'
    ));
    echo Lojinha[2]; // imprime "Gloss Kiko"
    ?>

    <?php
    // A partir do PHP 7
    define('Danoninho', array(
        'Iogurte Natural',
        'Iorgute Saborizado',
        'Iogurte Grego',
        'Iogurte Desnatado',
        'Iogurte Zero Açúcares'
    ));
    echo Danoninho[4]; // imprime "Zero Açúcares"
    ?>
</body>
</html>