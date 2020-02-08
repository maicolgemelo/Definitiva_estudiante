<?php
    if(isset($_POST["btncalcular"])){

        
        //Agrego los archivos de las respectivas clases
        require_once 'logica/Taller1.php';
        require_once 'logica/Taller2.php';
        require_once 'logica/Cuestionario1.php';
        require_once 'logica/Cuestionario2.php';
        require_once 'logica/Proyectofinal.php';
        require_once 'logica/Promedio.php';

         //recuperar valores del formulario
         $taller1 = $_POST["txttaller1"];
         $taller2 = $_POST["txttaller2"];
         $cuestionario1 = $_POST["txtcuestionario1"];
         $cuestionario2 = $_POST["txtcuestionario2"];
         $proyectofinal = $_POST["txtproyectofinal"];
 

        //Instanciar clases hijas
        $objTaller1 = new Taller1();
        $objTaller2 = new Taller2();
        $objCuestionario1 = new Cuestionario1();
        $objCuestionario2 = new Cuestionario2();
        $objProyectofinal = new Proyectofinal();
        $objPromedio = new Promedio();

       
        //llenar atributos por cada instancia.
        $objPromedio->setTaller1($taller1);
        $objPromedio->setTaller2($taller2);
        $objPromedio->setCuestionario1($cuestionario1);
        $objPromedio->setCuestionario2($cuestionario2);
        $objPromedio->setProyectoFinal($proyectofinal);

        $objTaller1->calcularTaller1($taller1);

        $valordefi = $objPromedio->calcularPromedio();
        $plata = 500000;

        echo "La definitiva es: " . $valordefi. "<br>"; 
        


        if($valordefi > 0  && $valordefi <= 0.99){
          

           echo "<br> Super deficiente, Materia perdida y debe pagarla nuevamente. <br>"; 
           echo "<br> debe pagar :".$plata ."<br>";



        }else if($valordefi > 1 && $valordefi <= 1.99){
           

            echo "<br> Deficiente, Materia perdida pero solo debe pagar el 50%. <br>"; 
            echo "<br> debe pagar :" . $plata * 0.5 ."<br>";


          
           
        }else if($valordefi > 2 && $valordefi <= 2.99){

           

            echo "<br>Insuficiente, Materia perdida pero paga el 10%. <br>";
            echo "<br> debe pagar :" .$plata * 0.1 ."<br>";
            date_default_timezone_set("America/Medellin");
            echo date("d-m-y");

           

           
        }else if($valordefi > 3 && $valordefi <= 3.99){
            
            
            echo "<br>Aceptable, Materia aprobada.<br> ";
            echo "<br> debe pagar :".($plata - 500000 )."<br>";


           
          
        }else if($valordefi > 4 && $valordefi <= 4.99){
            
           

            echo "<br>Sobresaliente.<br>";
            echo "<br> debe pagar :".($plata - 500000 )."<br>";           


           

           
        }else if($valordefi = 5 ){
            

            echo "<br>Excelente y gana beca educativa."; 
            echo "<br> debe pagar :".($plata - 500000 )."<br>";

            


           
        }
        



    }else{
        echo "Estas hackiiando mi sistema, vamos a llamr a la policia";
    }


?>