<?php
$num1 = 10;
$num2 = 5;

$suma           = $num1 + $num2;
$resta          = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division       = $num1 / $num2;
$modulo         = $num1 % $num2;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculando</title>
</head>
<body>

    <h2>Calculando</h2>

    <h3>Operaciones Básicas entre <?= $num1 ?> y <?= $num2 ?></h3>
    <ul>
        <li>Suma: <?= $suma ?></li>
        <li>Resta: <?= $resta ?></li>
        <li>Multiplicación: <?= $multiplicacion ?></li>
        <li>División: <?= $division ?></li>
        <li>Módulo (resto): <?= $modulo ?></li>
    </ul>

    <h3>Comparación</h3>
    <p>
        <?php
        if ($num1 > $num2) {
            echo "El número $num1 es MAYOR que $num2.";
        } elseif ($num2 > $num1) {
            echo "El número $num2 es MAYOR que $num1.";
        } else {
            echo "Ambos números son IGUALES ($num1).";
        }
        ?>
    </p>

    <h3>Paridad (Par o Impar)</h3>
    <p>
        <?php
        if ($num1 % 2 == 0) {
            echo "El número $num1 es PAR.<br>";
        } else {
            echo "El número $num1 es IMPAR.<br>";
        }

        if ($num2 % 2 == 0) {
            echo "El número $num2 es PAR.";
        } else {
            echo "El número $num2 es IMPAR.";
        }
        ?>
    </p>

</body>
</html>