<pre>
<?php
	echo 'El Sistema Operativo del servidor es  ' . PHP_OS . '<br>';
	echo 'Tu direccion IP es ' . $_SERVER['REMOTE_ADDR'] . '<br>'; 
	echo 'Tu ordenador tiene como nombre ' . $_ENV["COMPUTERNAME"] .'<br>';
	echo 'Tu microprocesador es ' . $_ENV["PROCESSOR_IDENTIFIER"] . '<br>';
	echo "Utilizas lenguaje web " . $_SERVER["HTTP_ACCEPT_LANGUAGE"]. '<br';
	print_r($_SESSION);
?>
</pre>