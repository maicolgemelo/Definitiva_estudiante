<?php
    require_once 'Notas.php';

    class Taller1 extends Notas{


        public function calcularTaller1(){
            return ($this->getTaller1() * 0.2);
        }

       
    }




?>