<?php require_once "../../Funciones/ControllerUserData.php"; 
?>

<?php
include('../../Funciones/conexion.php');

$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);

    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: Restablecer_Codigo.php');
            }
        }else{
         
            header('Location: Usuario-otp.php');
        }
    }

}else{

    header('Location:../../Login/Cerrar_Sesion.php');
    exit();
}

?>
         
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emisora Unitropìco</title>
 <!-- icono favorito -->
      <link rel="icon" href="img/Logo1.jpeg" type="image/gif" />
      <link href="css/Letra.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
       

    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-music"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Emisora Unitropìco </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <img src="img/Logo1.jpeg" >
          
            <!-- Divider -->
            <hr class="sidebar-divider">
       
                 <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" style="font-family: 'Montserrat', sans-serif;" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Páginas</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" style="font-family: 'Montserrat', sans-serif;" href="Eventos.php">Eventos</a>
                        <a class="collapse-item" style="font-family: 'Montserrat', sans-serif;" href="Programacion.php">Programaciòn</a>
                        <a class="collapse-item" style="font-family: 'Montserrat', sans-serif;" href="Podcast.php">Podcast</a>
                        <a class="collapse-item" style="font-family: 'Montserrat', sans-serif;" href="Banner_Principal.php">Banner</a>
                        <a class="collapse-item" style="font-family: 'Montserrat', sans-serif;" href="Videos.php">Videos Youtbe</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">PQR</h6>
                        <a class="collapse-item" style="font-family: 'Montserrat', sans-serif;" href="Peticiones.php">Peticiones</a>
                    
                    </div>
                </div>
            </li>

    
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        <?php echo $fetch_info['name']; ?>





                                     </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <a class="dropdown-item" href="Usuarios.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Usuarios
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesiòn
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">PQR emisora Unitrópico</h1>
                    <p class="mb-4"></p>            


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabla de PQR</h6>
                        </div>
                        <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered"  id="user_data" cellspacing="0">  
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Motivo</th>
                            <th>Mensaje</th>
                            <th width="12%" >Opciones</th>
                         
                        </tr>
                    </thead>
                       <tfoot>
                            <tr>
                             <th>Nombre</th>
                            <th>Correo</th>
                            <th>Motivo</th>
                            <th>Mensaje</th>
                            <th width="12%" >Opciones</th>
                            
                        </tr>
                    </tfoot>
                </table>
              </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Emisora Unitropìco 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿ <?php echo $fetch_info['name']; ?> listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"> Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../Funciones/Cerrar_Sesion.php">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

  <div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form  action="Crud-pqr/insert.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h4 class="modal-title">Responder PQR</h4>
                </div>
                <div class="modal-body">
                    <label>Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"  />
                    <br />
                    <label>Correo</label>
                    <input type="email" name="correo" id="correo" class="form-control" />
                    <br />                               
                    <label>Motivo</label>
                    <input type="text" name="motivo" id="motivo" class="form-control" />
                    <br />
                    <label>Mensaje</label>
                    <input type="text" name="mensaje" id="mensaje" class="form-control" />
                    <br />
                     <label>Responder</label>
                    <input type="text" name="respuesta" id="respuesta" class="form-control" />
                    <br />
                </div>
                <div class="modal-footer">
                    
                    <button type="submit" name="action" id="action" class="btn btn-success" value="Add" />Enviar</button> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
    $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("Responder PQR");
        $('#action').val("Guardar");
        $('#operation').val("Add");
        $('#user_uploaded_image').html('');
    });
    
    var dataTable = $('#user_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"Crud-pqr/fetch.php",
            type:"POST"
        },
        "columnDefs":[
            {
                "targets":[0, 3, 4],
                "orderable":false,
            },
        ],

    });

    $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
        var nombre = $('#nombre').val();
        var correo = $('#correo').val();
        var motivo = $('#motivo').val();
        var mensaje = $('#mensaje').val();
         
        if(nombre != '' && correo != '')
        {
            $.ajax({
                url:"Crud-pqr/insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    alert(data);
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            alert("Ambos campos son obligatorios");
        }
    });
    
    $(document).on('click', '.update', function(){
        var user_id = $(this).attr("id");
        $.ajax({
            url:"Crud-pqr/fetch_single.php",
            method:"POST",
            data:{user_id:user_id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#nombre').val(data.nombre);
                $('#correo').val(data.correo);
                $('#motivo').val(data.motivo);
                $('#mensaje').val(data.mensaje);
                $('.modal-title').text("Responder Peticiòn");
                $('#user_id').val(user_id);
             
                $('#action').val("Enviar");
                $('#operation').val("Edit");
            }
        })
    });
    
    $(document).on('click', '.delete', function(){
        var user_id = $(this).attr("id");
        if(confirm("¿Estás seguro de que quieres eliminar esto?"))
        {
            $.ajax({
                url:"Crud-pqr/delete.php",
                method:"POST",
                data:{user_id:user_id},
                success:function(data)
                {
                    alert(data);
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            return false;   
        }
    });
    
    
});
</script>
