<?php

    require 'models/estudiante.php';
    require 'models/actividad.php';

    use estudiante\Estudiante;
    use actividad\Actividad;

    $codigoEstudiante = $_GET['codigo'];
    $nombreEstudiante = $_GET['nombre'];
    $apellidoEstudiante = $_GET['apellido'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
</head>

<body>
    
</body>

    <main>
            <h1>Actividades</h1>
            <?php //echo '<p>El código del estudiante es: ' . $codigoEstudiante . '</p>';?>

            <?php
            
            echo '<h3>Código: ' . $codigoEstudiante . '</h3>';
            echo '<h3>Nombre: ' . $nombreEstudiante . '</h3>';
            echo '<h3>Apellido: ' . $apellidoEstudiante . '</h3>';
            
            ?>

            <br>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Actividad</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /*
                    foreach($estudiantes as $estudiante){
                        echo '<tr>';
                        echo '<td>' . $estudiante->getCode() . '</td>';
                        echo '<td>' . $estudiante->getFirstName() . '</td>';
                        echo '<td>' . $estudiante->getLastName() . '</td>';
                        echo '<td>';
                        echo '      <a href="views/form_estudiante.php?codigo=' . $estudiante->getCode() . '">Modificar</a>';
                        echo '      <a href="views/action_elim_est.php?codigo=' . $estudiante->getCode() . '">Eliminar</a>';
                        echo '      <a href="notas.php">Notas</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    */
                    ?>
                </tbody>
            </table>
            <br><br>
            <p>Promedio: </p>

                
            <!--
            <a href="views/form_actividad.php?codigo=
            <?php //echo $codigoEstudiante; ?>&nombre=
            <?php //echo $nombreEstudiante; ?>&apellido=
            <?php //echo $apellidoEstudiante; ?>">Agregar actividad</a><br>
            -->

            <?php

            echo '<form action="views/form_actividad.php" method="post">';
            echo '<input type="hidden" name="codigo" value="' . $codigoEstudiante . '">';
            echo '<input type="hidden" name="nombre" value="' . $nombreEstudiante . '">';
            echo '<input type="hidden" name="apellido" value="' . $apellidoEstudiante . '">';
            echo '<button type="submit">Agregar actividad</button>';
            echo '</form>';

            ?>


            <a href="index.php">Volver</a>
        </main>

</html>