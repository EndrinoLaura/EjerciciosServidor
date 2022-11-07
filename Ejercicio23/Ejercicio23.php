<!-- EJERCICIO 23 - FICHEROS
    Crear una web que muestre el número de visitantes totales, 
    el número de visitas únicas y el número de visitas por dia indicando el dia de la visita

EJEMPLO VISTA WEB:

    VISITAS TOTALES: Nº VISITAS 
    VISITAS UNICAS: Nº VISITAS 
    'FECHA VISITA POR DIA'-> 02-11-22 : Nº VISITAS
    'FECHA VISITA POR DIA'-> 03-11-22 : Nº VISITAS
    ETC...

-->

<?
    //Abrimos el archivos como modo lectura-escritura; ademas crear el fichero si no existe, y si existe, que no borre el contenido (fopen c+ hace esto).
    $fvisitas = fopen("fvisitas.txt","c+");

    //Si esque existe tengo que leer el archivo. (tengo que saber como está guardada la info para asi poderla leer). 
    //(fgets/fwrite (lo que era antes fputs pero sin salto de linea)) (al texto que yo escriba tengo que añadir un salto de linea ya que fwrite no lo hace)
    $fechas = unserialize(fgets($fvisitas));
    $ips = unserialize(fgets($fvisitas));
    fclose($fvisitas);

    //Crea en el array si no exista, y en el caso de que no exista me crea el elemento.
    $fechas[date('d-m-y')]+=1;
    $ips[$_SERVER['REMOTE_ADDR']]+=1;

    //Visitas totales
    $totalv = array_sum($fechas); //suma valores de un array
    echo "Totales= ".$totalv.'<br>';

    //Visitas únicas
    $totalu = count($ips).'<br>';
    echo "Unicas= ".$totalu.'<br>';
    foreach ($fechas as $fecha=>$numero){
        echo $fecha ." = ".$numero.'<br>';
    }

    //puedo dejar el archivo abierto y truncar el archivo (borrrar y escribir lo que tengo ahora en los arrays) 
    //(ftruncate hace esto, le tienes que poner la longitud, pero antes habria que utilizar un flock para que no se pueda escribir antes).
    $fvisitas = fopen("fvisitas.txt", "w");
    fwrite($fvisitas, serialize($fechas)."\r\n");
    fwrite($fvisitas, serialize($ips)."\r\n");

    //cerramos el archivo
    fclose($fvisitas);
?>



