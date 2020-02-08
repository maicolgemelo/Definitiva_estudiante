<?php

    class Notas{
        private $taller1;
        private $taller2;
        private $cuestionario1;
        private $cuestionario2;
        private $proyectofinal;

       

        public function __construct(){

            $this->taller1 = 0;
            $this->taller2 = 0;
            $this->cuestionario1 = 0;
            $this->cuestionario2 = 0;
            $this->proyectofinal = 0;
        }

      
        public function setTaller1($valor){
            $this->taller1 = $valor;
        }

        protected function getTaller1(){
            return $this->taller1;
        }

        public function setTaller2($valor){
            $this->taller2 = $valor;
        }

        protected function getTaller2(){
            return $this->taller2;
        }
        public function setCuestionario1($valor){
            $this->cuestionario1 = $valor;
        }

        protected function getCuestionario1(){
            return $this->cuestionario1;
        }

        public function setCuestionario2($valor){
            $this->cuestionario2= $valor;
        }

        protected function getCuestionario2(){
            return $this->cuestionario2;
        }
        public function setProyectoFinal($valor){
            $this->proyectofinal = $valor;
        }

        protected function getProyectoFinal(){
            return $this->proyectofinal;
        }
    }





?>