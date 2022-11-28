<pre>
<?php
	function anadir($zipfile, $ruta){
			$directorio= scandir($ruta);
			foreach ($directorio as $elemento){
				if ($elemento=="."||$elemento=="..") continue; //si es el . o .. pasate el foreach. *Aqui*
				if ( is_dir($ruta.$elemento) ){ //Comprueba si es directorio
					$zipfile->addEmptyDir($ruta.$elemento); //Si es directorio, añade un Directorio vacio con el nombre
					anadir( $zipfile, $ruta.$elemento."/" ); //Y ahora si lo volvemos a pasar recursivamente por la operación de nuevo.
				}elseif ( is_file($ruta.$elemento) ){ //compueba si es un fichero
					$zipfile->addfile($ruta.$elemento); //Si es un fichero lo añade al zip.
				}
			} // *Aqui*
	}
	
	
	$zipfile= new ZipArchive(); //Se crea estancia del zip
	
	if  ($zipfile->open( getcwd().'/'."Backup.zip", ZipArchive::CREATE) ){ //si lo abre y no tiene problema en crearlo //getcwd obtiene el directorio donde se está trabajando
		anadir( $zipfile,getcwd().'/' ); //Se añade el fichero backup a la ruta en la que se esta trabajando
		$zipfile->close(): //cerramos el fichero
		header ("Content-Dispositio: attachment; filename-Backup_".date('d-m-Y').".zip" ); //Añadimos cabeceras
		readfile("Backup.zip");	//leemos el fichero
		unlink("Backup.zip"); //borramos el fichero
	}else{
		echo"Imposible crear Backup"; // Si no se abre el zip o no se puede crear salta este error.
	}
?>
</pre>