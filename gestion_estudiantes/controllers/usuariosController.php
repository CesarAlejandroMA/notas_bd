<?php

    namespace usuarioController;

    use baseControler\BaseController;
    use conexionDb\ConexionDbController;
    use estudiante\Estudiante;

    class UsuarioController extends BaseController
    {

        function create($estudiante){
            $sql = 'INSERT INTO estudiantes ';
            $sql .= '(codigo, nombres, apellidos) values';
            $sql .= '(';
            $sql .= $estudiante->getCode(). ',';
            $sql .= '"' . $estudiante->getFirstName(). '",';
            $sql .= '"' . $estudiante->getLastName() . '"';
            $sql .= ')';
            $conexiondb = new ConexionDbController();
            $resultadoSQL = $conexiondb->execSQL($sql);
            $conexiondb->close();
            return $resultadoSQL;
        }

    }

?>