<?php
	$mail="luceropdc1@gmail.com";
	$nombre= $_POST["nombre"];
	$correo= $_POST["correo"];
	$mensaje= $_POST["mensaje"];
	$thank="gracias.html";
	$message="
	nombre:".$nombre."
	correo:".$correo."
	mensaje:".$mensaje."
	";
	if (mail($mail,"Contacto",$message)){
		
	 Header ("location:$thank");
	}
?> 
	
	
	

	  