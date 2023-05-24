<?php 

    namespace baseControler;

    abstract class BaseController{
        abstract function create($model);
        abstract function read();
        abstract function update($code, $model);
        abstract function delete($code);
        abstract function readRow($code);
    }

    abstract class ActBaseController
    {
        abstract function create($model);
        abstract function read($code);
        abstract function readRow($id);
        abstract function update($id, $model);
        abstract function delete($id);
    }

?>