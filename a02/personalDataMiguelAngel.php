<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha Personal</title>
</head>
<body>
<?php
    $persona = [
        'nombre' => 'Miguel Angel',
        'apellidos' => 'Lopez Blasco',
        'email' => 'miguel@gmail.com',
        'fecha_nacimiento' => '13/11/2007',
        'num_telefono' => '606884765',
];
?>
    <h2>Ficha Personal</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Fecha de Nacimiento</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $persona['nombre'] ?></td>
            <td><?= $persona['apellidos'] ?></td>
            <td><?= $persona['email'] ?></td>
            <td><?= $persona['fecha_nacimiento'] ?></td>
            <td><?= $persona['num_telefono'] ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>