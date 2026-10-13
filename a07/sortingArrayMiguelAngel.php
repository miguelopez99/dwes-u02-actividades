<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenando datos</title>
</head>
<body>
<h2>Array original</h2>
    <p>
        <?php
        $numeros = [10, 9, 1, 2, 4, 5, 8, 7, 6, 3];

        for ($i = 0; $i < count($numeros); $i++) {
            echo $numeros[$i] . " ";
        }
        ?>
    </p>
    <?php
    for ($i = 0; $i < count($numeros) - 1; $i++) {
        $posicionMinima = $i;

        for ($j = $i + 1; $j < count($numeros); $j++) {
            if ($numeros[$j] < $numeros[$posicionMinina]) {
                $posicionMinima = $j;
            }
        }
        $aux = $numeros[$i];
        $numeros[$i] = $numeros[$posicionMinima];
        $numeros[$posicionMinima] = $aux;
    }
    ?>
<h2>Array ordenado</h2>
    <p>
        <?php
        for ($i = 0; $i < count($numeros); $i++) {
            echo $numeros[$i] . " ";
        }
        ?>
    </p>
</body>
</html>