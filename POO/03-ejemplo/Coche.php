<?php

    class Coche {

        private $combustible;
        private $litrosCombustible = 0;
        private $velocidad = 0;
      
        public function __construct($combustible = 'Gasolina') {
          $this->combustible = $combustible;
        }
      
        public function acelerar($incremento) {
          if ($this->litrosCombustible < 10) {
            return $this->velocidad; 
          }
          $this->velocidad += $incremento;
          return $this->velocidad;
        }
      
        public function repostar($tipo, $litros) {
          if ($tipo != $this->combustible) {
            return $this->litrosCombustible;
          }
          $this->litrosCombustible += $litros;
          return $this->litrosCombustible;
        }
      
        public function estado() {
          if ($this->velocidad > 0) {
            return 'Moviéndose';
          } else {
            return 'Parado';
          }
        }
      
      }
      
      $miCoche = new Coche('Gasoil');
      
      echo "Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar(10) . "\n";
      echo "Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("Gasolina", 40). "\n"; 
      echo "Combustible después de echar 40 litros de gasóleo: " . $miCoche->repostar("Gasoil", 40) . "\n";
      echo "Velocidad después de acelerar con combustible en el depósito: ". $miCoche->acelerar(10) . "\n";
      echo "Estado del coche: ". $miCoche->estado();

?>