<?php require_once "ControllerUserData.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrar Usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
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
                <form action="Registrar-Usuario.php" method="POST" class="login100-form validate-form">
<center>
                        <img class="img-fluid rounded-circle w-50 mb-4" src="css-login/images/Logo2.jpeg" width="40%">  
                        </center>
                    <span class="login100-form-title p-b-59">
                        Ingrese datos para el Registro
                    </span>
                     <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
        <!--===============================================================================================-->             
            
     <!--===============================================================================================-->
                      <div class="wrap-input100 validate-input" data-validate = "Ingrese Nombre y Apellido">
                        <span class="label-input100">Nombre</span>
                        <input class="input100" type="text" name="name" placeholder="Ingrese Nombre del Usuario" required value="<?php echo $name ?>" autocomplete="off">
                        <span class="focus-input100"></span>
                    </div>
    <!--===============================================================================================-->
                      <div class="wrap-input100 validate-input" data-validate = "Se requiere un correo electrónico válido: ex@abc.xyz">
                        <span class="label-input100">Correo</span>
                        <input class="input100" type="text" name="email" placeholder="Dirección de correo electrónico..." required value="<?php echo $email ?>" autocomplete="off">
                        <span class="focus-input100"></span>
                    </div>
    <!--===============================================================================================-->         
                    <div class="wrap-input100 validate-input" data-validate = "Se Requiere Contraseña">
                        <span class="label-input100">Password</span>
                        <input class="input100"  type="password" name="password" placeholder="*************" required>
                        
                        <span class="focus-input100"></span> 
                        
                    </div>                
     
        <!--===============================================================================================-->  
        <div class="wrap-input100 validate-input" data-validate = "Se Requiere Contraseña">
                        <span class="label-input100">Confirmar Password</span>
                        <input class="input100"  type="password" name="cpassword" placeholder="*************" required>
                        
                        <span class="focus-input100"></span> 
                        
                    </div>
        <!--===============================================================================================-->     

                    <div class="flex-m w-full p-b-33">
                       

                        
                    </div>

                    <div class="container-login100-form-btn">
                        <a href="../Administracion/Admi/Usuarios.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Regresar
                            <i name="login" class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                            <br/>
                                <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button 
                            input type="submit" class="login100-form-btn"name="signup" value="Login">  <!-- validacion de los datos -->
                            Registrar
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