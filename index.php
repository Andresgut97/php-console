<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Consola de PHP</title>
</head>
<body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Consola PHP</a>
        </nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                 <h1 class="display-4">Consola de PHP</h1>
                 <p class="lead">Esto es una consola </p>
            </div>  
        </div>
        <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="p-3 m-1 bg-secondary text-white">
                        <h2>Clase:Metodos Estatico</h2>
                            <?php
                            class calculadora
                            {
                                public static function sumar($num1, $num2){
                                    return $num1 + $num2;
                                }
                                public static function restar($num1, $num2){
                                    return $num1 - $num2;
                                }

                            }
                            echo "El resultado de la suma es " . calculadora::sumar(1,1);
                            /*
                            $calcular =new calculadora();
                            echo "El resultado de la suma es " . $calcular->sumar(1,1);*/
                            ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="p-3 m-1 bg-warning text-white">
                        <h2>Clase:PPO</h2>
                            <?php
                                /*class mascota{
                                    public $nombre;
                                    public $tipo;
                                    public $patas;
                                    function __construct($nombre, $tipo , $patas){
                                        $this ->nombre = $nombre;
                                        $this ->tipo= $tipo;
                                        $this ->patas = $patas;
                                       
                                    }
                                    public function getDesc(){
                                        if($this->patas== 0 ){
                                            return "Tu mascota es un " . $this->tipo . " se llama " . $this->nombre . " y no tiene patas";
                                        }
                                        else{
                                            return "Tu mascota es un " . $this->tipo . " se llama " . $this->nombre . " y tiene " . $this->patas . " patas ";
                                        }
                                       
                                    }
                                }
                                $perro= new mascota("Tommy", "perro" ,4);
                                $gato= new mascota("Sarah", "gato" , 4);
                                $pez= new mascota("Flipy", "pez" , 0);
                                echo $perro->getDesc(). "<br>";
                                echo $gato->getDesc(). "<br>";
                                echo $pez->getDesc();
                                */
                            ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="p-3 m-1 bg-info text-white">
                        <h2>Clase:Herencia</h2>
                            <?php
                                class mascota{
                                    function __construct($nombre, $patas){
                                        $this->nombre=$nombre;
                                        $this->patas=$patas;
                                    }
                                    function eat(){
                                        return "Estoy comiendo";
                                    }
                                }
                                class perro extends mascota{
                                    function run(){
                                        return "Estoy corriendo";   
                                    }
                                }
                                class gato extends mascota{
                                    function mauyar(){
                                        return "Estoy mauyando";
                                    }
                                }
                                $tomy = new perro("Tomy",4);
                                $rocky= new gato("Rocky",4);
                                echo $tomy-> eat(). "<br>";
                                echo $rocky->eat() . " y " . $rocky-> mauyar();
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-3 m-1 bg-info text-white">
                        <h2>Clase: Funciones</h2>
                            <?php
                                function calc($signo, $num1, $num2){
                                    switch($signo){
                                        case "+":
                                            return $num1 + $num2;
                                            break;
                                        case "-":
                                            return $num1 - $num2;
                                            break;
                                        case "*":
                                            return $num1 * $num2;
                                            break;
                                        case "/":
                                            return $num1 / $num2;
                                            break;
                                    }
                                }
                                $resultado= calc("*",3,3);
                                echo "el resultado es: " . $resultado;
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="p-3 m-1 bg-success text-white">
                        <h2>Clase: Break</h2>
                            <?php
                                $name= array("Max", "Tom","Sarah", "Rocky");
                                foreach($name as $name)
                                {
                                    if($name == "Tom"){
                                        break;
                                    }
                                    echo $name . "<br>";
                                }
                            ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 m-1 bg-success text-white">
                        <h2>Clase: Continue</h2>
                            <?php
                            $name= array("Max", "Tom","Sarah", "Rocky");
                            foreach($name as $name)
                            {
                                if($name == "Sarah"){
                                    continue;
                                }
                                echo $name . "<br>";
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="p-3 m-1 bg-danger text-while">
                        <h2>Clase: Array</h2>
                        <?php
                            $num= array(1,2,4,5);
                            for($i=0; $i < count($num);$i++)
                            {
                                echo $num[$i] . "<br>";
                            }
                        ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 m-1 bg-warning text-while">
                        <h2>Clase: foreach</h2>
                        <?php
                            $num = array("Max", "Tom", "John", "Sarah");
                            foreach($num as $num)
                            {
                                echo $num . "<br>";
                            }   
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="p-3 m-1 bg-primary text-white">
                        <h2>Clase: Bucle While</h2>
                        <?php
                            $num=1;
                            while ($num < 5){
                                $num ++;
                                echo "El numero es: " . $num . "<br>";
                            }
                        ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3 m-1 bg-dark text-white">
                        <h2>Clase: Bucle For</h2>
                        <?php
                            $num= 12;
                            for ($i = 1; $i < 5; $i++){
                                echo $i. "<br>";
                            }
                        ?>
                    </div>
                </div>  
            </div>    
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-3 m-1 bg-warning text-white">
                        <h2>Clase Condicional-Swicht</h2>
                        <?php
                            $num=10;
                            /*if  ($num==1){
                                echo "L acalificaion es muy baja";
                            }
                            else if ($num==2 || $num== 4)
                            {
                                echo "La calificaion es mediocre";
                            }*/
                            switch($num)
                            {
                                case 1:
                                    echo "la calificación es baja";
                                    break;
                                case 2:
                                case 4: 
                                    echo "La calificación sigue siendo baja";
                                    break;
                                case 6:
                                    echo "Es una clasificacion mediocre";
                                    break;
                                case 8: 
                                    echo "La calificación es buena";
                                    break;
                                case 10:
                                    echo "La calificación es excelente";
                                    break;
                                default: 
                                    echo "La calificacion no es válida";
                            }
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-3 m-1 bg-primary text-white">
                        <h2>Clase: Condicional - IF</h2>
                            <?php
                            $name= "Arian";
                            if($name == "Ariany")
                            {
                                echo "Ariany tiene olor a culito y su sapito tambien";
                            }
                            else if ($name == "Ariane")
                            {   
                                echo "Y su culito apesta";
                            }
                            else
                            {
                                echo "no puede ser el indicado";
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-3 m-1 bg-dark text-white">
                        <h2>Clase: Operadores</h2>
                            <?php
                                $num1= 2;
                                $num2=50;
                                $resultado= $num1 + $num2;
                                echo "El resultado es: " . $resultado;
                            ?>
                    </div>
                </div>
            </div>
            <div class="row">
                   <div class="col-12">
                     <div class="p-3 m-1 bg-danger text-white">
                        <h2>Variable y tipos de datos </h2>
                            <?php
                                //string
                                $name = "Max";
                                //boolean
                                $isold = true;
                                //integer
                                $year =1990;
                                //Float
                                $mts=   54.4;
                                echo "Hola ". $name. " naciste en el espacio ". $year . " y estas a KM.: ". $mts;
                                echo "<br> La variable Name es de tipo: ". gettype($name);
                            ?>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>