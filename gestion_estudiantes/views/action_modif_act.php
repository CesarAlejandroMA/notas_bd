<?php

    require '../models/actividad.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/actividadesController.php';

    use actividad\Actividad;
    use actividadController\ActividadController;

    $nombreEstudiante = $_POST['nombre'];
    $apellidoEstudiante = $_POST['apellido'];

    $actividad = new Actividad();
    $actividad->setId($_POST['id']);
    $actividad->setDescripcion($_POST['descripcion']);
    $actividad->setNota($_POST['nota']);
    $actividad->setCodEstudiante($_POST['codigo']);

    if($actividad->getNota() == null || empty(trim($actividad->getDescripcion()))){
        echo '<div class="alert error">Error: Los campos no pueden ser vacios</div>';
        echo '<a href="../actividades.php?codigo=' . $actividad->getCodEstudiante() . '&nombre=' . $nombreEstudiante . '&apellido=' . $apellidoEstudiante . '">Volver</a>';
    }else{
        $actividadController = new ActividadController();
        $resultado = $actividadController->update($actividad->getId(), $actividad);
        if($resultado){
            echo '<h1>Actividad modificada</h1>';
            echo '<a href="../actividades.php?codigo=' . $actividad->getCodEstudiante() . '&nombre=' . $nombreEstudiante . '&apellido=' . $apellidoEstudiante . '">Volver</a>';
        }else{
            echo '<h1>No se pudo modificar la actividad</h1>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/errores.css">
</head>
<body>
    
</body>
</html>