<?php 

session_start();
require "Conexion.php";
$email = "";
$name = "";
$errors = array();


//si el botón de registro de usuario
if(isset($_POST['signup'])){    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirmar contraseña no coincidente!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "El correo electrónico que ha ingresado ya existe!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Código de verificación de correo electrónico";
            $message = "Su código de verificación es : $code";
            $sender = "From: soporteunitropico@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "Hemos enviado un código de verificación a su correo electrónico. - $email";
                $_SESSION['info'] = $info;                
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: Usuario-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "¡Error al enviar el código -------xd!";
            }
        }else{
            $errors['db-error'] = "¡Error al insertar datos en la base de datos!";
        }
    }

}
    //si el usuario hace clic en el botón de envío del código de verificación
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['roll'] = $roll;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: ../administracion/Admi/Home.php');
                exit();
            }else{
                $errors['otp-error'] = "¡Error al actualizar el código!";
            }
        }else{
            $errors['otp-error'] = "¡Has introducido un código incorrecto!";
        }
    }

    //si el usuario hace clic en el botón de inicio de sesión
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                   if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                  header('location: ../Administracion/Admi/Home.php');
                

                }else{
                    $info = "Parece que aún no has verificado tu correo electrónico - $email";
                    $_SESSION['info'] = $info;
                    header('location: Usuario-otp.php');
                }
            }else{
                $errors['email'] = "¡Correo o contraseña incorrectos!";
            }
        }else{
            $errors['email'] = "¡Parece que aún no eres miembro! Contacta  al  Administrador para ser parte de nosotros.";
        }
     
    }

    //si el usuario hace clic en el botón Continuar en el formulario de contraseña olvidada
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET  code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Código de restablecimiento de contraseña";                             
                $message = "Su código de restablecimiento de contraseña es: $code";
                $sender = "From: soporteunitropicoe@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "Hemos enviado un codigo de restablecimiento de contraseña  a su correo electrónico     - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: Restablecer_Codigo.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Error al enviar el código!";
                }
            }else{
                $errors['db-error'] = "¡Algo salió mal!";
            }
        }else{
            $errors['email'] = "¡Esta dirección de correo electrónico no existe!";
        }
    }

    //si el usuario hace clic en el botón restablecer otp
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Cree una nueva contraseña que no use en ningún otro sitio.";
            $_SESSION['info'] = $info;
            header('location: Nueva_Contraseña.php');
            exit();
        }else{
            $errors['otp-error'] = "¡Has introducido un código incorrecto!";
        }
    }

    //si el usuario hace clic en el botón cambiar contraseña
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "¡Confirmar contraseña no coincidente!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //recibiendo este correo electrónico usando la sesión
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Su contraseña cambió. Ahora puede iniciar sesión con su nueva contraseña.";
                $_SESSION['info'] = $info;
                header('Location: Contraseña_Cambiada.php');
            }else{
                $errors['db-error'] = "¡Error al cambiar su contraseña!";
            }
        }
    }
    
   //si iniciar sesión ahora haga clic en el botón
    if(isset($_POST['login-now'])){
        header('Location: sesion.php');
   
    }
    
?>
