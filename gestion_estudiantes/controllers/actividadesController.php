<?php

    namespace actividadController;

    use baseControler\ActBaseController;
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
            $sql .= '(descripcion, nota, codigoEstudiante) values';
            $sql .= '(';
            $sql .= '"' . $actividad->getDescripcion() . '",';
            $sql .= $actividad->getNota(). ',';
            $sql .= $actividad->getCodEstudiante(). ')';
            $conexiondb = new ConexionDbController();
            $resultadoSQL = $conexiondb->execSQL($sql);
            $conexiondb->close();
            return $resultadoSQL;
        }

        /*
        function readRow($code){
            $sql = 'SELECT * FROM estudiantes';
            $sql .= ' WHERE codigo=' .$code;
            $conexiondb = new ConexionDbController();
            $resultadoSQL = $conexiondb->execSQL($sql);
            $estudiante = new Estudiante();
           while($registro = $resultadoSQL -> fetch_assoc()){
                $estudiante -> setCode($registro['codigo']);
                $estudiante -> setFirstName($registro['nombres']);
                $estudiante -> setLastName($registro['apellidos']);
           } 
           $conexiondb->close();
           return $estudiante;
        }
        

        function read(){
            $sql = 'SELECT * FROM estudiantes';
            $conexiondb = new ConexionDbController();
            $resultadoSQL = $conexiondb->execSQL($sql);
            $estudiantes = [];
           while($registro = $resultadoSQL -> fetch_assoc()){
                $estudiante = new Estudiante();
                $estudiante -> setCode($registro['codigo']);
                $estudiante -> setFirstName($registro['nombres']);
                $estudiante -> setLastName($registro['apellidos']);
                array_push($estudiantes, $estudiante);
           } 
           $conexiondb->close();
           return $estudiantes;
        }
        */

        function readRow($code)
        {
            $sql = 'SELECT * FROM actividades';
            $sql .= ' WHERE codigoEstudiante= ' .$code;
            $conexiondb = new ConexionDbController();
            $resultadoSQL = $conexiondb->execSQL($sql);
            $actividades = [];
           while($registro = $resultadoSQL -> fetch_assoc()){
            $actividad = new Actividad();
            $actividad -> setId($registro['id']);
            $actividad -> setDescripcion($registro['descripcion']);
            $actividad -> setNota($registro['nota']);
            $actividad -> setCodEstudiante($code);
            array_push($actividades, $actividad);
           } 
           $conexiondb->close();
           return $actividades;
        }

    }

?>