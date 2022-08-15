<?php
	if(isset($_POST['nombre'])&&($_POST['correo']!='')&&($_POST['mensaje']!='')){
		$destinatario="almavetarica@gmail.com";
		$nombre= $_POST['nombre'];
		$correo= $_POST['correo'];
		$mensaje= $_POST['mensaje'];
		//contenido
		mail($destino,$nombre,$correo,$contenido);
		echo "El mensaje se ha enviado correctamente";
		}
		else{
			echo "Se ha presentado un error en el envío del correo";
		}
 ?> 