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

    if($estudiante->getCode() == null || empty(trim($estudiante->getFirstName())) || empty(trim($estudiante->getLastName()))){
        echo '<div class="alert error">Error: Los campos no pueden ser vacios</div>';
    }else{
        $usuarioController = new UsuarioController();
        $resultado = $usuarioController->Create($estudiante);
        if($resultado){
            echo '<h1>Estudiante Registrado</h1>';
        }else{
            echo '<h1>No se pudo registrar el estudiante</h1>';
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
<br>
<a href="../index.php">Volver</a>