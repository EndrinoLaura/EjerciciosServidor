<!--Crear un script que represente mediante * el valor correspondiente a 5 cantidades numéricas,introducidas por teclado,
asignando a cada asterisco 10 unidades del valor introducido,
y mostrando la salida ordenada de mayor a menor cantidad.
Al final de cada línea de asteriscos aparecerá el valor numérico en la misma columna para las 5 filas.
( el numero debe aparecer tras los asteriscos) (printf)
-->

<?php
$numeros = (isset ($_POST['numeros'])) ? $_POST['numeros'] : [];
?>

<form action="index.php" method="POST">
	<input type="number" name="numeros[]" max="99" value="<?=$numeros[0]?>"/><br>
	<input type="number" name="numeros[]" max="99" value="<?=$numeros[1]?>"/><br>
	<input type="number" name="numeros[]" max="99" value="<?=$numeros[2]?>"/><br>
	<input type="number" name="numeros[]" max="99" value="<?=$numeros[3]?>"/><br>
	<input type="number" name="numeros[]" max="99" value="<?=$numeros[4]?>"/><br>
	<input type="submit"/>
</form>


<?php
	sort($numeros);
    foreach($numeros as $k => $v) {
        $res = intdiv($v,10);
        for($i=0; $i<$res; $i++){
            echo "*";
        }
        echo $v . "<br>";
    }
?>

