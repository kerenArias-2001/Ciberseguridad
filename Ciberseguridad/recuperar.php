<?php
    include('funciones.php');
    $enviar=0;
    ini_set("SMTP","smtp.gmail.com");
    ini_set("sendmail_from","kerenesther2001@gmail.com");

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
    
</head>
<body class="fondo_password">

    <div class="container-fluid"><br>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel2 panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Recuperar contraseña</h3>
                </div>
                
            <div class="panel-body">
                <form role="form" method="post" >
                    <fieldset>
                        Ingrese su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña.<br><br>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="correo" type="email" autofocus required>
                        </div>

                        <div class="form-group">
                        <a class="small" href="login.php">Cancelar</a>
                        </div>
                            <button class="btn btn-lg btn-success btn-block"  name="recuperar" value='1' >recuperar</button>
                    </fieldset>
                </form>
                </div>      
            </div>
        </div>
    </div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/metisMenu.min.js"></script>
<script src="../js/startmin.js"></script>
</body>
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $recuperar=$_POST['recuperar'];
    if($recuperar==1){
       

        $correo = $_POST['correo'];
        $miconexion=conectar_bd("",'bd_ciberseguridad');
        $queryusuario 	= consulta($miconexion,"SELECT * FROM administrador WHERE correo_adm = '$correo'");
        $nr 			= mysqli_num_rows($queryusuario); 
        
        if ($nr == 1)
        {
            $mostrar		= mysqli_fetch_array($queryusuario); 
            $enviarpass 	= $mostrar['contraseña_adm'];

            $paracorreo 		= $correo;
            $titulo				= 'Recuperar contraseña';
            $mensaje			= $enviarpass;
            $tucorreo			= 'From: kerenesther2001@gmail.com'. phpversion();

            if (mail($paracorreo, $titulo, $mensaje, $tucorreo))
            {
                echo"**************enviado*********************";
/*                     echo "<script> alert('Contraseña enviado');window.location= 'index.html' </script>";
 */            }else
            {
                echo"**************error*********************";

/*                 echo "<script> alert('Error');window.location= 'index.html' </script>";
 */            }
        }
        else
        {
            echo"**************El correo no existe*********************";

/*             echo "<script> alert('Este correo no existe');window.location= 'index.html' </script>";
 */        }
    }

}
?>




<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $recuperar=$_POST['recuperar'];
    if($recuperar==1){
       

        $correo = $_POST['correo'];
        $miconexion=conectar_bd("",'bd_ciberseguridad');
        $queryusuario 	= consulta($miconexion,"SELECT * FROM administrador WHERE correo_adm = '$correo'");
        $nr 			= mysqli_num_rows($queryusuario); 
        
        
        $dest = "destinatario@gmail.com"; //Email de destino
        $asunto = "Asunto"; //Asunto
        $cuerpo = "Cuerpo del mensaje, puedes poner <b>HTML</b> aqui tambien"; //Cuerpo del mensaje
        //Cabeceras del correo
        $headers = "From: Juan juan@gmail.com\r\n"; //Quien envia?
        $headers .= "X-Mailer: PHP5\n";
        $headers .= 'MIME-Version: 1.0' . "\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
        mail($dest,$asunto,$cuerpo,$headers);
    }}
?>
</html>
