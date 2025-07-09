<?php
    require_once "llaves_casa.php";
    require_once "llaves_coche.php";
    require_once "cartera.php";
    require_once "smartphone.php";

    class Bolso {
        private $llaves_casa;
        private $llaves_coche;
        private $cartera;
        private $smartphone;

        public function __construct(Llaves_casa $llaves_casa, Llaves_coche $llaves_coche, Cartera $cartera, Smartphone $smartphone) {
            $this->llaves_casa = $llaves_casa;
            $this->llaves_coche = $llaves_coche;
            $this->cartera = $cartera;
            $this->smartphone = $smartphone;
        }
        public function llenar(){
            echo "todo listo, GO ON!!";
        }
    }
?>