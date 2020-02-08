<?php
    require_once 'Notas.php';

    class Cuestionario2 extends Notas{


        public function calcularCuestionario2(){
            return ($this->getCuestionario2() * 0.1);
        }

       
    }




?>