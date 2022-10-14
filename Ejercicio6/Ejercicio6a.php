<pre>
	<form action="" method="get">
		<input type="text" name="n1"> <input type="text" name="n2"> <br>
		<input type="submit" name="botonop" value="suma"><input type="submit" name="botonop" value="resta"><input type="submit" name="botonop" value="multiplicacion"><input type="submit" name="botonop" value="division">
		<input type="submit" name="botonigual" value="=">          
	</form>
</pre>
<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['operador'];

if (isset ($_GET['botonigual'])){
	switch ($op){
		case 'suma':
		$op='+';
		$resultado = $n1+$n2;
		break;
		
		case 'resta':
		$op='-';
		$resultado = $n1-$n2;
		break;
		
		case 'multiplicacion':
		$op='*';
		$resultado = $n1*$n2;
		break;
		
		case 'division':
		$op='/';
		$resultado = $n1+$n2;
		break;
	}

}
?>
<pre>
                               <input type="text" name="resul" value=" <? echo $n1,$op,$n2, '=', $resultado?>  ">
</pre>


