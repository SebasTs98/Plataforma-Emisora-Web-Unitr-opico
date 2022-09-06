<?php
include('../Funciones/Conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Programaciòn Emisora Unitropìco</title>

<!-- Favicons -->
  <link rel="icon"  href="../assets/img/logouni2.png" type="image/gif" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="../assets/css/variables.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="../Paginas/card.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="../Paginas/FooterV2.css" rel="stylesheet">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>

  <!-- ======= Header ======= -->
  <div id="pageintro" class="wrapper row1 bgded" style="background-image:url('assets/img/02.png');">
  <header id="header" class="header d-flex align-items-center fixed-top">
   

    <div    class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <a href="../Index.php" class="logo d-flex align-items-center">
         <img src="../assets/img/logov5.png" width="100%" alt="">
                
      </a> 

        <div>  
                  
       <div>      
          <a><h1><i class="bi bi-mic-fill" style="color:white;"> <audio  autoplay="controls" autoplay="true" src="https://s10.webradio-hosting.com/proxy/diego/stream" type="audio/mpeg"controls="true">                          
                        </audio></i></a>
          </div>    

                     <a href="">
                         <h12 style="font-family: 'Montserrat', sans-serif; color: white ;">AUDIO EN VIVO</h12>           
                     </a>
                      
                   
        </div>


          <a href="http://unitropico.edu.co/" class="logo d-flex align-items-center">
             <img src="../assets/img/logov4.png" href="" width="100%" alt="">     
          </a>  


   
    </div>

  </header><!-- End Header -->
</div>

    <main id="main">
    <section class="single-post-content">
        <!-- ======= Menu======= -->  
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="background: #009f98; ">     
      <nav id="navbar" class="navbar">
        <ul>
          <li><a style="font-family: 'Montserrat',sans-serif; color: white;" href="Programacion.php" >PROGRAMACIÒN</a></li>
          <li><a style="font-family: 'Montserrat',sans-serif; color: white;" href="Programas.php" >PROGRAMAS</a></li>
           
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Montserrat', sans-serif; color: white; " >
            PODCAST
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:#009f98;">
            <li><a class="dropdown-item"  style="font-family: 'Montserrat', sans-serif ; color: white;" href="Eventos.php">EVENTOS</a></li> 
               <li><a class="dropdown-item"  style="font-family: 'Montserrat', sans-serif ; color: white;" href="Podcast.php">PODCAST</a></li> 
          </ul>
        </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Montserrat', sans-serif; color: white; " >
           CONTÁCTENOS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:#009f98;">
            <li><a style="font-family: 'Montserrat', sans-serif; color: white;" href="Contacto.php">CONTÁCTENOS</a></li>
          <li><a style="font-family: 'Montserrat', sans-serif; color: white;" href="nosotros.php">CONÓCENOS</a></li>
          </ul>
        </li>
            
         
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
         <a class="facebook" href="https://www.facebook.com/unitropico.edu.co/" style="color: white;" ><span class="bi-facebook" ></span></a>
        <a href="https://www.youtube.com/channel/UCfUDc2juc_RXEXwWiCfN4IA/" class="mx-2" style="color: white;"><span class="bi-youtube"></span></a>
        <a href="https://www.instagram.com/p/CRCfVRbtuR5/?utm_source=ig_web_copy_link" class="mx-2"><span class="bi-instagram" style="color: white;"></span></a> 
        <a href="https://twitter.com/Unitropico" class="mx-2"><span class="bi-twitter" style="color: white;"></span></a> 
        <a href="https://www.linkedin.com/in/comunicaciones-unitr%C3%B3pico-6702a9230?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bel3omx%2B9So6EPVGFieyBQQ%3D%3D" class="mx-2"><span class="bi-linkedin" style="color: white;"></span></a> 
           <a href="https://www.tiktok.com/@unitropicoinforma?is_from_webapp=1&sender_device=pc" class="mx-2"><span class="bi-tiktok" style="color: white;"></span></a> 
        <a href="http://unitropico.edu.co/" class="mx-2"><span class="bi-house-door" style="color: white;"></span></a>      
        <a href="../Funciones/sesion.php" class="mx-2"><span class=" bi-person-check-fill" style="color: white; "></span></a>
        <a href="#" class="mx-2 js-search-open"></a>
        <i class="bi bi-list mobile-nav-toggle" style="color:white" ></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Buscar" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>
  <!-- ======= Fin Menu======= -->
     
      
   <br> 
<div class="container" data-aos="fade-up">
         
          <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <center>
               <h2  style="font-family: 'Montserrat', sans-serif;">Parrilla de Programación Unitrópico</h2>
            </center>
       </div>     
   
     <div class="container">
  <div class="row">
       <style>
    html {
      font-family: "Monserrat";
    }

    table {
      border-collapse: collapse;
      border: 2px solid rgb(200,200,200);
      letter-spacing: 1px;
      font-size: 0.8rem;
    }

    td, th {
      border: 1px solid rgb(190,190,190);
      padding: 10px 20px;
      text-align: center;
    }

    td {
      text-align: center;
    }

    caption {
      padding: 10px;
    }

    </style>  
  <div class="table-responsive">
<table class="table table-striped">
     <tr class="row_gray" style="background-color: #F0F0F0 !important;" style="font-family: 'Montserrat', sans-serif;">
        <td>&nbsp;</td>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>viernes</th>
        <th>Sabado</th>
        <th>Domingo</th>
      </tr>

         <!-- ======= Horario del Lunes a Domingo hora 6 AM====== -->    
      <tr >   

        <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >06:00 AM</th>
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '06:00 AM - 07:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
     <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '06:00 AM - 07:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
     <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '06:00 AM - 07:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
      <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '06:00 AM - 07:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
          <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '06:00 AM - 07:00 AM'  ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
        </div>
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
        <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '06:00 AM - 07:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '06:00 AM - 07:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>        
         <?php }?> 
      </div>
      </td>
   
         
      </tr>



               <!-- ======= Horario del Lunes a Domingo hora 7 AM====== -->      
      <tr >
   

        <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >07:00 AM</th>
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '07:00 AM - 08:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
          <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '07:00 AM - 08:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
          <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '07:00 AM - 08:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '07:00 AM - 08:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '07:00 AM - 08:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '07:00 AM - 08:00 AM'  ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '07:00 AM - 08:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>
   
         
      </tr>


                <!-- ======= Horario del Lunes a Domingo hora 8 AM====== -->    
      <tr >
   
        <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >08:00 AM</th>
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '08:00 AM - 09:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '08:00 AM - 09:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '08:00 AM - 09:00 AM'  ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'jueves' AND comienzo = '08:00 AM - 09:00 AM' ORDER BY id DESC LIMIT 0,1";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
               
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '08:00 AM - 09:00 AM'  ORDER BY id DESC LIMIT 0,1";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '08:00 AM - 09:00 AM' ORDER BY id DESC LIMIT 0,1";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '08:00 AM - 09:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>


              <!-- ======= Horario del Lunes a Domingo hora 9 AM====== -->     
      <tr >
   
        <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >09:00 AM</th>
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '09:00 AM - 10:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
       
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '09:00 AM - 10:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '09:00 AM - 10:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'jueves' AND comienzo = '09:00 AM - 10:00 AM'  ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '09:00 AM - 10:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '09:00 AM - 10:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

                <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '09:00 AM - 10:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>


 
              <!-- ======= Horario del Lunes a Domingo hora 10 AM====== -->     
      <tr >   
        <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >10:00 AM</th>
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '10:00 AM - 11:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
      
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '10:00 AM - 11:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>


            <!-- ======= Mostrar Informaciòn======= -->          
      
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '10:00 AM - 11:00 AM'  ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

            <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '10:00 AM - 11:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>


            <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Viernes' AND comienzo = '10:00 AM - 11:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>


              <!-- ======= Mostrar Informaciòn======= -->          
        <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '10:00 AM - 11:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>


              <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '10:00 AM - 11:00 AM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

    </tr>


         <!-- ======= Horario del Lunes a Domingo hora 11 AM====== -->     
      <tr >
   
        <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >11:00 AM</th>
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '11:00 AM - 12:00 PM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
      
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '11:00 AM - 12:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>


            <!-- ======= Mostrar Informaciòn======= -->          
      
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '11:00 AM - 12:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

            <!-- ======= Mostrar Informaciòn======= -->          
      
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '11:00 AM - 12:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>


            <!-- ======= Mostrar Informaciòn======= -->          
      
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Viernes' AND comienzo = '11:00 AM - 12:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>


              <!-- ======= Mostrar Informaciòn======= -->          
      
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '11:00 AM - 12:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>


              <!-- ======= Mostrar Informaciòn======= -->          
      
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '11:00 AM - 12:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

    </tr>


         <!-- ======= Horario del Lunes a Domingo hora 12 AM====== -->         
      <tr >   

        <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >12:00 PM</th>
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '12:00 PM - 01:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
       <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '12:00 PM - 01:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '12:00 PM - 01:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '12:00 PM - 01:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '12:00 PM - 01:00 PM'  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '12:00 PM - 01:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '12:00 PM - 01:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>
   
         
      </tr>



             <!-- ======= Horario del Lunes a Domingo hora 1 PM====== -->   
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >01:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '01:00 PM - 02:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
   
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '01:00 PM - 02:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '01:00 PM - 02:00 PM'  ORDER BY id DESC LIMIT 0,1";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '01:00 PM - 02:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '01:00 PM - 02:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '01:00 PM - 02:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '01:00 PM - 02:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>  
         
      </tr>




               <!-- ======= Horario del Lunes a Domingo hora 2 PM====== --> 
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >02:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '02:00 PM - 03:00 PM' ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '02:00 PM - 03:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '02:00 PM - 03:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '02:00 PM - 03:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '02:00 PM - 03:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '02:00 PM - 03:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '02:00 PM - 03:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?> PM</span>
        </div>
    
         <?php }?> 
      </div>
      </td>
            
      </tr>




              <!-- ======= Horario del Lunes a Domingo hora 3 PM====== -->    
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >03:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '03:00 PM - 04:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '03:00 PM - 04:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '03:00 PM - 04:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?> </span>
        </div>
      
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '03:00 PM - 04:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '03:00 PM - 04:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '03:00 PM - 04:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '03:00 PM - 04:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>
   
         
      </tr>


                    <!-- ======= Horario del Lunes a Domingo hora 4 PM====== -->    
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >04:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '04:00 PM - 05:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '04:00 PM - 05:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '04:00 PM - 05:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '04:00 PM - 05:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '04:00 PM - 05:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '04:00 PM - 05:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '04:00 PM - 05:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>
   
         
      </tr>


                  <!-- ======= Horario del Lunes a Domingo hora 5 PM====== -->    
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >05:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '05:00 PM - 06:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '05:00 PM - 06:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '05:00 PM - 06:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?> </span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '05:00 PM - 06:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '05:00 PM - 06:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '05:00 PM - 06:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '05:00 PM - 06:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>
   
         
      </tr>

                    <!-- ======= Horario del Lunes a Domingo hora 6 PM====== -->     
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >06:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '06:00 PM - 07:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
        
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '06:00 PM - 07:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '06:00 PM - 07:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '06:00 PM - 07:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '06:00 PM - 07:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '06:00 PM - 07:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '06:00 PM - 07:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>
   
         
      </tr>

                   <!-- ======= Horario del Lunes a Domingo hora 7 PM====== -->    
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >07:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '07:00 PM - 08:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '07:00 PM - 08:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '07:00 PM - 08:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '07:00 PM - 08:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '07:00 PM - 08:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '07:00 PM - 08:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '07:00 PM - 08:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>
   
         
      </tr>

                    <!-- ======= Horario del Lunes a Domingo hora 8 PM====== -->    
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >08:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '08:00 PM - 09:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '08:00 PM - 09:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '08:00 PM - 09:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '08:00 PM - 09:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '08:00 PM - 09:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '08:00 PM - 09:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '08:00 PM - 09:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>
   
         
      </tr>

                               <!-- ======= Horario del Lunes a Domingo hora 9 PM====== -->     
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >09:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '09:00 PM - 10:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?> </span>
        </div>
      
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '09:00 PM - 10:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '09:00 PM - 10:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?> </span>
        </div>
   
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '09:00 PM - 10:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '09:00 PM - 10:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?> </span>
        </div>
     
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '09:00 PM - 10:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '09:00 PM - 10:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>  
         
      </tr>

                              <!-- ======= Horario del Lunes a Domingo hora 10 PM====== -->     
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="1" >10:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '10:00 PM - 11:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?> </span>
        </div>       
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo =  '10:00 PM - 11:00 PM' ORDER BY id DESC LIMIT 0,1 ";
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo =  '10:00 PM - 11:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?> </span>
        </div>
    
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo =  '10:00 PM - 11:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
      
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo =  '10:00 PM - 11:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?> </span>
        </div>     
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo =  '10:00 PM - 11:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo =  '10:00 PM - 11:00 PM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
         <?php }?> 
      </div>
      </td>  
         
      </tr>

                              <!-- ======= Horario del Lunes a Domingo hora 11 de la noche====== -->     
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="6" >11:00 PM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo =  '11:00 PM - 12:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?> </span>
        </div>       
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '11:00 PM - 12:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '11:00 PM - 12:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?> </span>
        </div>
 
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '11:00 PM - 12:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
    
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '11:00 PM - 12:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?> </span>
        </div>
      
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '11:00 PM - 12:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
   
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '11:00 PM - 12:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
     
         <?php }?> 
      </div>
      </td>  
         
      </tr>

                            <!-- ======= Horario del Lunes a Domingo hora 12 de la mañana====== -->      
      <tr >
           <!-- ======= Mostrar Informaciòn======= -->          
           <th style="width:7%; text-align: center; " row="10"  >12:00 - 06:00 AM</th>
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Lunes' AND comienzo = '12:00 AM - 06:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="6">
         
         <?php echo $row['nombre']; ?></a>
        <div  style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span  style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>       
         <?php }?> 
      </div>
      </td>

        <!-- ======= Mostrar Informaciòn======= -->          
           
            <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Martes' AND comienzo = '12:00 AM - 06:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
         <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Miercoles' AND comienzo = '12:00 AM - 06:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white">
           <?php echo $row['comienzo']; ?></span>
        </div>
       
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
              <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Jueves' AND comienzo = '12:00 AM - 06:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
         <?php }?> 
      </div>
      </td>

             <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'viernes' AND comienzo = '12:00 AM - 06:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" aria-label="Soul R&amp;B Mode" data-modal-title="Soul R&amp;B Mode" data-modal-done="1">
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div> 
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
             <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Sabado' AND comienzo = '12:00 AM - 06:00 AM' ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
         <?php }?> 
      </div>
      </td>

               <!-- ======= Mostrar Informaciòn======= -->          
           
           <td style="background: rgb(0, 159, 152); color: rgb(0, 166, 255);" onmouseover="this.style.background='#4c9bce';this.style.color='#4c9bce';" onmouseout="this.style.background='#4cbbb6';this.style.color='#4cbbb6';" class="event tt_single_event" rowspan="1">
                 <!-- ======= Mostrar Informaciòn======= -->   
                <div class="">
           <?php 
               $query = "SELECT * FROM programacion WHERE dia  = 'Domingo' AND comienzo = '12:00 AM - 06:00 AM' ORDER BY id DESC LIMIT 0,1 ";
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
        <!-- START: Modals -->
        <a style="color: rgb(255, 255, 255) !important;" >
         
         <?php echo $row['nombre']; ?></a>
        <div class="before_hour_text" style="color: white;">
         <?php echo $row['autor']; ?>
        </div>
        <div class="top_hour">
          <span class="hours" style="color: white;">
           <?php echo $row['comienzo']; ?></span>
        </div>
        
         <?php }?> 
      </div>
      </td>  
         
      </tr>



    </table> 
    </div>  
    </div>
  </div>


</div>


    </section><!-- Final de  parrilla de programación Section -->

    
   

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2" style="font-family: 'Montserrat', sans-serif;">Gobierno</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li style="font-family: 'Montserrat', sans-serif;"><a target="_blank"  href="https://www.mineducacion.gov.co/portal/">Ministerio de Educación Nacional de Colombia</a></li>
<li style="font-family: 'Montserrat', sans-serif;"><a target="_blank"  href="https://www.gov.co/home/">Gobierno de Colombia – Gov.co</a></li>
<li style="font-family: 'Montserrat', sans-serif;"><a target="_blank"  href="https://www.colombiacompra.gov.co/">Colombia Compra Eficiente</a></li>
<li style="font-family: 'Montserrat', sans-serif;"><a target="_blank"  href="http://www.fondoemprender.com/SitePages/Home.aspx">Fondo Emprender</a></li>
<li style="font-family: 'Montserrat', sans-serif;"><a target="_blank"  href="https://portal.icetex.gov.co/Portal">ICETEX</a></li>
<li style="font-family: 'Montserrat', sans-serif;"><a target="_blank"  href="https://www.urnadecristal.gov.co/">Urna de Cristal</a></li>
<li style="font-family: 'Montserrat', sans-serif;"><a target="_blank"  href="https://www.colombiaaprende.edu.co/">Colombia Aprende</a></li>
<li style="font-family: 'Montserrat', sans-serif;"><a target="_blank"  href="https://gobiernodigital.mintic.gov.co/portal/">Gobierno Digital</a></li>
</ul>

</div>

<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2" style="font-family: 'Montserrat', sans-serif;">Enlaces de Interés</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a target="_blank"   href="https://unitropico.edu.co/index.php/unitropico/transparencia-y-acceso-a-informacion-publica">Transparencia y Acceso a información Pública</a></li>
<li ><a target="_blank"  href="https://unitropico.edu.co/index.php/unitropico/contactanos">Acerca de Unitrópico</a></li>
<li ><a target="_blank"  href="https://www.unitropico.edu.co/index.php/unitropico/estructura-organica">Directorio Unitrópico</a></li>
<li ><a target="_blank"  href="https://www.unitropico.edu.co/index.php/unitropico/estructura-organica">Estructura Orgánica</a></li>
<li ><a target="_blank"  href="https://www.unitropico.edu.co/index.php/unitropico/rectoria">Rectoria</a></li>
<li ><a target="_blank"  href="https://www.unitropico.edu.co/index.php/unitropico/miembros-activos">Miembros Activos</a></li>
<li ><a target="_blank"  href="https://www.unitropico.edu.co/index.php/unitropico/informacion-financiera">Información Financiera</a></li>
<li ><a target="_blank"  href="">Proyección Social</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>

<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2" style="font-family: 'Montserrat', sans-serif;">Normatividad</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
  <li ><a target="_blank"  href="https://www.unitropico.edu.co/index.php/unitropico/gobierno-institucional">Gobierno Institucional</a></li>
<li ><a target="_blank"  href="https://drive.google.com/file/d/17OT9xngPVVK8lWbzGBu_RqO16z8RE8HL/view">Estatuto General</a></li>
<li ><a target="_blank"  href="https://drive.google.com/file/d/1B2TOrl7ZysMfgvByuZv1eqz_wD01VI58/view">Estatuto Docente</a></li>
<li ><a target="_blank"  href="https://drive.google.com/file/d/1gHZ8S40zqBohdvywGUsnaev7eU8s1P-U/view">Estatuto de Bienestar Institucional</a></li>
<li ><a target="_blank"  href="https://drive.google.com/file/d/1NWlcmT_tAjRoMtz4mezkTT6feiuQ1FG4/view">Estatuto de Contratación</a></li>
<li ><a target="_blank"  href="https://drive.google.com/file/d/0B38YbzywGl36cGp5a2swRm5USEJaSDFBTjdJWV9aSkdHbEIw/view?resourcekey=0-OdSQrE3zxVP-wLkeFo6ZPQ">Estatuto de Proveedor</a></li>
<li ><a target="_blank"  href="https://drive.google.com/file/d/1yoK40SRXwaJHqLqlgDs6CxzXLPH5BG72/view">Estatuto Estudiantil</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>




<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2" style="font-family: 'Montserrat', sans-serif;">Mapa del Sitio</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="Programacion.php">Programación</a></li>
<li><a href="Programas.php">Programas</a></li>
<li><a href="Eventos.php">Eventos</a></li>
<li><a href="Podcast.php">Podcast</a></li>
<li><a href="Contacto.php">Contacto</a></li>
<li><a href="nosotros.php">Conócenos</a></li>
<li>
 <h5 class="headin5_amrc col_white_amrc pt2" style="font-family: 'Montserrat', sans-serif;">Horario de Atención</h5> 
 <a >Lunes a viernes 
8:00 a.m. a 12:00 p.m.
2:00 p.m. a 6:00 p.m.</a></li>
</li>

</ul>

<!--footer_ul_amrc ends here-->
</div>


</div>
</div>

<!--foote_bottom_ul_amrc ends here-->
<br>
<center>
<div class="copyright" style="font-family: 'Montserrat', sans-serif;">
                <h4 style="font-family: 'Montserrat', sans-serif;">Universidad Internacional de Trópico Americano - Unitrópico </h4>
                <br>
               <h5 style="font-family: 'Montserrat', sans-serif;">Universidad Sujeta a Inspección y Vigilancia por el Ministerio de Educación Nacional.</h5>
               
              <strong><span> Yopal, Casanare Carrera 19 No.
                      39-40 - Atención al Ciudadano 3213983917 - Bienestar Universitario 3213986406</span>
              </strong>
              <br>
                <strong><span> © Copyright 2022 Emisora Unitrópico</span> 
                  <BR>Todos los derechos reservados.</strong>
          
            </div>

</div></center>

<ul class="social_footer_ul">
<li><a href="https://www.facebook.com/unitropico.edu.co/"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="https://twitter.com/Unitropico"><i class="fab fa-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/in/comunicaciones-unitr%C3%B3pico-6702a9230?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bel3omx%2B9So6EPVGFieyBQQ%3D%3D"><i class="fab fa-linkedin"></i></a></li>
<li><a href="https://www.instagram.com/p/CRCfVRbtuR5/?utm_source=ig_web_copy_link"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>
<!-- footer1 END -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>