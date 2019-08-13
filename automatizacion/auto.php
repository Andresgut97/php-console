<?php
    namespace automatizacion;
    class auto{
        public $date;
        public $intents;
        public $description;

        function __construct($date, $intents,$description){
            $this->date=$date;
            $this->intents=$intents;
            $this->description=$description;
        }
        
        function getauto(){
            return "La descripcion es: " . $this->description . " con " . $this->intents . " intentos y se ejecutara el dia " . $this->date;
        }
    }
?>