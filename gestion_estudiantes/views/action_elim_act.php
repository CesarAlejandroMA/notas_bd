<?php

    require '../models/actividad.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/actividadesController.php';

    use actividadController\ActividadController;

    $id = $_GET['id'];
    $codigoEstudiante = $_GET['codigo'];
    $nombreEstudiante = $_GET['nombre'];
    $apellidoEstudiante = $_GET['apellido'];

    $actividadController = new ActividadController();
    $resultado = $actividadController->delete($id);
    if($resultado){
        echo '<h1>Actividad Eliminada</h1>';
        //echo '<a href="../actividades.php?codigo=' . $actividad->getCodEstudiante() . '&nombre=' . $nombreEstudiante . '&apellido=' . $apellidoEstudiante . '">Volver</a>';
    }else{
        echo '<h1>No se pudo modificar la actividad</h1>';
    }

    echo '<a href="../actividades.php?codigo=' . $codigoEstudiante . '&nombre=' . $nombreEstudiante . '&apellido=' . $apellidoEstudiante . '">Volver</a>';

?>