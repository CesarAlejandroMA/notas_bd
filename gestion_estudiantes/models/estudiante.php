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
        public function setCode(){
            $this->code = $value;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function setFirstName(){
            $this->firstName = $value;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function setLastName(){
            $this->lastName = $value;
        }
        
    }

?>