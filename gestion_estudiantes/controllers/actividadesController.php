<?php

    namespace actividadController;

    use baseControler\BaseController;
    use conexionDb\ConexionDbController;
    use actividad\Actividad;

    class ActividadController extends ActBaseController
    {   

        /*
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

        */

        function create($actividad)
        {
            $sql = 'INSERT INTO actividades';
            $sql .= '(id, descripcion, nota, codigoEstudiante) values';
            $sql .= '(';
            $sql .= $actividad->getId(). ',';
            $sql .= '"' . $actividad->getDescripcion() . '",';
            $sql .= $actividad->getNota(). ',';
            $sql .= $actividad->getCodEstudiante(). ')';
            $conexiondb = new ConexionDbController();
            $resultadoSQL = $conexiondb->execSQL($sql);
            $conexiondb->close();
            return $resultadoSQL;
        }
    }

?>