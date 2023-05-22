<?php

    require 'models/estudiante.php';
    require 'controllers/conexionDbController.php';
    require 'controllers/baseController.php';
    require 'controllers/usuariosController.php';

    use usuarioController\UsuarioController;

    $usuarioController = new UsuarioController();

    $estudiantes = $usuarioController->read();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>

<body>
    <main>
        <h1>Estudiantes registrados</h1>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($estudiantes as $estudiante){
                    echo '<tr>';
                    echo '<td>' . $estudiante->getCode() . '</td>';
                    echo '<td>' . $estudiante->getFirstName() . '</td>';
                    echo '<td>' . $estudiante->getLastName() . '</td>';
                    echo '<td>';
                    echo '      <a href="views/form_estudiante.php?codigo=' . $estudiante->getCode() . '">Modificar</a>';
                    echo '      <a href="views/action_elim_est.php?codigo=' . $estudiante->getCode() . '">Eliminar</a>';
                    echo '      <a href="actividades.php?codigo=' . $estudiante->getCode() . '&nombre=' . $estudiante->getFirstName() . '&apellido=' . $estudiante->getLastName() . '">Notas</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="views/form_estudiante.php">Agregar estudiante</a>
    </main>
</body>

</html>