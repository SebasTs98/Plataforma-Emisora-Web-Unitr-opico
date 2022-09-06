<?php
   include('Conexion.php');

   if(isset($_POST['Guardar'])){
      $imagen = $_FILES['imagen']['name'];
      $nombre = $_POST['titulo'];
      $descri = $_POST['descri'];
      $autor = $_POST['autor'];

      if(isset($imagen) && $imagen != ""){
         $tipo = $_FILES['imagen']['type'];
         $temp  = $_FILES['imagen']['tmp_name'];

         if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
            echo "<script> alert('archivos no compatibles'); </script> ";
            header('location:../Eventos.php');
         }else{
            $query = "INSERT INTO publicacion(first_name,last_name,image,autor) values('$nombre','$descrip','$autor')";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
               move_uploaded_file($temp,'image/'.$imagen);   
               echo "<script> alert('Datos guardados'); </script> ";
               header("location:../Eventos.php");
            }else{
               echo "<script> alert('Datos no guardados'); </script> ";
               header("location:../Eventos.php");
            }
         }
      }
   }
?>