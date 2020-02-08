<?php
    require_once 'Notas.php';

    class Proyectofinal extends Notas{


        public function calcularProyectofinal(){
            return ($this->getProyectoFinal() * 0.33);
        }

       
    }




?>