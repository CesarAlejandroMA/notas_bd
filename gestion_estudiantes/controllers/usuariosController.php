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

        function update($code, $estudiante){
            $sql = 'UPDATE estudiantes SET ';
            $sql .= 'codigo = ' .$estudiante->getCode() . ',';
            $sql .= 'nombres = "' . $estudiante->getFirstName() . '",';
            $sql .= 'apellidos = "' . $estudiante->getLastName() . '" ';
            $sql .= 'WHERE codigo = ' .$code;
            $conexiondb = new ConexionDbController();
            $resultadoSQL = $conexiondb->execSQL($sql);
            $conexiondb->close();
            return $resultadoSQL;
        }

    }

?>