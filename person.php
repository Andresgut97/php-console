<?php
class persona{
    public $firstname;
    public $lastname;

    function __construct($firstname, $lastname){
        $this->firstname= $firstname;
        $this->lastname= $lastname;

    }
    function greetings(){
        return "Hola " . $this->firstname . " " . $this->lastname;
    }
}
?>