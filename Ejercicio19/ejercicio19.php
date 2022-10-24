<!-- EJERCICIO 19. Crea un calendario que represente los domingos y las festividades en color rojo(Viernes santo, navidad, reyes, etc).
 El mes y el año lo recogerá en un formulario y deberemos tener la función calendario en un script aparte que llamaremos.
-->

<?php
festivos22 [] = [ [],[],[],[],[],[],[],[],[],[12],[1],[6,8,23,24,25,26,27,28,29,30,31] ];
festivos23 [] = [ [1,2,3,4,5,6],[20,21],[],[3,4,5,6,7,8,9,10],[1,31],[8],[],[],[],[],[],[] ];


function generarCalendario ($mes, $año){

    $primerDiaSemana = date("w",mktime(0,0,0,$mes,1,$año))+7;  //primer dia del mes 0->domingo 6->sabado
    $cantidadDias = cal_days_in_month( CAL_GREGORIAN, $mes, $año);
    $ultimoDia = date("d",(mktime(0,0,0,$month+1,1,$year)-1)); //ultimo dia del mes

    echo $primerDiaSemana;
    echo "<br>";
    echo $cantidadDias;
    echo "<br>";
    echo $ultimoDia;
}


if ( isset($_POST["enviar"]) ){

}



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <form action="ejercicio19.php" method="POST">
        <select name="mes">
            <option>Enero</option>
            <option>Febrero</option>
            <option>Marzo</option>
            <option>Abril</option>
            <option>Mayo</option>
            <option>Junio</option>
            <option>Julio</option>
            <option>Agosto</option>
            <option>Septiembre</option>
            <option>Octubre</option>
            <option>Noviembre</option>
            <option>Diciembre</option>
        </select>
        <p>Año: <input type="text" name="anio" /></p>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
</body>

</html>