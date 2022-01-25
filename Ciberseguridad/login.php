<?php
    include('funciones.php');
    $enviar=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ciberseguridad</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/metisMenu.min.css" rel="stylesheet">
    <link href="css/startmin.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <!-- iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- links de sweet alerts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="login.php">Nombre aplicativo</a>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw" ></i> Usuario <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-user fa-fw"></i>Registrarse</a>
                    </li>
                    <li class="divider"></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search"></li>
                    <li>
                        <a href="login.php" class="active"><b>Ciberseguridad</b> </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Acerca de<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Misión</a>
                            </li>
                            <li>
                                <a href="#">Visión</a>
                            </li>
                            <li>
                                <a href="#">Opción 3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


<div id="page-wrapper">
    <div class="container-fluid"><br>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Iniciar sesión</h3>
                </div>
            <div class="panel-body">
                <form role="form" method="post" action="../ciberseguridad/pages/index.php">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="correo" type="email" autofocus required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Contraseña" name="psw" type="password" required>
                        </div>

                        <div class="form-group">
                        <a class="small" href="recuperar.php">Olvidó su contraseña?</a>
                        </div>
                            <button class="btn btn-lg btn-success btn-block"  >Entrar</button>
                    </fieldset>
                </form>
                </div>      
            </div>
        </div>
    </div>
</div>

<div  id="id01" class="modal">
    <div class="moda1">
        <form  id="moda12" class="modal-content animate" method="post" action="" >
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <center> <div class="moda12">
            <div class="col-lg-12">
            <h3 class="page-header">FORMULARIO DE REGISTRO</h3>
            </div>
                <div class="cont-re-ad">
                    <label for="uname"><b>Tipo de documento</b></label>
                    <select  class="form-control"   name="tipo_id" required>
                        <option value="">Tipo de documento</option>
                        <option value="CC">CC</option>
                        <option value="Ti">CE</option>
                        <option value="CC">NIP</option>
                        <option value="Ti">NUIP</option>
                        <option value="CC">PN</option>
                        <option value="Ti">CE</option>
                    </select><br>
                    <label for="uname"><b>Número de identificación</b></label>
                    <input type="number" class="form-control"  placeholder="Ingrese su identificacion" name="numero_id" required>
                    <label for="uname"><b>Nombres</b></label>
                    <input class="form-control"  placeholder="Ingrese sus nombres" name="nombre" required>
                    <label for="uname"><b>Apellidos</b></label>
                    <input class="form-control" placeholder="Ingrese sus apellidos" name="apellido" required>
                    <label for="uname"><b>Télefono</b></label>
                    <input type="number"  class="form-control" placeholder="Ingrese su número de télefono" name="telefono" required>
                    <label for="uname"><b>Dirección</b></label>
                    <input class="form-control" placeholder="Ingrese su número la dirección" name="direccion" required>
                </div>
                <div class="cont-re-ad2">
                    <label for="uname"><b>Email</b></label>
                    <input class="form-control"type="email" placeholder="Correo electrónico" name="correo" required>
                    <label for="psw"><b>Fecha de nacimiento</b></label>
                    <input class="form-control" type="date"  name="fecha"  required>
                    <label for="uname"><b>Nacionalidad</b></label>
                    <input class="form-control"  placeholder="País de nacimiento" name="nacionalidad" required>
                    <label for="uname"><b>Código de empleado</b></label>
                    <input class="form-control"  placeholder="Ingrese su código de empleado" name="codigo_em" required>
                    <label for="psw"><b>Contraseña</b></label>
                    <input class="form-control" type="password" placeholder="Digite su contraseña" name="psw" id="psw1" required>
                    <label for="psw-repeat"><b>Repetir contraseña</b></label>
                    <input class="form-control" type="password" placeholder="Repetir contraseña" name="psw-repeat" id="psw1-repeat" required>
                    <label id="mensaje_error"><b></b></label>
                    <button class="login" type="submit" name="enviar" value="1">REGISTRARSE</button>
                </div>
            </div></center>
        </form> 
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/metisMenu.min.js"></script>
<script src="js/startmin.js"></script>
<script src="js/adaptable.js"></script>

</body>

<?php


    if ($_SERVER['REQUEST_METHOD']==='POST') { 
        /* Activar alerta */
            echo"<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo"<script src='sweetalert2.all.min.js'></script>";
            echo"<script src='sweetalert2.min.js'></script>";
            echo"<link rel='stylesheet' href='sweetalert2.min.css'>";
        /* Activar alerta */

        $enviar=$_POST['enviar'];
        if( $enviar==1){
            $miconexion=conectar_bd("",'bd_ciberseguridad');
            $tipod_usuario=$_POST['tipo_id'];
            $numero_usuario=$_POST['numero_id'];
            $nombre_usuario=$_POST['nombre'];
            $apellido_usuario=$_POST['apellido'];
            $tel_usuario=$_POST['telefono'];
            $direccion=$_POST['direccion'];
            $correo_usuario=$_POST['correo'];
            $contraseña_adm=$_POST['psw'];
            $fecha_na=$_POST['fecha'];
            $codigo_em=$_POST['codigo_em'];
            $nacionalidad=$_POST['nacionalidad'];

            $verificacion0=consulta($miconexion,"SELECT  EXISTS(select * from administrador where  trim(num_id_adm) like '{$numero_usuario}' ) ");
            $row0=mysqli_fetch_row($verificacion0);
            if ($row0[0]=="0" ) {  

            $verificacion=consulta($miconexion,"SELECT  EXISTS(select * from administrador where trim(correo_adm) like '{$correo_usuario}'  ) ");
            $row1=mysqli_fetch_row($verificacion);
            if ($row1[0]=="0" ) {      

            $resultado=consulta($miconexion,"insert into administrador (tipo_doc_adm,num_id_adm,nombre_adm,apellido_adm,telefono_adm,direccion_adm,correo_adm,fecha_nacimiento_adm,nacionalidad_adm,codigo_empleado_adm,contraseña_adm)
            values('$tipod_usuario','$numero_usuario', '$nombre_usuario','$apellido_usuario','$tel_usuario','$direccion','$correo_usuario','$fecha_na','$nacionalidad','$codigo_em','$contraseña_adm')");
      
            if($resultado){  /* -----------------Alerta para notificar registro ------------------------*/
                echo "<script>
                    Swal.fire({type: 'success',
                    title: '<h4>Usuario:  ". $correo_usuario."<br>Contraseña:  ".$contraseña_adm."</h4>',
                    text: 'Guardado Exitoso',

                    }).then(function() {
                    window.location = 'login.php';
                    });
                </script>" ; 
                    /* -----------------Alerta para notificar registro ------------------------*/
            } 
            else{
                echo "<script>
                    Swal.fire({type: 'error',
                    title: 'error',
                    text: 'Por favor intente de nuevo',

                    }).then(function() {
                    window.location = 'login.php';
                    });
                </script>" ;
            }  
            }else{
                echo "<script>
                    Swal.fire({type: 'error',
                    title: '<h4>Correo inválido, ya se encuentra en uso </h4>',
                    text: 'Por favor ingrese otro',

                    }).then(function() {
                    window.location = 'cerrarsesion.php';
                    });
                </script>" ;
                }

            }else{
                echo "<script>
                    Swal.fire({type: 'error',
                    title: '<h4>el numero de identificacion, ya se encuentra en uso </h4>',
                    text: 'Por favor ingrese a su usuario',

                    }).then(function() {
                    window.location = 'cerrarsesion.php';
                    });
                </script>" ;
                } 
        } 
    }

?>

</html>
