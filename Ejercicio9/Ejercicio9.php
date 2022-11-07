<!-- Crear un script que nos construya una tabla cuyas celdas
        tengan como color de fondo una escala de grises rgb 
        desde (0.0.0) hasta (255.255.255).
        El paso de colores sera de 25 unidades en 5 unidades.

            8EJ: 5.5.5 , 10.10.10 , 15.15.15)
-->
<table>
    <tr>
        <?
            for($val = 5; $val <= 255;$val+= 5){
                ?><td style="width: 20px; height: 20px; border: 1px solid black; background-color:rgb(<?=$val?>,<?=$val?>,<?=$val?>);"/><?
            }
        ?>
    </tr>
</table>