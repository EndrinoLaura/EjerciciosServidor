<!--Crear un formulario que pida nombre, edad y email,
los datos los recogerá el mismo documento,
mostrando el nombre, la edad y el email introducido
y la frase “datos enviados correctamente” o “datos incorrectos, revise errores y reenvié”.
Los posibles errores serán que la edad no sea un valor numérico
o que el email no contenga una estructura correcta. (STRING).
En caso de que sean incorrectos,
se mostraran en el mismo formulario con un color diferente (rojo)
para poder ser modificados y puedan ser reenviados.
-->
<?php
	$checkEmail = TRUE;
	$checkEdad = TRUE;

if(isset($_POST['submit'])){
	$message = "";
	$nombre = 	 $_POST['nombre'];
	$edad =		 $_POST['edad'];
	$email = 	 $_POST['email'];

	if (isset($nombre) && isset($edad) && isset($email)){
		if(!filter_var($edad, FILTER_VALIDATE_INT)){
			$message .= $edad ." no es un numero. ";
			$checkEdad = FALSE;
		}

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$message .= $email ." no es un correo valido. ";
			$checkEmail = FALSE;
		}

		if($checkEmail && $checkEdad){
			echo sprintf(
				'Datos enviados correctamente: %s | %d | %s',
				$nombre,
				$edad,
				$email
			);
			exit;
		}

		echo "Datos incorrectos, revise errores y reenvié. <hr>";
	}

}
?>

<form action="index.php" method="POST">
	<label>Nombre:</label><input type="text" name="nombre" value="<?=$nombre?>"/><br>
	<label>Edad:</label><input type="text" name="edad" <?php if(!$checkEdad){ echo "style=\"color:red\";"; }?> value="<?=$edad?>"/><br>
	<label>Correo:</label><input type="text" name="email" <?php if(!$checkEmail){ echo "style=\"color:red\";"; }?> value="<?=$email?>"/><br>
	<input type="submit" name="submit" value="Enviar"/>
</form>