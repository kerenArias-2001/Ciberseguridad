
<?php
    include('../funciones.php');
    $enviar=0;    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación tipo de incidentes | Ciberseguridad</title>
       <!-- Bootstrap Core CSS -->
       <link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../css/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/startmin.css" rel="stylesheet">


<!-- Estilos de el modal -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
<?php
        $miconexion=conectar_bd("",'bd_ciberseguridad');
        session_start();
        $busqueda=consulta($miconexion,"SELECT * FROM administrador WHERE correo_adm ='{$_SESSION['nusuario']}'");
    
/*         echo"***************+++++++++++++++++++++++*****************************",$_SESSION['nusuario'];
 */        $fila1 = $busqueda->fetch_object(); 
        $nombre=$fila1->nombre_adm;
        $i=0;
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_ciberseguridad');
        $query = $mysqli -> query ("SELECT * FROM tipo_incidentes");
        while ($valores = mysqli_fetch_array($query)) {
                $i=$i+1;
        } 
/*         echo "<label class='form-control3'> los datos encontrados  son :".$i."</label>";
 */        

    include('../nabvar.php');
    ?>
<br>
<br>
<br>
<br>
<br>
<br>

<center>  
    <div class="marco_d">
    <table>
    <form method="post" >
        
    <tr  ><td>
             
    <label class="" for="incidente">Agregar nuevo tipo  de incidente </label><br>

    <input class="form-control3" id="incidente" name="nomb_i" type="text" placeholder="ingrese el nombre de incidente"><br>

    <button type="submit" name="enviar" value="1" class="btn btn-lg btn-success btn-block" >Agregar</button>
    </td>
    </tr>

    <tr  ><td>
    <label class="" for="Mincidente">Modificar tipo  de incidente </label><br>

    <select id="m1" class="form-control3" name="nomb_iM" require/>                        
                                                
            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                <?php
                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                $query = $mysqli -> query ("SELECT * FROM tipo_incidentes");
                while ($valores = mysqli_fetch_array($query)) {
                    echo '<option value="'.$valores[id_tipo_in].'">'.$valores[nombre_tipo_in].'</option>';
                
                        
                } 
    
            ?>         
        </select>

    <label for="Mincidente">ingrese nuevo tipo  de incidente </label><br>

    <input id="Mincidente" name="nomb_iM1" type="text" placeholder="ingrese nuevo  tipo"><br>

    <button type="submit" name="enviar" value="2" class="btn btn-lg btn-success btn-block">Guardar</button>
    </td>
    </tr>
    <tr  ><td>
    <label for="Eincidente">Eliminar tipo  de incidente </label><br>
    <select id="m1" class="form-control3" name="nomb_iE" require/>                        
                                                
        <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
            <?php
            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
            $query = $mysqli -> query ("SELECT * FROM tipo_incidentes");
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="'.$valores[id_tipo_in].'">'.$valores[nombre_tipo_in].'</option>';
            
                    
            } 

        ?>         
    </select><br>
    <button type="submit" name="enviar" value="3" class="btn btn-lg btn-success btn-block" >Eliminar</button><br>
    </td>
    </tr>
    </form> 
   </table>   
   </div>
</center>

 <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        <!-- mostrar y ocultar elementos -->

        <!-- enviar texto de input a label -->
        <script src="../js/enviarTexto.js"></script>


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
        $miconexion=conectar_bd("",'bd_datos');
       
        if ($enviar==1) {
            
           

            $nomb_in=$_POST['nomb_i'];

            echo "---------------------",$nomb_in;
            $consulta=consulta($miconexion,"INSERT INTO `tipo_incidentes`(`nombre_tipo_in`) VALUES ('$nomb_in')");
            if($consulta)
            {  /* -----------------Alerta para notificar registro ------------------------*/
                  echo "<script>
                    Swal.fire({type: 'success',
                    text: 'Guardado Exitoso',
                    
                }).then(function() {
                    window.location = '../pages/index.php';
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
                                  window.location ='tipo_inc.php';
                              });
                              </script>" ;
                      }          
           
           
        }
        if ($enviar==2) {
            $nomb_in=$_POST['nomb_iM'];
            $nomb_in1=$_POST['nomb_iM1'];
            $resultado=consulta($miconexion,"SELECT * FROM `tipo_incidentes` WHERE `id_tipo_in` like '$nomb_in' ");
            $fila0=$resultado->fetch_object(); 
            $valor=$fila0->id_tipo_in;

            $consulta=consulta($miconexion,"UPDATE `tipo_incidentes` SET `nombre_tipo_in`='$nomb_in1' WHERE id_tipo_in like '$valor'");
            if($consulta)
            {  /* -----------------Alerta para notificar registro ------------------------*/
                  echo "<script>
                    Swal.fire({type: 'success',
                    text: 'Guardado Exitoso',
                    
                }).then(function() {
                    window.location = '../pages/index.ph';
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
                                  window.location ='tipo_inc.php';
                              });
                              </script>" ;
                      }          
           
        }
        if ($enviar==3) {
            $nomb_in=$_POST['nomb_iE'];
           
            $resultado=consulta($miconexion,"SELECT * FROM `tipo_incidentes` WHERE `id_tipo_in` like '$nomb_in' ");
            $fila0=$resultado->fetch_object(); 
            $valor=$fila0->id_tipo_in; 
           

            $consulta=consulta($miconexion,"DELETE FROM `tipo_incidentes` WHERE  id_tipo_in like '$nomb_in'");
            if($consulta)
            {  /* -----------------Alerta para notificar registro ------------------------*/
                  echo "<script>
                    Swal.fire({type: 'success',
                    text: 'Guardado Exitoso',
                    
                }).then(function() {
                    window.location = '../pages/index.php';
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
                                  window.location ='tipo_inc.php';
                              });
                              </script>" ;
                      }          
           
          if($consulta)  {  /* -----------------Alerta para notificar registro ------------------------*/
                echo "<script>
                  Swal.fire({type: 'success',
                  text: 'Guardado Exitoso',
                  
              }).then(function() {
                  window.location = '../pages/index.php';
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
                                window.location ='tipo_inc.php';
                            });
                            </script>" ;
                    }          
        }

    
     
     

    




    }
    ?>
</html>