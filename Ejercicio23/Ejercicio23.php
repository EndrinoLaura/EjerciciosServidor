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
    //SI EL FICHERO EXISTE CARGO EL ARRAY, SI NO EXISTE CREO EL FICHERO Y CREO EL ARRAY
    if(!file_exists("E:/visitas.txt")){
        $fic = fopen("E:/visitas.txt","w");
        $array = ["ip" => [],"fechas" => []];
        fwrite($fic,serialize($array));
    }else{
        $fic = fopen("E:/visitas.txt","r");
        $array = unserialize(fread($fic, filesize("E:/visitas.txt")));
    }
    //CIERRO EL FICHERO
    fclose($fic);

    //SI LA IP NO EXISTE EN EL ARRAY
    if(!in_array($_SERVER["REMOTE_ADDR"],$array["ip"])){
        array_push($array["ip"],$_SERVER["REMOTE_ADDR"]);
    }

//NO ESTA BIEN HECHO
    //SI LA FECHA NO EXISTE EN EL ARRAY, LA AÑADO Y AUMENTO EL NUMERO DE VISITAS TOTALES Y POR FECHA
    if(array_key_exists(date("d-m-y"),$array["fechas"])){
        $array["fechas"][date("d-m-y")]++;
    }else{
        $array["fechas"][date("d-m-y")] = 1;
    }

    //MUESTRO LOS DATOS
    foreach($array["fechas"] as $key => $value){
        $totales += $value;
    }
    echo "VISITAS TOTALES: ".$totales."<br>";
    echo "VISITAS UNICAS: ".count($array["ip"])."<br>";
    foreach($array["fechas"] as $key => $value){
        echo $key."=> ".$value."<br>";
        $totales += $value;
    }
 
    //GUARDO EL ARRAY EN EL FICHERO
    $fic = fopen("E:visitas.txt","w");
    fwrite($fic,serialize($array));
    //CIERRO EL FICHERO
    fclose($fic);
?>



