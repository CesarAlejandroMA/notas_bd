<?php

    require '../models/estudiante.php';
    require '../controllers/conexionDbController.php';
    require '../controllers/baseController.php';
    require '../controllers/usuariosController.php';

    use estudiante\Estudiante;
    use usuarioController\UsuarioController;

    $code = empty($_GET['code'])?'' : $_GET['code'];
    $titulo = 'Registrar Estudiante';
    $urlAction = "action_regis_est.php";
    $estudiante = new Estudiante();
    
    /*
    value="<?php echo $usuario->getCode(); ?>"
    value="<?php echo $usuario->getFirstName(); ?>"
    value="<?php echo $usuario->getLastName(); ?>"
    */

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <form action="<?php echo $urlAction; ?>" method="post">
        <label>
            <span>Código:</span>
            <input type="number" name="code" min="1"  require>
        </label>
        <br>
        <label>
            <span>Nombre:</span>
            <input type="text" name="firstName"  require>
        </label>
        <br>
        <label>
            <span>Apellido:</span>
            <input type="text" name="lastName"  require>
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>