      <?php

      // Abrimos la conexion a la base de datos   
          include("Conexion.php");   

                        // Recibimos por POST los datos procedentes del formulario 


                      $nombre = $_POST['name'];   
                      $email = $_POST['email'];
                      $motivo = $_POST['subject'];   
                      $mensaje = $_POST['message'];    

                      $query = "INSERT INTO peticiones(nombre,correo,motivo,mensaje) values('$nombre','$email','$motivo','$mensaje')";
                                           
                      $resultado = $con->query($query);

                        if($resultado){
                          echo "<script> alert('Peticion Envianda Exitosamente'); window.location.href='../Paginas/Contacto.php';
                                </script> ";
                

                        }else{
                          echo  "<script> alert('Error en Peticion'); window.location.href='../Paginas/Contacto.php';
                                </script> ";
                        }

                          

                
?>
