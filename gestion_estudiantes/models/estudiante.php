<?php

    namespace estudiante;

    class Estudiante
    {
        private $code;
        private $firstName;
        private $lastName;
        
        public function getCode(){
            return $this->code;
        }
        public function setCode($value){
            $this->code = $value;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function setFirstName($value){
            $this->firstName = $value;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function setLastName($value){
            $this->lastName = $value;
        }
        
    }

?>