<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("CONSTANT", "Hello world.");
echo CONSTANT; // imprime "Hello word."
echo Constant; // imprime "Constant" e gera um alerta notice.
?>
</body>
</html>