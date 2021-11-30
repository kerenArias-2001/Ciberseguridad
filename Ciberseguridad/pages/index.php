<?php
    include('../funciones.php');
    $enviar=0;
  
      session_start();

    if(isset ($_SESSION['nusuario'])==false){
  

        $_SESSION['nusuario']=$_POST['correo']; 
        $_SESSION['nclave']=$_POST['psw'];
      
    }
      $miconexion=conectar_bd("",'bd_ciberseguridad');
      $verificacion0=consulta($miconexion,"select * from administrador 
      where correo_adm='{$_SESSION['nusuario']}' ");
      $row0=mysqli_fetch_row($verificacion0);
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio | Ciberseguridad</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/metisMenu.min.css" rel="stylesheet">
    <link href="../css/startmin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- links de sweet alerts -->
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='sweetalert2.all.min.js'></script>
    <script src='sweetalert2.min.js'></script>
    <link rel='stylesheet' href='sweetalert2.min.css'>
</head>
<body>

<?php
   
    if ( $verificacion0->num_rows>0){
        $verificacion3=consulta($miconexion,"select * from administrador 
        where contraseña_adm='{$_SESSION['nclave']}'");
        $row0=mysqli_fetch_row($verificacion3);
        if ( $verificacion3->num_rows>0){

            $busqueda=consulta($miconexion,"SELECT * FROM administrador WHERE correo_adm='{$_SESSION['nusuario']}'");
            $fila1 = $busqueda->fetch_object(); 
            $nombre=$fila1->nombre_adm;
            $i=0;
            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_ciberseguridad');
            $query = $mysqli -> query ("SELECT * FROM administrador");
            while ($valores = mysqli_fetch_array($query)) {
                $i=$i+1;
            } 

include('../nabvar.php');
?>
            <div id="wrapper">

                <br>
                <!-- Page Content -->
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="page-header">Bienvenido al sistema</h2>
                                <section id="marco">
    
                                </section>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
    
            </div>
            <!-- /#wrapper -->
    
            <!-- jQuery -->
            <script src="../js/jquery.min.js"></script>
    
            <!-- Bootstrap Core JavaScript -->
            <script src="../js/bootstrap.min.js"></script>
    
            <!-- Metis Menu Plugin JavaScript -->
            <script src="../js/metisMenu.min.js"></script>
    
            <!-- Custom Theme JavaScript -->
            <script src="../js/startmin.js"></script>
    <?php


        }
        else{
            echo "<script>
            Swal.fire({type: 'error',
                title: 'Error de contraseña',
                text: 'Por favor intente de nuevo',
                
            }).then(function() {
                window.location = '../cerrarsesion.php';
            });
            </script>" ;
        }

    }
else{
    echo "<script>
    Swal.fire({type: 'error',
        title: 'Error de autenticación',
        text: 'Por favor intente de nuevo',
        
    }).then(function() {
        window.location = '../cerrarsesion.php';
    });
    </script>" ;
}
?>


    </body>
</html>
