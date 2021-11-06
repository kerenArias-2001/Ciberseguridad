<?php
    include('../funciones.php');
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

        <title>Incidentes | Ciberseguridad</title>

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

<div id="wrapper">
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
        
<section id="acuerdo">

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Incidentes de Seguridad</h2>
                        </div>
                    </div>
                <div class="cont-b">
                    <form  id="" class="modal-content animate" method="post" action="" >

                    <center><div class="cont_inc"><br><br>
                            
                           <div class="text_acta">
                           <br><br>
                            
                            <table>
                                <tr class="fondo_sub2">
                                  <th colspan="3" style="text-align: center;">REPORTES DE INCIDENTES DE SEGURIDAD 
                                      <br>
                                  </th>
                                <td colspan="3">  Versión:
                                <?php
                                    $miconexion=conectar_bd("",'bd_ciberseguridad');               
                                    $guardado=consulta($miconexion,"SELECT * FROM `gestion_incidente` ");
                                    $fila = $guardado->fetch_object();
                                    $valor=$fila->id_in;
                                
                                ?>                                      
                                  <input id="version_i" name="version_in" type="text" class="form-control3" placeholder='<?php echo "version actual:".$valor; ?>' disabled>

                                      Fecha:
                                      <?php
                                        // Obteniendo la fecha actual con hora, minutos y segundos en PHP
                                        $fechaActual = date('d-m-Y H:i:s');
                                        ?>
                                      <input id="fecha_r" name="fecha_r2"  class="form-control3" placeholder='<?php echo $fechaActual; ?>' disabled >

                                      Responsable:<!--  <input type="text" class="texc1r" id="inc_3" readonly="readonly"></input> -->
                                      <input id="resp_i" name="responsable_in" type="text" class="form-control3" >

                                 
                                  </td>
                                </tr>
                                
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">INFORMACIÓN GENERAL DEL REPORTE </td>
                                </tr>
                             
                                <tr>
                                    <td colspan="2">Fecha y hora del reporte:
                                    </td> 
                                    <td colspan="2">
<!--                                     <input type="text" class="texc1" id="inc_4" readonly="readonly"></input>
 -->                                    <input id="fecha_hora" name="fecha_hora_reporte" type="datetime-local" class="form-control3">

                                    </td>
                                </tr>
 
                                  <tr>
                                    <td colspan="2">Nombre de quien reporta:
                                    </td> 
                                    <td colspan="2">
<!--                                     <input type="text" class="texc1" id="inc_5" readonly="readonly"></input>
 -->                                    <input id="rep_i" name="nombre_quien_reporta" type="text" class="form-control3" >

                                    </td>
                                </tr>

                                <tr>
                                    <td>Cargo:</td>
                                    <td> <!-- <input type="text" class="texc1" id="inc_6" readonly="readonly"></input> -->
                                    <input id="cargo_i" name="cargo_in" type="text" class="form-control3" >

                                </td>
                                    <td>Dependencia y Extensión:</td>
                                    <td><!-- <input type="text" class="texc1" id="inc_7" readonly="readonly"></input> -->
                                    <input id="dep_i" name="dependencia_in" type="text" class="form-control3" >

                                </td>
                                </tr>
                                <tr>
                                    <td>Sede:</td>
                                    <td> <!-- <input type="text" class="texc1" id="inc_8" readonly="readonly"></input> -->
                                    <input id="sede_i" name="sede_in" type="text" class="form-control3" >

                                </td>
                                    <td>E-mail:</td>
                                    <td><!-- <input type="text" class="texc1" id="inc_9" readonly="readonly"></input><br> -->
                                    <input id="mail_i" name="mail_in" type="email" class="form-control3" placeholder="correo@ejemplo.com">

                                </td>
                                </tr>
                                    
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">INFORMACIÓN GENERAL DEL INCIDENTE</td>
                                </tr>
                                 
                                <tr>
                                    <td colspan="2">Fecha y hora del incidente:
                                    </td> 
                                    <td colspan="2">
<!--                                     <input type="text" class="texc1" id="inc_10" readonly="readonly"></input>
 -->                                    <input id="fech_hora" name="fech_hora_in" type="datetime-local" class="form-control3" >

                                    </td>
                                </tr>
     
                                <tr>
                                    <td colspan="2">Tipo:
                                    </td> 
                                    <td colspan="2">
                                            <select id="m1" class="form-control3" name="tipo_in" require/>                        
                                                
                                                <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_ciberseguridad');
                                                    $query = $mysqli -> query ("SELECT * FROM tipo_incidentes");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[id_tipo_in].'">'.$valores[nombre_tipo_in].'</option>';
                                                    
                                                            $i=$i+1;
                                                    } 
   
                                                ?>         
                                            </select>


                                    </td>
                                </tr>
                                                       
                                <tr>
                                    <td colspan="2">Priorización:
                                    </td> 
                                    <td colspan="2">
<!--                                     <input type="text" class="texc1" id="inc_11" readonly="readonly"></input>
 -->                                   
                                            <select   class="form-control3"  name="priorizacion_in" required>
                                                    <option value="" selected>Seleccione una opción</option>
                                                    <option value="critico">Crítico</option>
                                                    <option value="alto">Alto</option>
                                                    <option value="medio">Medio</option>
                                                    <option value="bajo">Bajo</option>
                                            </select>

                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">Escalamiento:
                                    </td> 
                                    <td colspan="2">                                 
                                            <select   class="form-control3"  name="escalamiento_in" required>
                                                    <option value="" selected>Seleccione una opción</option>
                                                    <option value="alto">Alto</option>
                                                    <option value="medio">Medio</option>
                                                    <option value="bajo">Bajo</option>
                                            </select>

                                    </td>
                                </tr>



                                <tr>
                                    <td colspan="2">Lugar o sede del incidente:
                                    </td> 
                                    <td colspan="2">
<!--                                     <input type="text" class="texc1" id="inc_11" readonly="readonly"></input>
 -->                                    <input id="lugar_i" name="lugar_in" type="text" class="form-control3" >

                                    </td>
                                </tr>

    
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">Descripción del Incidente</td>
                                </tr>
                                <th colspan="4">
                                        <label>
                                        <textarea class="form-control3" id="inc_13" name="descripcion_in" rows="8" cols="70" placeholder="Máximo 200 caracteres" ></textarea>
                                        </label>
                                </th>
                            
                                </tr>
                              
                            </table>
                            <br><br> 
                            <center>
                                <button type="submit" value="1" name="guardar" id="btnNuevaFactura" class="btn btn-success">Guardar</button>
                            </center>
                            <br><br>
                            </div>
                       
                        </div></center>


        
                    </form>
          
                </div>

                </div>
            </div>  
</section>  
<br>
<br>


        
        </div>   


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

   
<?php
    if ($_SERVER['REQUEST_METHOD']==='POST') { 

    /* Activar alerta */
        echo"<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo"<script src='sweetalert2.all.min.js'></script>";
        echo"<script src='sweetalert2.min.js'></script>";
        echo"<link rel='stylesheet' href='sweetalert2.min.css'>";
    /* Activar alerta */

    
        $guardar=$_POST['guardar'];
        if( $guardar==1){
             
          $miconexion=conectar_bd("",'bd_ciberseguridad');
         
          $id_in=$_POST['id_in'];
          $version=$_POST['version_in'];
          $fecha=$_POST['fecha_in'];
          $responsable=$_POST['responsable_in'];
           
           
           $fecha_hora=$_POST['fecha_hora_reporte'];
           $nombre_rep=$_POST['nombre_quien_reporta'];
           $cargo_in=$_POST['cargo_in'];
           $dependencia_in=$_POST['dependencia_in'];
           $sede_in=$_POST['sede_in'];
           $mail_in=$_POST['mail_in'];
           $fech_hora_in=$_POST['fech_hora_in'];
           $tipo_in=$_POST['tipo_in'];
           $priorizacion_in=$_POST['priorizacion_in'];
           $escalamiento_in=$_POST['escalamiento_in'];
           $lugar_in=$_POST['lugar_in'];
           $descripcion_in=$_POST['descripcion_in'];
     
             $guardado=consulta($miconexion,"INSERT INTO `gestion_incidente`( `categoria_in`, `codigo_in`, `descripcion_in`, `estado_in`, `priorizacion_in`, `fecha_inc`, `consecutivo_event_in`, `tipo_in`, `causa_in`, `impacto_in`, `solu_in`, `obs_in`) 
             VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15])");            
    
                 if($resultado)
                  {  /* -----------------Alerta para notificar registro ------------------------*/
                        echo "<script>
                          Swal.fire({type: 'success',
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
                                        window.location = 'crear_incidente.php';
                                    });
                                    </script>" ;
                            }          
                        
                                
                            } 
    
    
    
            
}  
?>

    
    </body>
    
</html>
