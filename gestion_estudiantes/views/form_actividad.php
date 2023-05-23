<?php

    require '../models/actividad.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/actividadesController.php';

    use actividad\Actividad;
    use actividadController\ActividadController;

    $codigoEstudiante = $_POST['codigo'];
    $nombreEstudiante = $_POST['nombre'];
    $apellidoEstudiante = $_POST['apellido'];

    $titulo = 'Registrar Actividad';
    $urlAction = "action_regis_act.php";
    $actividad = new Actividad();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar actividad</title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
        <form action="<?php echo $urlAction; ?>" method="post">
        <label>
            <span>Código: <?php echo $codigoEstudiante ?></span>
            <input type="hidden" name="codigo" value="<?php echo $codigoEstudiante ?>">
            <br>
        </label>
        <label>
            <span>Nombre: <?php echo $nombreEstudiante ?></span>
            <input type="hidden" name="nombre" value="<?php echo $nombreEstudiante ?>">
            <br>
        </label>
        <label>
            <span>Apellido: <?php echo $apellidoEstudiante ?></span>
            <input type="hidden" name="apellido" value="<?php echo $apellidoEstudiante ?>">
            <br>
        </label>
        <label>
            <span>Descripción: </span>
            <textarea name="descripcion" cols="30" rows="10" value="<?php echo $actividad->getDescripcion(); ?>" ></textarea>
            <br>
        </label>
        <label>
            <span>Nota: </span>
            <input type="number" name="nota" value="<?php echo $actividad->getNota(); ?>" require>
            <br>
        </label>
        <br>
        <button type="submit">Guardar</button>
        </form>

        <a href="../actividades.php">Volver</a>
</body>

</html>