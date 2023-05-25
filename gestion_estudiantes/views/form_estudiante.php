<?php

    require '../models/estudiante.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/usuariosController.php';

    use estudiante\Estudiante;
    use usuarioController\UsuarioController;

    $code = empty($_GET['codigo'])?'' : $_GET['codigo'];
    $titulo = 'Registrar Estudiante';
    $urlAction = "action_regis_est.php";
    $estudiante = new Estudiante();
    if(!empty($code)){
        $titulo = 'Modificar Estudiante';
        $urlAction = "action_modif_est.php";
        $usuarioController = new UsuarioController();
        $estudiante = $usuarioController->readRow($code);
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <form action="<?php echo $urlAction; ?>" method="post" >
        <label>
            <span>Código:</span>
            <!--
                El value se usa para pasar los datos por post
            -->
            <input class="border-input" type="number" name="codigo" min="1" value="<?php echo $estudiante->getCode(); ?>" require>
        </label>
        <br><br>
        <label>
            <span>Nombre:</span>
            <input class="border-input" type="text" name="nombres" value="<?php echo $estudiante->getFirstName(); ?>" require>
        </label>
        <br><br>
        <label>
            <span>Apellido:</span>
            <input class="border-input" type="text" name="apellidos" value="<?php echo $estudiante->getLastName(); ?>" require>
        </label>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>