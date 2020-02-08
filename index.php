<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8">
        <title>Ejercicio el cual calcula la definitiva de un estudiante</title>

    </head>
    <body>
        <h1>Ejercicio de POO herencia basica  y jquery(Calculo de definitiva de un estudiante)</h1>

        <p>En un curso de “fundamentos de algoritmos” con valor de pago de $500.000, se tienen las siguiente notas (Cada una de ellas entre 1 y 5) con sus respectivos porcentajes:<br><br>

            - Taller 1: 20%<br><br>
            - Taller 2: 15%<br><br>
            - Cuestionario 1:22%<br><br>
            - Cuestionario 2:10%<br><br>
            - Proyecto final: 33%<br><br>
            
            Realiza la lógica que permita mostrar lo siguiente:<br><br>
            
            0 a 0.99 : Super deficiente, Materia perdida y debe pagarla nuevamente.<br><br>
            1 a 1.99 : Deficiente, Materia perdida pero solo debe pagar el 50%.<br><br>
            2 a 2.99 : Insuficiente, Materia perdida pero paga el 10%.<br><br>
            3 a 3.99 : Aceptable, Materia aprobada.<br><br>
            4 a 4.99 : Sobresaliente.<br><br>
            5 : Excelente y gana beca educativa.<br><br>
            
            Debe mostrar en pantalla: <br><br>
                - Nota definitiva<br><br>
                - Calificación (Excelente, Sobresaliente, Aceptable ... )<br><br>
                - Cuánto debe pagar (Teniendo en cuenta cada escenario)<br><br>
                - Fecha de realizada el cálculo.<br><br>
            
                Por favor ingrese los datos: <br><br></p>
        <form name="form1" method="POST" action="calcular.php">
            <p>Taller 1 : 
                <input type="text" name="txttaller1" id="txttaller1">
            </p>
            <p>Taller 2 :
                <input type="text" name="txttaller2" id="txttaller2">
            </p>
            <p>Cuestionario 1 :
                <input type="text" name="txtcuestionario1" id="txtcuestionario1">
            </p>
            <p>Cuestionario 2 :
                <input type="text" name="txtcuestionario2" id="txtcuestionario2">
            </p>
            <p>Proyecto final :
                <input type="text" name="txtproyectofinal" id="txtproyectofinal">
            </p>
            <p><input type="submit" name="btncalcular" id="btncalcular" value="Calcular"></p>
        </form>

    </body>



</html>