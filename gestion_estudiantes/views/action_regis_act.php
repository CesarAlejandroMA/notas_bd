<?php

    require '../models/actividad.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/actividadesController.php';

    use estudiante\Estudiante;
    use actividadController\ActividadController;

    $codigoEstudiante = $_GET['codigo'];
    $nombreEstudiante = $_GET['nombre'];
    $apellidoEstudiante = $_GET['apellido'];

    $estudiante->setCode($_POST['codigo']);
    $actividad = new Actividad();
    $actividad->setId

?>