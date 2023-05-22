<?php

    require '../models/actividad.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/actividadesController.php';

    use estudiante\Estudiante;
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
        </label>
        <label>
            <span>Nombre: <?php echo $nombreEstudiante ?></span>
        </label>
        <label>
            <span>Apellido: <?php echo $apellidoEstudiante ?></span>
        </label>
        <label>
            <span>Descripción: </span>
            <textarea name="descripcion" cols="30" rows="10"></textarea>
        </label>
        <label>
            <span>Nota: </span>
            <input type="number" name="nota" require>
        </label>
        <br>
        <button type="submit">Guardar</button>
        </form>
</body>

</html>