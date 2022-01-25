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
    <title>Modificar Incidentes | Ciberseguridad</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/metisMenu.min.css" rel="stylesheet">
    <link href="../css/startmin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/datos.css">

</head>
<body>

    <?php
        $miconexion=conectar_bd("",'bd_ciberseguridad');
        session_start();
        $busqueda=consulta($miconexion,"SELECT * FROM administrador WHERE correo_adm ='{$_SESSION['nusuario']}'");
    
/*         echo"***************+++++++++++++++++++++++*****************************",$_SESSION['nusuario'];
 */        $fila1 = $busqueda->fetch_object(); 
        $nombre=$fila1->nombre_adm;
        $apellido=$fila1->apellido_adm;
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
        
<section id="" >
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
            $codigo_in=$_POST['cod_in'];
            $verificacion0=consulta($miconexion,"SELECT  EXISTS(SELECT * FROM `gestion_incidente` where  trim(codigo_in) like '{$codigo_in}' ) ");
            $row0=mysqli_fetch_row($verificacion0);
            if ($row0[0]>"0" ) {

   
            
            
            $consultar=consulta($miconexion,"SELECT * FROM `gestion_incidente` WHERE `codigo_in` like '$codigo_in'");
            $fila0=$consultar->fetch_object(); 
           
            $_SESSION['id_numero']=$fila0-> id_in;

          
            $responsable_in=$fila0->responsable_in;
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
<!-- ----------------------------------------------------------------------------- -->


                <center><div class="cont_inc"><br><br>
                    <form  id=""  method="post" action="" >     
                        <div class="text_acta">
                            <br><br>
                            
                            <table>
                                <tr class="fondo_sub2">
                                    <th colspan="3" style="text-align: center;">REPORTES DE INCIDENTES DE SEGURIDAD <br>
                                    </th>
                                <td colspan="3">  Código del incidente:                                     
                                    <label id="version_i" name="cod_in" type="text" class="form-control3" ><?php echo"".$codigo_in; ?></label>


                                    Fecha:
                                   <label id="fecha_r" name="fecha_r" type="datetime-local" class="form-control3"><?php echo"".$fech_hora_in;?></label>
                                        Responsable:<!--  <label type="text" class="texc1r" id="inc_3" readonly="readonly</input> -->
                                        <label id="resp_i" name="responsable_in" type="text" class="form-control3"><?php echo"".$responsable_in;?></label></td>
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
                                        <input id="fech_hora" name="fech_hora_in" type="text" class="form-control3"value='<?php echo"".$fech_hora_in;?>'>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Categoría:</td> 
                                    <td colspan="2">
                                        <select id="m1" class="form-control3" name="categoria_in" required>                        
                                            <option class="form-control" value='<?php echo"".$categoria;?>'><h1><?php echo"".$categoria;?></h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_categoria");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores['nombre_categoria'].'">'.$valores['nombre_categoria'].'</option>';
                                                
                                                    } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Tipo:</td> 
                                    <td colspan="2">
                                        <select id="m1" class="form-control3" name="tipo_in" required>                        
                                            
                                            <option class="form-control" value='<?php echo"".$tipo;?>'><h1><?php echo"".$tipo;?></h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_tipo_incidentes");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores['nombre_tipo_in'].'">'.$valores['nombre_tipo_in'].'</option>';
                                                        
                                                } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Estado:</td> 
                                    <td colspan="2"> 
                                    <select id="m1" class="form-control3" name="estado_in" required>                        
                                            <option class="form-control" value='<?php echo"".$estado;?>'"><h1><?php echo"".$estado;?></h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_estado");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores['nombre_estado'].'">'.$valores['nombre_estado'].'</option>';
                                                        
                                                } 
                                            ?>         
                                        </select>
                                </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">VALORACIÓN DEL INCIDENTE</td>
                                </tr>             
                                <tr>
                                    <td colspan="2">Priorización:</td> 
                                    <td colspan="2">                          
                                    <select  class="form-control3" name="priorizacion_in" required>                        
                                                
                                                <option class="form-control" value='<?php echo"".$priorizacion_in;?>'><h1><?php echo"".$priorizacion_in;?></h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM inc_priorizacion");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores['nombre_priorizacion'].'">'.$valores['nombre_priorizacion'].'</option>';
                                                    
                                                                
                                                        } 
                                            
                                                    ?>         
                                            </select>
                                    
                                </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Escalamiento:</td> 
                                    <td colspan="2"> 
                                                    <select id="m1" class="form-control3" name="escal" require>                        
                                            <option class="form-control" value="<?php echo "".$escalamiento_in ;?>"><h1><?php echo"".$escalamiento_in;?></h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_escalamiento");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores['nombre_escalamiento'].'">'.$valores['nombre_escalamiento'].'</option>';
                                                
                                                    } 
                                                ?>         
                                        </select>    
                                </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Lugar o sede del incidente:</td> 
                                    <td colspan="2">
                                    <input id="lugar_i" name="lugar_in" type="text" value='<?php echo"".$lugar_in;?>' class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >

                                </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">DIAGNÓSTICO, SOLUCIÓN Y OBSERVACIONES PARA EL INCIDENTE REPORTADO</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Descripción:</td> 
                                    <td colspan="2">
                                    <input class="form-control3" id="inc_13" name="descripcion_in" rows="8" cols="70" minlength="10" maxlength="200" value='<?php echo"".$descripcion_in;?>'  placeholder="Máximo 200 caracteres" ></input>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Causa:
                                    </td> 
                                    <td colspan="2">
                                      
                                        <select id="m1" class="form-control3" name="causa_in" required>                        
                                                <option class="form-control" value="<?php echo"".$causa_in;?>"><h1><?php echo"".$causa_in;?></h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM inc_causa");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[id_causa].'">'.$valores[nombre_causa].'</option>';
                                                    
                                                                
                                                        } 
                                            
                                                    ?>         
                                            </select>  
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Impacto:</td> 
                                    <td colspan="2">                                 
                                        
                                        <select   class="form-control3"  name="impacto_in" required>
                                                <option value="<?php echo"".$impacto_in;?>" selected><?php echo"".$impacto_in;?></option>
                                                <option value="alto">Alto</option>
                                                <option value="medio">Medio</option>
                                                <option value="bajo">Bajo</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Solución:</td> 
                                    <td colspan="2">
                                        <input class="form-control3" id="inc_13" name="solucion_in" rows="8" cols="70" value='<?php echo"".$solucion_in;?>' minlength="10" maxlength="200" placeholder="Máximo 200 caracteres" ></input>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Observaciones:
                                    </td> 
                                    <td colspan="2">
                                        <input class="form-control3" id="inc_13" name="observaciones_in" rows="8" cols="70"  value='<?php echo"".$observaciones;?>' minlength="10" maxlength="200" placeholder="Máximo 200 caracteres" ></input>

                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">CARACTERISTICAS DEL ACTIVO</td>
                                </tr>
                                <tr>
                                    <td colspan="1">S/N
                                    </td> 
                                    <td colspan="1">
                                        <input id="lugar_i" name="SN_in" type="text" class="form-control3" value='<?php echo"".$SN_in;?>' minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >

                                    </td>
                                    <td colspan="1">Marca
                                    </td> 
                                    <td colspan="1">
                                        <input id="lugar_i" name="marca_in" type="text" class="form-control3" value='<?php echo"".$marca_in;?>'  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">modelo </td> 
                                    <td colspan="2">
                                        <input id="lugar_i" value='<?php echo"".$modelo_in;?>' name="modelo_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >

                                    </td>
                                </tr>
                                
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
        <br>
        <br> 
            <footer style="background-color: #cccccc54 !important;/* width: 72%; */height: 56px;">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div style="float: right;">
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
</section> 
   

                      <?php 
                    
                      
                    
                      
                      /* -----------------Alerta para notificar registro ------------------------*/
                                                    }               
                            } 
                            if($enviar==2){
/*                                 if(!=''){}
 */                                $miconexion=conectar_bd("",'bd_ciberseguridad');

                              $id=$_SESSION['id_numero'];
                                /*$fecha=$_POST['fecha_r'];
                                $responsable_in=$_POST['responsable_in'];
                                  
                                
                                 $fecha_hora=$_POST['fecha_hora_reporte']; 
                                 $nombre_rep=$_POST['nombre_quien_reporta'];
                                 $cargo_ain=$_POST['cargo_in'];
                                 $codigo_emp=$_POST['codigo_emp'];
                                 $sede_in=$_POST['sede_in'];
                                 $mail_1=$_POST['email_in'];
                                 /* ----------------------------------- */
                                  $fech_hora_in=$_POST['fech_hora_in'];
                                 $tipo=$_POST['tipo_in'];
                                 $categoria=$_POST['categoria_in'];
                                 $estado=$_POST['estado_in']; 
                                   /*--------------------------------------- */
                                   $priorizacion_in=$_POST['priorizacion_in'];
                                 $escalamiento_in=$_POST['escal'];
                                 $lugar_in=$_POST['lugar_in']; 
                            
                                 /* ---------------------------------- */
                                  $descripcion_in=$_POST['descripcion_in'];
                                 $causa_in=$_POST['causa_in'];
                                 $impacto_in=$_POST['impacto_in'];
                                 $solucion_in=$_POST['solucion_in'];
                                 $observaciones=$_POST['observaciones_in']; 
                                 /* ------------------------- */
                                   $SN_in=$_POST['SN_in'];
                                  $marca_in=$_POST['marca_in'];
                                  $modelo_in=$_POST['modelo_in']; 
                                 /*  $resultado=consulta($miconexion,"SELECT * FROM `gestion_incidente` WHERE `id_in` like '$nomb_in' ");
                                  $fila0=$resultado->fetch_object(); 
                                  $valor=$fila0->id_causa; */

                                $consultar=consulta($miconexion," UPDATE `gestion_incidente` SET `categoria_in`='$categoria',
                                `tipo_in`='$tipo',`estado`='$estado',`priorizacion_in`='$priorizacion_in',
                                `escalamiento`='$escalamiento_in',`lugar`='$lugar_in',`descripcion_in`='$descripcion_in',
                                `fecha_inc`='$fech_hora_in',`causa_in`='$causa_in',`impacto_in`='$impacto_in',
                                `solu_in`='$solucion_in',`observaciones`='$observaciones',`SN`='$SN_in',
                                `marca`='$marca_in',`modelo`='$modelo_in'  WHERE id_in like '$id'");
                             
                           
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


<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/metisMenu.min.js"></script>
<script src="../js/startmin.js"></script>
    
    </body>
    
</html>
