<?php
if (isset ($_GET['boton1']) ){
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$num3 = $_GET['n3'];
$menor = min($num1,$num2,$num3);
$mayor = max($num1,$num2,$num3);
$medio = ($num1+$num2+$num3) - ($menor+$mayor);
echo $menor, ",",$medio,",",$mayor;
}
elseif (isset ($_GET['boton2'])){
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$num3 = $_GET['n3'];
$menor = min($num1,$num2,$num3);
$mayor = max($num1,$num2,$num3);
$medio = ($num1+$num2+$num3) - ($menor+$mayor);
echo $mayor, ",",$medio,",",$menor;
}
else{
?>
	<pre>
		<form action="" method="get">
			<input type="text" name="n1"> Numero 1 
			<input type="text" name="n2"> Numero 2 
			<input type="text" name="n3"> Numero 3 
			<input type="submit" name="boton1" value="ordenar asc">
			<input type="submit" name="boton2" value="ordenar des">
		</form>
	</pre>

<?
}
?>
