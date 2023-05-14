<?php

    require '../models/estudiante.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/usuariosController.php';
    use estudiante\Estudiante;
    use usuarioController\UsuarioController;

    $estudiante = new Estudiante();
    $estudiante->setCode($_POST['code']);
    $estudiante->setFirstName($_POST['firstName']);
    $estudiante->setLastName($_POST['lastName']);

    $usuarioController = new UsuarioController();
    $resultado = $usuarioController->Create($estudiante);
    if($resultado){
        echo '<h1>Estudiante Registrado</h1>';
    }else{
        echo '<h1>No se pudo registrar el estudiante</h1>';
    }

?>