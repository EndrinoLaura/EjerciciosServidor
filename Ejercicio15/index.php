<!--Ejercicio 15
-Crear una funcion a la que se le pase una cadena y un caracter
y la funcion devolverá un boolean, que una vez evaluado, 
-Si el retorno es true mostrará la frase "El caracter $val está en la cadena X y aparece Y veces" 
-Si retorna false mostrará la frase "El caracter $val no está en la cadena X",
-Caracter y cadena serán recogidos mediante un formulario. (cadena de texto y un caracter).
-->

<?php
function contarChar ($cad, $charIntro) : boolval {
    $centinela = true;
    $nueva[] = explode($cad);
    foreach($nueva as $char){
        if()
    }

    if ( $str){
        $centinela = false;
    return $centinela;
    };
};

if ( isset($_GET['enviar']) ){
    $cadena = $_GET['cadena'].strtolower;
    $charinput = $_GET['charinput'].strtolower;
    $veces = 0;
    echo $cadena;
    echo $charinput;

    if ( contarChar($cadena,$charinput) ){
        for ($i=0; i<$cadena.strlen; $i++){
            if($caden.substr(i) === $charinput){
                $veces++;
            }
        }
        echo "El caracter" . $charinput ." si está en la cadena | " . $cadena. " | Se repite " .$veces. " veces.";
    }else {
        echo "El caracter" . $charinput ." no está en la cadena | " . $cadena;
    };
};
?>

<form action="index.php" method="GET">
      Escribe un texto aqui:
      <br>
      <input type="text" name="cadena">
      <br>
      Escribe el caracter que deseas contar de la cadena:
      <br>
      <input type="text" name="charinput">
      <br><br>
      <input type="submit" name="enviar" value="Enviar">
</form>