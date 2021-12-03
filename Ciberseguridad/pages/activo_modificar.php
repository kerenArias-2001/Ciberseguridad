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
    <title>Activo | Ciberseguridad</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/metisMenu.min.css" rel="stylesheet">
    <link href="../css/startmin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/datos.css">

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
        $query = $mysqli -> query ("SELECT * FROM administrador");
        while ($valores = mysqli_fetch_array($query)) {
                $i=$i+1;
        } 
/*         echo "<label class='form-control3'> los datos encontrados  son :".$i."</label>";
 */        

    include('../nabvar.php');
    $enviar=0;
    $guardar=0;
    ?>
        
<section id="acuerdo" style="background-color: aqua; height: 562px;">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Incidentes de Seguridad</h2>
                </div>
            </div>
            <div class="cont-b">
                <center> 
                    <form  id=""  method="post" action="" >
                        <section id="agg_in">
                            <div class="row_in">
                                <div class="col-25_in" >
                                        <img src="../datos/add-button.png" width="50%" height="6%">   
                                </div>
                                <div class="col-75_in">
                                    <label for="codigo">Código</label>
                                    <input class="form-control3" id="codigo" name="cod_in" type="text" placeholder="ingrese el código del incidente" required><br>
                                </div>
                            </div>
                            <div class="row_in">
                                <button type="submit" name="enviar" value="1" class="btn_g" >Consultar</button><br>
                            </div>
                        </section >
                    </form>
                </center>         
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

    
        $enviar=$_POST['enviar'];
        if( $enviar==1){
            $codigo_in=$_POST['cod_in'];
            $verificacion0=consulta($miconexion,"SELECT  EXISTS(SELECT * FROM `gestion_activo` where  trim(identi_act) like '{$codigo_in}' ) ");
            $row0=mysqli_fetch_row($verificacion0);
            if ($row0[0]>"0" ) {

   
            
            
            $consultar=consulta($miconexion,"SELECT * FROM `gestion_activo` WHERE `identi_act` like '$codigo_in'");
            $fila0=$consultar->fetch_object(); 
           
            $_SESSION['identificador']=$fila0-> identi_act;
            
          
            $identificador=$fila0-> identi_act;
            $fecha=$fila0-> fecha_act;
            $responsable=$fila0->respons_act;
            /*--------------------------------------- */
             $nombre_act=$fila0->nombre_act; 
             $observaciones=$fila0->obser_act;
             $tipo_activo=$fila0->tipo_act;
             $confidencialidad=$fila0->confid_act;
             $integridad=$fila0->integ_act;
             $disponibilidad=$fila0-> dispon_act;
             $ubicacion_act=$fila0->ubicac_act;
             $descr_ubicacion_act2=$fila0->desc_ubic_act;
             $criticidad_act=$fila0->critic_act;
             $justificacion_act=$fila0->justif_act;
            /*--------------------------------------- */
             $propietario_act=$fila0->propiet_act; 
             $custodio_act=$fila0->custod_act;
             $fecha_ingr_act=$fila0->fech_ing_act;
             $fecha_sali_act=$fila0->fech_sali_act;  
                     
                      ?> 
<!-- ----------------------------------------------------------------------------- -->


<center><div class="cont_inc"><br><br>
    <form  id=""  method="post" action="" >     
                        <div class="text_acta">
                            <br><br>
                            <table>
                                <tr class="fondo_sub2">
                                    <th colspan="5" style="text-align: center;">REGISTRO DE ACTIVOS
                                        <br>
                                    </th>
                                    <td colspan="3">  Identificador:
                                                                      
                                    <input id="version_i" name="identificador" type="text" value='<?php echo $identificador;?>' class="form-control3" placeholder=''  readonly="readonly" >
                                   Fecha:
                                    <?php
                                    // Obteniendo la fecha actual con hora, minutos y segundos en PHP
                                  
                                    $zonahoraria = date_default_timezone_set('America/Bogota');
                                
                                    $fechaActual = date('m-d-Y h:i:s a', time());
                                   
                                    ?>
                                    <input id="fecha_r" name="fecha"  value='<?php echo "".$fecha ;?>' type="text" class="form-control3"  readonly="readonly">
                                     Responsable:<input id="responsable" name="responsable" value="<?php echo $responsable;?>" type="text" class="form-control3"  readonly="readonly">
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="6" style="text-align: center;">IDENTIFICACIÓN DEL ACTIVO </td>
                                </tr>
                                <tr>
                                    <td colspan="1"><label for="nomb_act">Nombre:</label></td> 
                                    <td colspan="5">
                                        <select id="nomb_act" class="form-control3" name="nombre_act" require/>                        
                                            <option class="form-control" value="<?php echo "".$nombre_act ;?>"><h1><?php echo "".$nombre_act ;?></h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM act_nombre");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[nombre_activo].'">'.$valores[nombre_activo].'</option>';                                                        
                                                    } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1"><label for="desc_act">Descripción / Observaciones:</label></td> 
                                    <td colspan="3">
                                        <input class="form-control3" id="inc_13" name="observaciones" rows="8" cols="70" minlength="10" maxlength="200" value='<?php echo"".$observaciones;?>'  placeholder="Máximo 200 caracteres" ></input>

                                    </td>
                                    <td colspan="1"><label for="tipo_act">Tipo</label></td> 
                                    <td colspan="2">
                                          
                                         <select id="tipo_act" class="form-control3" name="tipo_activo" require/>                        
                                                
                                                <option class="form-control" value="<?php echo "".$tipo_activo ;?>"><h1><?php echo "".$tipo_activo ;?></h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM act_tipo_activo");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[id_tipo_activo].'">'.$valores[nombre_tipo_activo].'</option>';
                                                    
                                                            
                                                    } 
                                        
                                                ?>         
                                            </select>
                                    </td>
                                </tr>                                           
                                <tr>
                                    <td rowspan="3"><label>CALIFICACIÓN</label></td>
                                    <td>
                                        <div class="dropdown">
                                        <label for="conf_a">Confidencialidad</label>
                                            <div class="dropdown-content">
                                                <p style="text-align: justify; margin: 17px;">     <b>Información Pública Reservada:</b><br>
                                                        Información disponible solo para un proceso de la entidad y en caso de ser conocida por terceros sin autorización 
                                                        puede conllevar a un impacto negativo de índole legal, operativa, de pérdida de imagen o económica.<br>
                                                    
                                                        <b>Información Pública Clasificada:</b><br>
                                                        Información dsponible para todos los procesos de la entidad y que en caso de ser conocida por terceros sin autorización puede
                                                        conllevar un impacto negativo para los procesos de la misma.<br>
                                                        Esta Información es propia de la entidad o de terceros y puede ser utilizada por todos los funcionarios de la entidad
                                                        para realizar labores propias de los procesos, pero no puede ser conocidad por terceros sin autorización del propietario.<br>
                                                        
                                                        <b>Información Pública:</b><br>
                                                        Puede ser entregada o publicada sin restricciones a cualquier persona dentro y fuera de la entidad, sin que esto implique 
                                                        daños a terceros ni a las actividades y procesos de la entidad.<br>
                                                        <b>No Clasificada:</b><br>
                                                        Activos de Información que deben ser incluidos en el inventario y que aún no han sido clasificados, deben ser tratados como activos de INFORMACIÓN PUBLICA RESERVADA.<br>    
                                                </p>
                                            </div>  
                                        </div>                              
                                    </td>
                                    <td colspan="4"> 
                                        <select id="conf_a"  class="form-control3"  name="confidencialidad" required>
                                                <option class="form-control" value="<?php echo "".$confidencialidad ;?>"><h1><?php echo "".$confidencialidad ;?></h1></option>
                                            <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM act_confidencialidad");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_confidencialidad].'">'.$valores[nombre_confidencialidad].'</option>';
                                
                                                } 
            
                                            ?> 
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="dropdown">
                                        <label for="integ_a">Integridad</label>
                                            <div class="dropdown-content">
                                                <p style="text-align: justify; margin: 17px;">     <b>A (ALta):</b><br>
                                                        Información cuya pérdida de exactitud y completitud puede conllevar un impacto negativo de índole legal o económica, 
                                                        retrasar sus funciones, o generar pérdidas de imagen severas de la entidad.<br>
                                                    
                                                        <b>M (Media):</b><br>
                                                        Información cuya pérdida de exactitud y completitud puede conllevar un impacto negativo de índole legal o económica, 
                                                        retrasar sus funciones, o generar pérdida de imagen moderado a funcionarios de la entidad.<br>
                                                    
                                                        <b>B (Baja):</b><br>
                                                        Información cuya pérdida de exactitud y completitud conlleva un impacto no significativo para la entidad 
                                                        o los entes externos.<br>
                                                    
                                                        <b>No Clasificada:</b><br>
                                                        Activos de Información que deben ser incluidos en el inventario y que aún no han sido clasificados, 
                                                        deben ser tratados como activos de Información de Integridad ALTA.<br>    
                                                </p>
                                            </div>  
                                        </div>         
                                        </td>
                                    <td colspan="4"> 
                                        <select id="integ_a"  class="form-control3"  name="integridad" required>  
                                        <option class="form-control" value="<?php echo "".$integridad ;?>"><h1><?php echo "".$integridad ;?></h1></option>            
                                             <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM act_integridad");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_integridad].'">'.$valores[nombre_integridad].'</option>';
                                                
                                                        
                                                } 
                                    
                                            ?>         

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="dropdown">
                                        <label for="disp_a">Disponibilidad</label>
                                            <div class="dropdown-content">
                                                <p style="text-align: justify; margin: 17px;">     <b>A (ALta):</b><br>
                                                        La no disponibilidad de la información puede conllevar un impacto negativo de índole legal o económica, 
                                                        retrasar sus funciones, o generar pérdidas de imagen severas a entes externos.<br>
                                                    
                                                        <b>M (Media):</b><br>
                                                        La no disponibilidad de la información puede conllevar un impacto negativo de índole legal o económica, 
                                                        retrasar sus funciones, o generar pérdida de imagen moderado de la entidad.<br>
                                                    
                                                        <b>B (Baja):</b><br>
                                                        La no disponibilidad de la información puede afectar la operación normal de la entidad o entes externos, 
                                                        pero no conlleva implicaciones legales, económicas o de pérdida de imagen.<br>
                                                    
                                                        <b>No Clasificada:</b><br>
                                                        Activos de Información que deben ser incluidos en el inventario y que aún no han sido clasificados, 
                                                        deben ser tratados como activos de Información de Disponibilidad ALTA.<br>    
                                                </p>
                                            </div>  
                                        </div>         
                                    </td>
                                    <td colspan="4">
                                        <select id="disp_a"  class="form-control3"  name="disponibilidad" required>
                                        <option class="form-control" value="<?php echo "".$disponibilidad ;?>"><h1><?php echo "".$disponibilidad ;?></h1></option>
                                        <?php
                                        $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                        $query = $mysqli -> query ("SELECT * FROM act_disponibilidad");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[id_disponibilidad].'">'.$valores[nombre_disponibilidad].'</option>';
                                        
                                                
                                            } 
                                
                                        ?>  
                                        </select>
                                    </td>
                                </tr>


                                <tr>
                                    <td colspan="1"><label for="ubi_ac">UBICACIÓN</label></td> 
                                    <td colspan="2">
                                        <select id="ubi_ac" class="form-control3" name="ubicacion_act" require/>                        
                                            
                                            <option class="form-control" value="<?php echo "".$ubicacion_act ;?>"><h1><?php echo "".$ubicacion_act ;?></h1></option>
                                                <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM act_ubicacion");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[id_ubicacion].'">'.$valores[nombre_ubicacion].'</option>';
                                                    
                                                            
                                                    } 
                                        
                                                ?>         
                                        </select>
                                        <input id="version_i" name="descr_ubicacion_act2" type="text" value="<?php echo "".$descr_ubicacion_act2 ;?>" class="form-control3" placeholder="Describa la ubicación del activo" required>                                
                                    </td>
                                    <td><label for="niv_act">Nivel de Criticidad:</label></td>
                                    <td colspan="2">
                                    <select id="niv_act" class="form-control3" name="criticidad_act" require/>                        
                                        
                                        <option class="form-control" value="<?php echo "".$criticidad_act ;?>"><h1><?php echo "".$criticidad_act ;?></h1></option>
                                            <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM act_nivel_criticidad");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_nivel_criticidad].'">'.$valores[nombre_nivel_criticidad].'</option>';  
                                                } 
                                    
                                            ?>         
                                        </select>
                                    </td>
                                </tr>                     
                                <tr>
                                    <td colspan="1"><label for="just_act">Justificación:</label></td> 
                                    <td colspan="5">
                                    <input id="just_act" name="justificacion_act" type="text" value="<?php echo "".$justificacion_act;?>" class="form-control3" placeholder="Describa la ubicación del activo" required>                                
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="6" style="text-align: center;">PROPIEDAD - ACCESO - GESTIÓN </td>
                                </tr>
                                <tr>
                                    <td colspan="1"><label for="prop_act">Propietario:</label></td> 
                                    <td colspan="5">
                                        <input id="prop_act" name="propietario_act" value="<?php echo "".$propietario_act;?>" type="text" class="form-control3" placeholder="Responsable de la Producción de la Información" required>                                
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1"><label for="cust_act">Custodio:</label></td> 
                                    <td colspan="5">
                                        <input id="cust_act" name="custodio_act" type="text" class="form-control3" value="<?php echo "".$custodio_act;?>" placeholder="Responsable de la Información" required>                                
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1"><label for="fecha_act">Fecha ingreso del Activo:</label></td> 
                                    <td colspan="3">
                                    <input id="fecha_r" name="fecha_ingr_act"  value='<?php echo "".$fecha_ingr_act ;?>' type="text" class="form-control3"  readonly="readonly">

                                    </td>
                                    <td colspan="1"><label for="fecha1_act">Fecha salida del Activo:</label></td> 
                                    <td colspan="2">
                                    <input id="fecha_r" name="fecha_sali_act"  value='<?php echo "".$fecha_sali_act ;?>' type="text" class="form-control3"  readonly="readonly">

                                    </td>
                                </tr>
                            </table>
                            
                                <br><br> 
                        
                                <br><br>
                        </div>
                    </div>
                
                    <center>
                        <button type="submit" value="2" name="enviar" id="btnNuevaFactura" class="btn btn-success">Guardar</button>
                    </center>
                    </form>
                </center>
                    </div>
        </div>
    </div>  
</section> 
   

                      <?php 
                    
                      
                    
                      
                      /* -----------------Alerta para notificar registro ------------------------*/
                                                    }               
                            } 
                            if($enviar==2){
/*                                 if(!=''){}
 */                                $miconexion=conectar_bd("",'bd_ciberseguridad');

                              $id=$_SESSION['identificador'];
                              $identificador=$_POST['identificador'];
                              $fecha=$_POST['fecha'];
                              $responsable=$_POST['responsable'];
                              /*--------------------------------------- */
                               $nombre_act=$_POST['nombre_act']; 
                               $observaciones=$_POST['observaciones'];
                               $tipo_activo=$_POST['tipo_activo'];
                               $confidencialidad=$_POST['confidencialidad'];
                               $integridad=$_POST['integridad'];
                               $disponibilidad=$_POST['disponibilidad'];
                               $ubicacion_act=$_POST['ubicacion_act'];
                               $descr_ubicacion_act2=$_POST['descr_ubicacion_act2'];
                               $criticidad_act=$_POST['criticidad_act'];
                               $justificacion_act=$_POST['justificacion_act'];
                              /*--------------------------------------- */
                               $propietario_act=$_POST['propietario_act']; 
                               $custodio_act=$_POST['custodio_act'];
                              /*  $fecha_ingr_act=$_POST['fecha_ingr_act'];
                               $fecha_sali_act=$_POST['fecha_sali_act'];  */

                                $consultar=consulta($miconexion," UPDATE `gestion_activo` SET `nombre_act`='$nombre_act',
                                `obser_act`='$observaciones',
                                `tipo_act`='$tipo_activo',`confid_act`='$confidencialidad',`integ_act`='$integridad',
                                `dispon_act`='$disponibilidad',`ubicac_act`='$ubicacion_act',`desc_ubic_act`='$descr_ubicacion_act2',
                                `critic_act`='$criticidad_act',`justif_act`='$justificacion_act',`propiet_act`='$propietario_act',
                                `custod_act`='$custodio_act' WHERE identi_act like '$id'");
                             
                           
                            }
                          /*   else{
                                echo "<script>
                                    Swal.fire({type: 'error',
                                        title: 'error',
                                        text: 'Por favor intente de nuevo',
                                        
                                    }).then(function() {
                                        window.location = 'crear_incidente.php';
                                    });
                                    </script>" ;
                            }   */        
                        
                                
                            } 
    
    
     
 
?>

    
    </body>
    
</html>
