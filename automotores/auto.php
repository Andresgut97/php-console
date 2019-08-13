<?php
    namespace automotores;  
    class auto{
        public $ruedas;
        public $modelo;
        public $puertas;

        function __construct($ruedas, $modelo, $puertas){
            $this->ruedas= $ruedas;
            $this->modelo= $modelo;
            $this->puertas= $puertas;
            
        }
        function getauto(){
            return "El auto es: " . $this->modelo . " y tiene " . $this->puertas . " puertas";
        }
    }
?>