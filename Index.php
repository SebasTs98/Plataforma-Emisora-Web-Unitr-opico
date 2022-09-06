<?php
include('Funciones/Conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Emisora Unitropíco</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<!-- Favicons -->
  <link rel="icon"  href="assets/img/logouni2.png" type="image/gif" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="Paginas/card.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="Paginas/FooterV2.css" rel="stylesheet">



  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">





<body>
    <!-- ======= Header  de logos de la unversidad e emisorA======= -->
 <div id="pageintro" class="wrapper row1 bgded" style="background-image:url('assets/img/02.png');">
  <header id="header" class="header d-flex align-items-center fixed-top">
   

    <div   class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <a href="" class="logo d-flex align-items-center">
         <img src="assets/img/logov5.png" width="100%" alt="">
                
      </a>                
  


          <a href="http://unitropico.edu.co/" class="logo d-flex align-items-center">
             <img src="assets/img/logov4.png" href="" width="100%" alt="">     
          </a>  
 
    </div>

  </header><!-- End Header -->
</div>

<!-- Ares de menu de navegaciòn -->
  <main id="main">
    <!-- ======= Hero Slider Section ======= -->
    <section  id="hero-slider" class="hero-slider">

   <!-- ======= Menu======= -->  
  

 <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="background: #009f98; ">    


      <nav id="navbar" class="navbar">
        <ul>
          <li><a style="font-family: 'Montserrat',sans-serif; color: white;" href="Paginas/Programacion.php" >PROGRAMACIÒN</a></li>
          <li><a style="font-family: 'Montserrat',sans-serif; color: white;" href="Paginas/Programas.php" >PROGRAMAS</a></li>
           
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Montserrat', sans-serif; color: white; " >
            PODCAST
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:#009f98;">
            <li><a class="dropdown-item"  style="font-family: 'Montserrat', sans-serif ; color: white;" href="Paginas/Eventos.php">EVENTOS</a></li> 
               <li><a class="dropdown-item"  style="font-family: 'Montserrat', sans-serif ; color: white;" href="Paginas/Podcast.php">PODCAST</a></li> 
          </ul>
        </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Montserrat', sans-serif; color: white; " >
           CONTÁCTENOS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:#009f98;">
            <li><a style="font-family: 'Montserrat', sans-serif; color: white;" href="Paginas/Contacto.php">CONTÁCTENOS</a></li>
          <li><a style="font-family: 'Montserrat', sans-serif; color: white;" href="Paginas/nosotros.php">CONÓCENOS</a></li>
          </ul>
        </li>
            
         
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative" >
        
          <!-- Ares de menu de redes sociales de la universidad-->  
          
        <a class="facebook" href="https://www.facebook.com/unitropico.edu.co/" style="color: white;" ><span class="bi-facebook" ></span></a>
        <a href="https://www.youtube.com/channel/UCfUDc2juc_RXEXwWiCfN4IA/" class="mx-2" style="color: white;"><span class="bi-youtube"></span></a>
        <a href="https://www.instagram.com/p/CRCfVRbtuR5/?utm_source=ig_web_copy_link" class="mx-2"><span class="bi-instagram" style="color: white;"></span></a> 
        <a href="https://twitter.com/Unitropico" class="mx-2"><span class="bi-twitter" style="color: white;"></span></a> 
        <a href="https://www.linkedin.com/in/comunicaciones-unitr%C3%B3pico-6702a9230?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bel3omx%2B9So6EPVGFieyBQQ%3D%3D" class="mx-2"><span class="bi-linkedin" style="color: white;"></span></a> 
           <a href="https://www.tiktok.com/@unitropicoinforma?is_from_webapp=1&sender_device=pc" class="mx-2"><span class="bi-tiktok" style="color: white;"></span></a> 
        <a href="http://unitropico.edu.co/" class="mx-2"><span class="bi-house-door" style="color: white;"></span></a>      
        <a href="Funciones/sesion.php" class="mx-2"><span class=" bi-person-check-fill" style="color: white; "></span></a>
        <a href="#" class="mx-2 js-search-open"></a>
        <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap" >
          <form action="" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Buscar" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->
      
      </div>
</div>
<!-- ======= Fin Menu======= -->
  

  <!-- Banner de imagenes principales en la pagina  -->
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                       <?php 
               $query = "SELECT * FROM banner WHERE nombre  = 'Banner 1'   ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )              
                                                                           {     ?> 


                      <a  class="img-bg d-flex align-items-end" style="background-image: url('Administracion/Admi/Crud-B/upload/<?php echo $row['imagen']; ?>'); ">
                    <div class="img-bg-inner">


                      <h2 style="font-family: 'Montserrat', sans-serif;"><?php echo $row['descripcion']; ?></h2>

                      <p style="font: face: montserrat ;"></p>
                    </div>
                  </a>
                  <?php }?> 
                </div>

                <div class="swiper-slide">
                     <?php 
               $query = "SELECT * FROM banner WHERE nombre  = 'Banner 2'   ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )              
                                                                           {     ?> 

                  <a  class="img-bg d-flex align-items-end" style="background-image: url('Administracion/Admi/Crud-B/upload/<?php echo $row['imagen']; ?>'); ">
                    <div class="img-bg-inner">
                      <h2 style="font-family: 'Montserrat', sans-serif;"><?php echo $row['descripcion']; ?></h2>
                      <p></p>
                    </div>
                  </a>
                       <?php }?> 
                </div>

               <div class="swiper-slide">
                     <?php 
               $query = "SELECT * FROM banner WHERE nombre  = 'Banner 3'   ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )              
                                                                           {     ?> 

                  <a  class="img-bg d-flex align-items-end" style="background-image: url('Administracion/Admi/Crud-B/upload/<?php echo $row['imagen']; ?>'); ">
                    <div class="img-bg-inner">
                     <h2 style="font-family: 'Montserrat', sans-serif;"><?php echo $row['descripcion']; ?></h2>
                      <p></p>
                    </div>
                  </a>
                       <?php }?> 
                </div>

                   <div class="swiper-slide">
                     <?php 
               $query = "SELECT * FROM banner WHERE nombre  = 'Banner 4'   ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )              
                                                                           {     ?> 

                  <a  class="img-bg d-flex align-items-end" style="background-image: url('Administracion/Admi/Crud-B/upload/<?php echo $row['imagen']; ?>'); ">
                    <div class="img-bg-inner">
                     <h2 style="font-family: 'Montserrat', sans-serif;"><?php echo $row['descripcion']; ?></h2>
                      <p></p>
                    </div>
                  </a>
                       <?php }?> 
                </div>

                  <div class="swiper-slide">
                     <?php 
               $query = "SELECT * FROM banner WHERE nombre  = 'Banner 5'   ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )              
                                                                           {     ?> 

                  <a  class="img-bg d-flex align-items-end" style="background-image: url('Administracion/Admi/Crud-B/upload/<?php echo $row['imagen']; ?>'); ">
                    <div class="img-bg-inner">
                      <h2 style="font-family: 'Montserrat', sans-serif;"><?php echo $row['descripcion']; ?></h2>
                      <p></p>
                    </div>
                  </a>
                       <?php }?> 
                </div>

              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

<!-- barra lateral de audio en vivo -->
  <div class="social-bar">
      
        <div>
          <center>
          <h5 style="font-family: 'Montserrat', sans-serif; color: white;">Audio en Vivo</h5>
        </center>
         <a  class="icon " target="_blank"><i class="bi bi-mic-fill fa-x2"></i><audio  autoplay="controls" autoplay="true" src="https://s10.webradio-hosting.com/proxy/diego/stream" type="audio/mpeg"controls="true">                          
                        </audio></a>
        </div>                    
                   
        
  </div>  <style type="text/css">

.social-bar {
  position: fixed;
  right: 0;
  top: 83%;
  font-size: 1.5rem;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  z-index: 100;
  background: #0071b9;
}

.icon {
  color: white;
  text-decoration: none;
  padding: .7rem;
  display: flex;
  transition: all .5s;

}

.icon-facebook {
  background: #0071b9;
}

.icon:first-child {
  border-radius: 1rem 0 0 0  ;
}

.icon:last-child {
  border-radius: 0 0 0 1rem;
}

.icon:hover {
  padding-left: 3rem;
  border-radius: 1rem 0 0 1rem;
  box-shadow: 0 0 .5rem rgba(0, 0, 0, 0.42);
}
  </style>
<!-- Fin barra lateral de audio en vivo -->

    <!-- ======= Post de programas mas escuchados ======= -->
    <section id="posts" class="posts">
  

<table>
      <div class="container" data-aos="fade-up">
         
           <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <center>
               <h2  style="font-family: 'Montserrat', sans-serif;">Lo más escuchado</h2>
            </center>
         
          <div><a href="Paginas/Programacion.php" style="font-family: 'Montserrat', sans-serif; color: black;" class="more">Ver Programación</a> </div>
        </div>
          <div class="col-lg-14">
            <div class="post-entry-1 lg">
   <?php 
               $query = "SELECT * FROM programacion  ORDER BY id DESC LIMIT 0,1  ";
              
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() ) 
                                             {     ?> 
<center>
  

              <a href="Paginas/Programacion.php"><img src="Administracion/Admi/Crud-PRO/upload/<?php echo $row['image']; ?>" alt="" class="img-fluid"></a>
              </center>
              <h2><a ><?php echo $row['nombre']; ?></a></h2>
              <p class="mb-4 d-block" style=""><?php echo $row['descripcion']; ?></p>

              <div class="d-flex align-items-center author">
                <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                <div class="name">
                  <h3 class="m-0 p-0"><?php echo $row['autor']; ?></h3>
                </div>
              
            </div>
  <?php }?> 
          </div>
</table>

        </div> <!-- End .row -->
      </div>


    <!-- ======= Session Eventos Unitropìco======= -->
  
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2  style="font-family: 'Montserrat', sans-serif;"  >Eventos Emisora Unitrópico</h2>
          <div><a href="Paginas/Eventos.php" style="font-family: 'Montserrat', sans-serif; color: black;" class="more">Ver Todos Los Eventos</a></div>
        </div>

        <div class="row">
          <div class="col-md-12">
<?php 
               $query = "SELECT * FROM publicacion ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
            <div class="d-lg-flex post-entry-2">
              <a href="Paginas/Eventos.php" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                 <img  class="img-fluid" src="Administracion/Admi/Crud/upload/<?php echo $row['image']; ?>" alt="" class="img-fluid"  /> 
              </a>
              <div>
                <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span></span></div>
                <h2><a ><?php echo $row['first_name']; ?></a></h2>
                <br>
                <p style="text-align: justify; "><?php echo $row['last_name']; ?></p>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3  style="font-family: 'Montserrat', sans-serif;"><?php echo $row['autor']; ?></h3>
                  </div>
                </div>
              </div>
            </div>

              <?php }?> 
          </div>

        </div>
      </div>
  <!-- Fin Seccion Eventos unitropìco -->

    <!-- ======= Seccion de Podcast ======= -->
         <div class="container" data-aos="fade-up">
        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2  style="font-family: 'Montserrat', sans-serif;" >Podcast Unitrópico</h2>
          <div><a href="Paginas/Podcast.php"  style="font-family: 'Montserrat', sans-serif; color: black;"  class="more">Ver todos los podcast</a></div>
        </div>
        <div class="row">
          <div class="col-md-12 order-md-2">
            <div class="d-lg-flex post-entry-2">             
              <div>
                <?php 
               $query = "SELECT * FROM podcast ORDER BY id DESC LIMIT 0,1 ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )                                             {     ?> 
          <div class="d-lg-flex post-entry-2">
              <a href="Paginas/Podcast.php" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-rigth">
                 <img  class="img-fluid" src="Administracion/Admi/Crud-P/upload/<?php echo $row['imagen']; ?>" alt="" class="img-fluid"  /> 
              </a>
              <div>
                  <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span></span></div>
                <h2><a ><?php echo $row['titulo']; ?></a></h2>
                <br>
                <p style="text-align: justify; "><?php echo $row['descripcion']; ?></p>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3  style="font-family: 'Montserrat', sans-serif;"><?php echo $row['autor']; ?></h3>
                  </div>
                </div>
              </div>
            </div>

              <?php }?> 
          </div>

        </div>
      </div>
    </div>
    <!-- Fin Seccion Podcast -->
<!-- Seccion videos y redes -->

         <div class="container" >
        <div class="section-header d-flex align-items-center mb-5">
          <center>
            <h2  style="font-family: 'Montserrat', sans-serif; text-align: center;" >Multimedia Unitrópico</h2>
          </center>         
        </div>
 
      <div class="row">
        
            <div>                               
              <center>
                <a> <?php 
               $query = "SELECT * FROM videos   ORDER BY id DESC LIMIT 0,1  ";
               
                                            $resultado = $con->query($query);
                                            while ($row = $resultado->fetch_assoc() )              
                                                                           {     ?> 
                   <iframe width="560" height="315" src="<?php echo $row['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                 <?php }?> 
                </a>
               </center>   

            </div>
             
      </div>
    </div> 




    </section><!-- fin Seccion videos y redes -->
   


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
<li><a href="Paginas/Programacion.php">Programación</a></li>
<li><a href="Paginas/Programas.php">Programas</a></li>
<li><a href="Paginas/Eventos.php">Eventos</a></li>
<li><a href="Paginas/Podcast.php">Podcast</a></li>
<li><a href="Paginas/Contacto.php">Contacto</a></li>
<li><a href="Paginas/nosotros.php">Conócenos</a></li>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

