<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <table border="1">
        <?php for ($fila = 0; $fila <= 10; $fila++) { ?>
            <tr>
                <?php for ($columna = 0; $columna <= 10; $columna++) { ?>
                    <?php if ($fila == 0 || $columna == 0) { ?>
                        
                        <th>
                            <?php
                            if ($fila == 0 && $columna == 0) {
                                echo "/";
                            } elseif ($fila == 0) {
                                echo $columna;
                            } else {
                                echo $fila;
                            }
                            ?>
                        </th>
                    <?php } else { ?>
                        <td>
                            <?= $fila * $columna ?>
                        </td>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>