<!--Ejercicio 18. Mostrar mediante una cuenta atras con horas, minutos y segundos el tiempo que falta para las 2 y media.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>

<body>
    <?
    $fechaActual = date("H:i:s");
    $horaInicio = new DateTime($fechaActual);
    $horaTermino = new DateTime("14:30:00");
    $interval = $horaInicio->diff($horaTermino);

    echo date("H:i:s") . " Fecha actual <br>";
    echo $interval->format('%H horas %i minutos %s seconds');
    header("refresh:1; url=ejercicio18.php");
    ?>
</body>

</html>