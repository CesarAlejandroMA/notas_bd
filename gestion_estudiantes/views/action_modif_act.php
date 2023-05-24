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

    $actividadController = new ActividadController();
    $resultado = $actividadController->update($actividad->getId(), $actividad);
    if($resultado){
        echo '<h1>Actividad modificada</h1>';
        echo '<a href="../actividades.php?codigo=' . $actividad->getCodEstudiante() . '&nombre=' . $nombreEstudiante . '&apellido=' . $apellidoEstudiante . '">Volver</a>';
    }else{
        echo '<h1>No se pudo modificar la actividad</h1>';
    }

?>