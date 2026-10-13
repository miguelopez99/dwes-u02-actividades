<?php
$frase = "Al cabo de un rato vi las abejas en la colmena y las cifras en mi cuenta";

$fraseInvertida = strrev($frase);
$posicionCifras = strpos($frase, "cifras");

$posicionCabo   = strpos($frase, "cabo");
$textoPostCabo  = substr($frase, $posicionCabo + 4);

$cantidadDe     = substr_count($frase, "de");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Analizando una Frase</title>
</head>
<body>

    <h2>Análisis de la Frase</h2>

    <p><strong>Frase original:</strong><br> "<?= $frase ?>"</p>

    <hr>

    <ul>
        <li><strong>Frase invertida:</strong><br> <?= $fraseInvertida ?></li>
        
        <li><strong>Posición de la palabra "cifras":</strong> Carácter número <?= $posicionCifras ?></li>
        
        <li><strong>Texto posterior a la palabra "cabo":</strong> "<?= $textoPostCabo ?>"</li>
        
        <li><strong>Apariciones de la palabra "de":</strong> <?= $cantidadDe ?> veces</li>
    </ul>

</body>
</html>