<?php 
    class User {
        private $id;
        private $name;
        private $lastName;
        private $idNumber;

        public function __construct(
            $idp, 
            $namep, 
            $lastNameP, 
            $idNumberp)
        {
            $this->id =$idp;
            $this->name = $namep;
            $this->lastName = $lastNameP;
            $this->idNumber = $idNumberp;
        }

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function getIdNumber() {
            return $this->idNumber;
        }

    }
?>