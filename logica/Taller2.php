<?php
    require_once 'Notas.php';

    class Taller2 extends Notas{


        public function calcularTaller2(){
            return ($this->getTaller2() * 0.15);
        }

       
    }




?>