  
  
<?php

	$titulo = 'Respuesta a tu Solicitud ante la emisora Unitropìco';
	$saludo ='Hola ';
	$saludo2 ='Mensaje: ';
	$destinario =$_POST['correo'];
	$nombre =$_POST['nombre'];
	$asunto =$_POST['motivo'];
	$mensaje =$_POST['mensaje'];
	$respuesta =$_POST['respuesta'];
	
	

	$header ="Enviado desde la pagina de la Emisora Unitropìco";
	$intro = "\nMotivo del asunto: " . $asunto;
	$mensajecompleto ="\nEn Respuesta a su Solicitud: " . $respuesta;

mail($destinario, $intro, $mensajecompleto);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='Index.php'\",1000)</script>";


  
	
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enviar Solicitud</title>
	<link rel="icon" href="../img/Logo1.jpeg" type="image/gif" />
</head> 
<body>

</body>
</html>
