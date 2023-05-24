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
    $actividad->setDescripcion($_POST['descripcion']);
    $actividad->setNota($_POST['nota']);
    $actividad->setCodEstudiante($_POST['codigo']);

    $actividadController = new ActividadController();
    $resultado = $actividadController->Create($actividad);
    if($resultado){
        echo '<h1>Actividad Registrada</h1>';
        //El a href de actividades.php sirve para envíar por GET los datos del código, nombre y apellido que se requiere en el fichero, pues ingresando por index.php también le llegan los datos por GET
        echo '<a href="../actividades.php?codigo=' . $actividad->getCodEstudiante() . '&nombre=' . $nombreEstudiante . '&apellido=' . $apellidoEstudiante . '">Volver</a>';
    }else{
        echo '<h1>No se pudo registrar la actividad</h1>';
    }

?>