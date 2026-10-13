<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generando HTML</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; }
        article { margin-bottom: 40px; padding-bottom: 20px; border-bottom: 2px solid #ccc; }
    </style>
</head>
<body>

    <h2>Menú de Secciones</h2>
    <ul>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<li><a href='#sec$i'>Sección $i</a></li>";
        }
        ?>
    </ul>

    <section>
        <article id="sec1">
            <h1>Sección 1: Evaluación de Número</h1>
            <?php
            $num1 = rand(-200, 200);
            echo "<p>Número generado: <strong>$num1</strong></p>";
            
            if ($num1 < 0) {
                echo "<p>El número es negativo.</p>";
            } elseif ($num1 > 0) {
                echo "<p>El número es positivo.</p>";
            } else {
                echo "<p>El número es cero.</p>";
            }
            ?>
        </article>

        <article id="sec2">
            <h1>Sección 2: Calificación</h1>
            <?php
            $nota = rand(0, 10);
            echo "<p>Nota generada: <strong>$nota</strong></p>";
            
            switch ($nota) {
                case 0: case 1: case 2: case 3: case 4:
                    echo "<p>Calificación: Insuficiente</p>";
                    break;
                case 5:
                    echo "<p>Calificación: Suficiente</p>";
                    break;
                case 6:
                    echo "<p>Calificación: Bien</p>";
                    break;
                case 7: case 8:
                    echo "<p>Calificación: Notable</p>";
                    break;
                case 9: case 10:
                    echo "<p>Calificación: Sobresaliente</p>";
                    break;
            }
            ?>
        </article>

        <article id="sec3">
            <h1>Sección 3: Tabla de Multiplicar</h1>
            <?php
            $numMultiplicar = rand(0, 100);
            echo "<p>Tabla del <strong>$numMultiplicar</strong> hasta el 20:</p>";
            echo "<table>";
            for ($i = 0; $i <= 20; $i++) {
                $resultado = $numMultiplicar * $i;
                echo "<tr><td>$numMultiplicar x $i</td><td>$resultado</td></tr>";
            }
            echo "</table>";
            ?>
        </article>

        <article id="sec4">
            <h1>Sección 4: Coordenadas</h1>
            <?php
            $filas = rand(3, 8);
            $columnas = rand(3, 8);
            echo "<p>Tabla de $filas filas x $columnas columnas:</p>";
            
            echo "<table>";
            for ($f = 0; $f < $filas; $f++) {
                echo "<tr>";
                for ($c = 0; $c < $columnas; $c++) {
                    echo "<td>" . $f . "x" . $c . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </article>

        <article id="sec5">
            <h1>Sección 5: Desglose de Dinero</h1>
            <?php
            $dinero = rand(1, 1000);
            echo "<p>Cantidad a desglosar: <strong>$dinero €</strong></p>";

            $b500 = intval($dinero / 500);
            $resto = $dinero % 500;

            $b200 = intval($resto / 200);
            $resto = $resto % 200;

            $b100 = intval($resto / 100);
            $resto = $resto % 100;

            $b50 = intval($resto / 50);
            $resto = $resto % 50;

            $b20 = intval($resto / 20);
            $resto = $resto % 20;

            $b10 = intval($resto / 10);
            $resto = $resto % 10;

            $b5 = intval($resto / 5);
            $resto = $resto % 5;

            $m2 = intval($resto / 2);
            $resto = $resto % 2;

            $m1 = intval($resto / 1);

            echo "<ul>";
            echo "<li>Billetes de 500€: $b500</li>";
            echo "<li>Billetes de 200€: $b200</li>";
            echo "<li>Billetes de 100€: $b100</li>";
            echo "<li>Billetes de 50€: $b50</li>";
            echo "<li>Billetes de 20€: $b20</li>";
            echo "<li>Billetes de 10€: $b10</li>";
            echo "<li>Billetes de 5€: $b5</li>";
            echo "<li>Monedas de 2€: $m2</li>";
            echo "<li>Monedas de 1€: $m1</li>";
            echo "</ul>";
            ?>
        </article>
    </section>

</body>
</html>