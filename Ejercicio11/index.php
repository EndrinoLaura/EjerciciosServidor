<!-- Crear un script con una tabla HTML de una 1 fila y 6 columnas
conteniendo cada celda un numero aleatorio entre 1 y 49
evitando que un número se repita y apareciendo ordenado de menor a mayor.
-->
<?php
$numeros = [];

//este bucle para crear 6 numeros (para las 6 columnas de la fila de la tabla).
do{
    $numero = rand(1, 49); //numero random del 1-49
    if (!in_array($numero, $numeros)){ //verifico si el numero random está en el array ya, y si no está lo meto
        array_push($numeros, $numero);
    }
}while( sizeof($numeros)<=5 ); //el bucle para cuando la longitud del array es 6, es decir cuando hayamos conseguido meter en el array 6 diferentes.

//ordeno el array de menor a mayor
sort($numeros);

?>
<table style="border:1px solid black;">
    <tr>
        <?
            //itero el array de numeros y muestro la columna.
            //el bucle foreach recorre el array $numeros mostrando las claves como $k y los valores como $numero
            foreach ($numeros as $k => $numero) {
				echo "<td style=\"border:1px solid black;\"> Columna ". ($k+1).": " . $numero . "<td>";
            }
        ?>
    </tr>
</table>


