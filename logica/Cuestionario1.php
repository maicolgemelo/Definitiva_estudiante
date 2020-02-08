<?php
    require_once 'Notas.php';

    class Cuestionario1 extends Notas{


        public function calcularCuestionario1(){
            return ($this->getCuestionario1() * 0.22);
        }

       
    }




?>