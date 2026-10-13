<?php
$personas = [
    [
        'nombre' => 'Daniel',
        'altura' => 1.73,
        'email' => 'daniel@gmail.com',
    ],
    [
        'nombre' => 'Miguel Angel',
        'altura' => 1.94,
        'email' => 'miguel@gmail.com',
    ],
    [
        'nombre' => 'Roberto',
        'altura' => 1.80,
        'email' => 'roberto@gmail.com',
    ],
    [
        'nombre' => 'Marcos',
        'altura' => 1.71,
        'email' => 'roberto@gmail.com',
    ],
    [
        'nombre' => 'Alejandro',
        'altura' => 1.76,
        'email' => 'roberto@gmail.com',
    ],
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personas</title>
</head>
<body>
    <h2>Personas</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Altura</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tbody>
        <?php foreach ($personas as $persona) { ?>
            <tr>
                <td><?= $persona['nombre'] ?></td>
                <td><?= $persona['altura'] ?></td>
                <td><?= $persona['email'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>