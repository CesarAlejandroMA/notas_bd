<?php 

    namespace baseControler;

    abstract class BaseController{
        abstract function create($model);
        abstract function read();
        abstract function update($code, $model);
        abstract function delete($code);
        abstract function readRow($code);
    }

?>