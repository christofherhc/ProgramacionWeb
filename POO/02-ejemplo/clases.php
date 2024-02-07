<?php
/*
Clases: una plantilla de la cual me basare para crear objetos
Objeto: es un elemento del mundo real
*/
class Persona{
    //Atributos - Propiedades
    public $nombre;
    public $edad;
    public $pais;
    
    //Metodos
    public function mostrarInformacion(){
        //echo "Hola Mundo!!!";
        echo $this->nombre." tiene ".$this->edad." años.";
    }

    public function comer($comida){
        if($comida=="ceviche"){
            echo "<br>Hmmmm, que rico gracias";
        }else {
            echo "<br>Lo siento, yo solo como ceviche";
        }
    }

    public function dormir(){
        echo "<br>Zzzzzzzzzz";
    }

}

$persona1 = new Persona; // instanciar
$persona2 = new Persona;

$persona1->nombre = "Juan";
$persona1->edad = 25;
$persona1->pais = "Perú";

$persona1->mostrarInformacion();
$persona1->dormir();
$persona1->comer("Chicharron");

/* 

$persona2->nombre = "Carlos";
$persona2->edad = 16;
$persona2->pais = "México";

echo $persona1->nombre." tiene ".$persona1->edad." años.";
echo "<br>";
echo $persona2->nombre." tiene ".$persona2->edad." años."; */
// Crear una clase Automovil
echo "<br>";
print_r($persona1);
echo "<br>";
var_dump($persona1);
?>