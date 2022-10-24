<!--Crear un cronómetro con 3 botones, uno start, otro reset y otro stop. Que tenga un formato típico hooras:minutos:segundos. 
El boton start no reiniciará el cronómetro sino que al pulsar stop detendrá la cuenta y start la reiniciará donde se paró.
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>

<body>
    <?
    if (isset($_GET["start"])) {
        $seg = $_GET["seg"];
        $min = $_GET["min"];
        $hora = $_GET["hora"];
        $seg++;

        if ($seg >= 60) {
            $min++;
            $seg = 0;
        }
        if ($min >= 60) {
            $hora++;
            $min = 0;
        }
        header("refresh:1; url=ejercicio17.php?start=start&seg=$seg&min=$min&hora=$hora");
    }

    if (isset($_GET["stop"])) {
        $seg = $_GET["seg"];
        $min = $_GET["min"];
        $hora = $_GET["hora"];
        $seg++;
    }

    if (isset($_GET["restart"])) {
        $hora = 0;
        $min = 0;
        $seg = 0;
    }

    printf("%02d", $hora);
    echo ":";
    printf("%02d", $min);
    echo ":";
    printf("%02d", $seg);
    ?>
    <form action="" method="get">
        <input type="submit" name="start" value="start">
        <input type="submit" name="stop" value="stop">
        <input type="submit" name="restart" value="restart">

        <input type="hidden" name="hora" value="<? echo $hora ?>">
        <input type="hidden" name="min" value="<? echo $min ?>">
        <input type="hidden" name="seg" value="<? echo $seg ?>">
    </form><br>
</body>

</html>