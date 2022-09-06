<?php 


$paracorreo  ="sebas980202@live.com";
$titulo ="Correo de prueba";
$mensaje ="hola compañero";
$tucorreo ="FROM: soporteunitropicoe@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "correo enviado";
}else{
	echo "error";
}


 ?>