<?php
    require_once 'Notas.php';

    class Promedio extends Notas{


        public function calcularPromedio(){
            return (($this->getTaller1() + $this->getTaller2() + $this->getCuestionario1() + $this->getCuestionario2()
            + $this->getProyectoFinal())/5);
        }

        
    }

?>