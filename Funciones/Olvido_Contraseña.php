<?php require_once "ControllerUserData.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Olvido Su Contraseña</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Favicons -->
  <link rel="icon"  href="../assets/img/logouni2.png" type="image/gif" />
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="css-login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="css-login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login/css/util.css">
    <link rel="stylesheet" type="text/css" href="css-login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('css-login/images/Music.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form action="Olvido_Contraseña.php" method="post"  class="login100-form validate-form" autocomplete="on">

                    <span class="login100-form-title p-b-59">
                        Has Olvidado tu Contraseña
                    </span>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
            
                    <div class="wrap-input100 validate-input" data-validate = "Se requiere un correo electrónico válido: ex@abc.xyz">
                        <span class="label-input100">Ingrese Su Correo</span>
                        <input class="input100" type="text" name="email" placeholder="Dirección de correo electrónico..." required value="<?php echo $email ?>">
                        <span class="focus-input100"></span>
                    </div>

                                

                    <div class="flex-m w-full p-b-33">
                      

                        
                    </div>

                    <div class="container-login100-form-btn">
                        <a href="sesion.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Regresar
                            <i name="login" class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                            <br/>
                                <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button 
                            input type="submit" class="login100-form-btn" name="check-email" value="Ingresar">  <!-- validacion de los datos -->
                           Recuperar Clave
                            </button>
                        </div>
                    <div>
                        
                    </div>
                    <br/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="css-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="css-login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="css-login/vendor/bootstrap/js/popper.js"></script>
    <script src="css-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="css-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="css-login/vendor/daterangepicker/moment.min.js"></script>
    <script src="css-login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="css-login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="css-login/js/main.js"></script>

</body>
</html>