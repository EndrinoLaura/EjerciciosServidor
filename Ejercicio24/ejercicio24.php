<!--
Crea un libro de visitas de tal forma que desde un formulario podamos introducir nuestro nombre, fotografía y un comentario.
crear un csv con nombre, comentario y foto.
fputcsv, desactivar buffer de pantalla , readfile, y volver
fread necesita un manejador me lo lee en un string, y eso es lo que guardo 
fread($fh1, $_FILES[])
$fh1 = fopen($_FILES['archivo']['tmp_name'], "r");
fclose($fh1)
Otra solucion, un objeto, clase. y serializarlo 
-->

<?php
if(isset($_POST["enviar"])){
    echo "hola";
    $nombre = $_POST["nombre"];
    $file = $_FILES["archivo"]["name"];
    $temp = $_FILES["archivo"]["tmp_name"];
    
    if( move_uploaded_file($temp, './images/') ){
        echo "TODO OK";
    }else{
        echo "ERROR";
    }
   
}

?>





<form action="" target="POST" enctype="multipart/form-data">
 
  <p>

    Ingresa tu nombre: <input type="text" name="nombre">

 </p>
 <p>
    Sube un archivo:

    <input type="file" name="archivo">

  </p>
  
  <p>

    Deja un mensaje:<br>

    <textarea name="mensaje"></textarea>

  </p>
  <input type="submit" name="enviar" value="Enviar la información">

</form>

