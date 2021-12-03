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
    <title>Consultar Incidentes | Ciberseguridad</title>
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
        $fila1 = $busqueda->fetch_object(); 
        $nombre=$fila1->nombre_adm;
        $i=0;
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_ciberseguridad');
        $query = $mysqli -> query ("SELECT * FROM administrador");
        while ($valores = mysqli_fetch_array($query)) {
                $i=$i+1;
        } 
        /*   echo "<label class='form-control3'> los datos encontrados  son :".$i."</label>";  */        

    include('../nabvar.php');
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
            
            $codigo_in=$_POST['cod_in'];
            $verificacion0=consulta($miconexion,"SELECT  EXISTS(SELECT * FROM `gestion_incidente` where  trim(codigo_in) like '{$codigo_in}' ) ");
            $row0=mysqli_fetch_row($verificacion0);
            if ($row0[0]>"0" ) {  
          
            echo "-----------". $codigo_in;
            $consultar=consulta($miconexion,"SELECT * FROM `gestion_incidente` WHERE `codigo_in` like '$codigo_in'");
            $fila0=$consultar->fetch_object(); 
          
            $responsable_in=$fila0->responsable_in;
            echo "-----------".$responsable_in;
            /* ------------------------------------ */
             $fecha_hora=$fila0->fecha_r;
             $nombre_rep=$fila0->nombre_R;
             $cargo_in=$fila0->cargo;
             $codigo_emp=$fila0->cod_emp;
             $sede_in=$fila0->sede;
             $mail_1=$fila0->email_in;
            /* ----------------------------------- */
              $fech_hora_in=$fila0->fecha_inc;
             $tipo=$fila0->tipo_in;
             $categoria=$fila0->categoria_in;
             $estado=$fila0->estado;
            /*--------------------------------------- */
               $priorizacion_in=$fila0->priorizacion_in;
             $escalamiento_in=$fila0->escalamiento;
             $lugar_in=$fila0->lugar;
            /* ---------------------------------- */
              $descripcion_in=$fila0->descripcion_in;
             $causa_in=$fila0->causa_in;
             $impacto_in=$fila0->impacto_in;
             $solucion_in=$fila0->solu_in;
             $observaciones=$fila0->observaciones;
            /* ------------------------- */
              $SN_in=$fila0->SN;
              $marca_in=$fila0->marca;
              $modelo_in=$fila0->modelo;
     
?> 
            <center>
                <div class="cont_inc"><br><br>
                    <div class="text_acta">
                        <br><br>
                        <table>
                            <tr class="fondo_sub2">
                                <th colspan="3" style="text-align: center;">REPORTES DE INCIDENTES DE SEGURIDAD <br></th>
                                <td colspan="3">  Código del incidente:                                     
                                    <label id="version_i" name="cod_in" type="text" class="form-control3" ><?php echo"".$codigo_in; ?></label>
                                    Fecha:
                                    <label id="fecha_r" name="fecha_r" type="datetime-local" class="form-control3"><?php echo"".$fech_hora_in;?></label>
                                    Responsable:<!--  <label type="text" class="texc1r" id="inc_3" readonly="readonly</input> -->
                                    <label id="resp_i" name="responsable_in" type="text" class="form-control3"><?php echo"".$responsable_in;?></label>
                                </td>
                            </tr>
                            <tr class="fondo_sub">
                                <td colspan="4" style="text-align: center;">INFORMACIÓN DEL ENCARGADO </td>
                            </tr>
                            <tr>
                                <td colspan="2">Fecha y hora del reporte:</td> 
                                <td colspan="2">
                                    <label id="fecha_hora" name="fecha_hora_reporte" type="datetime-local" class="form-control3"><?php echo"".$fecha_hora;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Nombre de quien reporta:</td> 
                                <td colspan="2">
                                    <label id="rep_i" name="nombre_quien_reporta" type="text" class="form-control3"><?php echo"".$nombre_rep;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Cargo:</td>
                                <td>
                                    <label id="cargo_i" name="cargo_in" type="text" class="form-control3"><?php echo"".$cargo_in;?></label>
                                </td>
                                <td>Código del empleado:</td>
                                <td>
                                    <label id="cod_emp_i" name="codigo_emp" type="text" class="form-control3"><?php echo"".$codigo_emp;?></label>                                             
                                </td>
                            </tr>
                            <tr>
                                <td>Sede:</td>
                                <td>
                                    <label id="sede_i" name="sede_in" type="text" class="form-control3"><?php echo"".$sede_in;?></label>                                             
                                </td>
                                <td>E-mail:</td>
                                <td>
                                    <label name="email_in" type="text"><?php echo"".$mail_1;?></label>   
                                </td>
                            </tr>
                            <tr class="fondo_sub">
                                <td colspan="4" style="text-align: center;">INFORMACIÓN GENERAL DEL INCIDENTE</td>
                            </tr>
                            <tr>
                                <td colspan="2">Fecha y hora del incidente:</td> 
                                <td colspan="2">
                                    <label id="fech_hora" name="fech_hora_in" type="datetime-local" class="form-control3"><?php echo"".$fech_hora_in;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Categoría:</td> 
                                <td colspan="2">
                                    <label id="categoria_i" name="categoria_in" type="datetime-local" class="form-control3"><?php echo"".$categoria;?></label>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Tipo:</td> 
                                <td colspan="2">
                                    <label id="tipo_i" name="tipo_in" type="datetime-local" class="form-control3"><?php echo"".$tipo;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Estado:</td> 
                                <td colspan="2"> 
                                    <label id="estado_i" name="estado_in" type="datetime-local" class="form-control3"><?php echo"".$estado;?></label>
                                </td>
                            </tr>
                            <tr class="fondo_sub">
                                <td colspan="4" style="text-align: center;">VALORACIÓN DEL INCIDENTE</td>
                            </tr>             
                            <tr>
                                <td colspan="2">Priorización:</td> 
                                <td colspan="2">                          
                                    <label id="priorizacion_i" name="priorizacion" type="datetime-local" class="form-control3"><?php echo"".$priorizacion_in;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Escalamiento:</td> 
                                <td colspan="2"> 
                                    <label id="escalamiento_i" name="escalamiento" type="datetime-local" class="form-control3"><?php echo"".$escalamiento_in;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Lugar o sede del incidente:</td> 
                                <td colspan="2">
                                    <label id="lugar_i" name="lugar_in" type="text" class="form-control3"><?php echo"".$lugar_in;?></label>
                                </td>
                            </tr>
                            <tr class="fondo_sub">
                                <td colspan="4" style="text-align: center;">DIAGNÓSTICO, SOLUCIÓN Y OBSERVACIONES PARA EL INCIDENTE REPORTADO</td>
                            </tr>
                            <tr>
                                <td colspan="2">Descripción:</td> 
                                <td colspan="2">
                                    <label id="descripcion_i" name="descripcion_in" type="text" class="form-control3"><?php echo"".$descripcion_in;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Causa:</td> 
                                <td colspan="2">
                                    <label id="causa_i" name="causa_in" type="text" class="form-control3"><?php echo"".$causa_in;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Impacto:</td> 
                                <td colspan="2">                                 
                                    <label id="impacto_i" name="impacto_in" type="text" class="form-control3"><?php echo"".$impacto_in;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Solución:</td> 
                                <td colspan="2">
                                    <label id="solucion_i" name="solucion_in" type="text" class="form-control3"><?php echo"".$solucion_in;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Observaciones:</td> 
                                <td colspan="2">
                                    <label id="observaciones_i" name="observaciones_in" type="text" class="form-control3"><?php echo"".$observaciones;?></label>
                                </td>
                            </tr>
                            <tr class="fondo_sub">
                                <td colspan="4" style="text-align: center;">CARACTERISTICAS DEL ACTIVO</td>
                            </tr>
                            <tr>
                                <td colspan="1">S/N</td> 
                                <td colspan="1">
                                    <label id="SN_i" name="SN_in" type="text" class="form-control3"><?php echo"".$SN_in;?></label>
                                </td>
                                <td colspan="1">Marca
                                </td> 
                                <td colspan="1">
                                    <label id="marca_i" name="marca_in" type="text" class="form-control3"><?php echo"".$marca_in;?></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">modelo </td> 
                                <td colspan="2">
                                    <label id="modelo_i" name="modelo_in" type="text" class="form-control3"><?php echo"".$modelo_in;?></label>
                                </td>
                            </tr>
                        </table>
                            <br><br> 
                            <br><br>
                    </div>
                </div>                    
            </center>
        </div>
    </div>
</div>  
<?php 

/* -----------------Alerta para notificar registro ------------------------*/
}              
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
</html>
