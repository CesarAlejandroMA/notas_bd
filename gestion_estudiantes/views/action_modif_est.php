<?php

    require '../models/estudiante.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/usuariosController.php';
    use estudiante\Estudiante;
    use usuarioController\UsuarioController;

    $estudiante = new Estudiante();
    $estudiante->setCode($_POST['codigo']);
    $estudiante->setFirstName($_POST['nombres']);
    $estudiante->setLastName($_POST['apellidos']);

    $usuarioController = new UsuarioController();
    $resultado = $usuarioController->update($estudiante->getCode(), $estudiante);
    if($resultado){
        echo '<h1>Estudiante modificado</h1>';
    }else{
        echo '<h1>No se pudo modificar el estudiante</h1>';
    }
?>

<br>
<a href="../index.php">Volver</a>