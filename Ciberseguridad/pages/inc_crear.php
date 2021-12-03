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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/metisMenu.min.css" rel="stylesheet">
    <link href="../css/startmin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<div id="wrapper">
    <?php
        $miconexion=conectar_bd("",'bd_ciberseguridad');
        session_start();
        $busqueda=consulta($miconexion,"SELECT * FROM administrador WHERE correo_adm ='{$_SESSION['nusuario']}'");
    
        /* echo"***************+++++++++++++++++++++++*****************************",$_SESSION['nusuario']; */
        $fila1 = $busqueda->fetch_object(); 
        $nombre=$fila1->nombre_adm;
        $i=0;
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_ciberseguridad');
        $query = $mysqli -> query ("SELECT * FROM administrador");
        while ($valores = mysqli_fetch_array($query)) {
                $i=$i+1;
        } 
        /*  echo "<label class='form-control3'> los datos encontrados  son :".$i."</label>"; */        

    include('../nabvar.php');
    ?>
        
<section id="acuerdo" style="background-color: #ccc; height: 562px;">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Incidentes de Seguridad</h2>
                </div>
            </div>
            <div class="cont-b">
                <form  id=""  method="post" action="" >
                    <center><div class="cont_inc"><br><br>
                        <div class="text_acta">
                            <br><br>
                            
                            <table>
                                <tr class="fondo_sub2">
                                    <th colspan="3" style="text-align: center;">REPORTES DE INCIDENTES DE SEGURIDAD <br>
                                    </th>
                                <td colspan="3">  Código del incidente:     
                                    <?php
                                        $cont=0;
                                        $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                        $query = $mysqli -> query ("SELECT * FROM inc_codigo");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            $cont=$cont+1;                                 
                                            
                                        }    $cont=$cont+1;
                                        
                                        ?>                                
                                    <input id="version_i" name="cod_in" type="text" value='<?php echo $cont;?>' class="form-control3" placeholder=''  readonly="readonly" >
                                    Fecha:
                                    <?php
                                    // Obteniendo la fecha actual con hora, minutos y segundos en PHP
                                  
                                    $zonahoraria = date_default_timezone_set('America/Bogota');
                                
                                    $fechaActual = date('m-d-Y h:i:s a', time());
                                   
                                    ?>
                                    <input id="fecha_r" name="fecha_r"  value='<?php echo "".$fechaActual ;?>' type="text" class="form-control3"  readonly="readonly">
                                    Responsable:<!--  <input type="text" class="texc1r" id="inc_3" readonly="readonly"></input> -->
                                    <input id="resp_i" name="responsable_in" type="text" class="form-control3" >
                                </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">INFORMACIÓN DEL ENCARGADO </td>
                                </tr>
                           
                                <tr>
                                    <td colspan="2"><label for="rep_i">Nombre de quien reporta:</label></td> 
                                    <td colspan="2">
                                        <input id="rep_i" name="nombre_quien_reporta" type="text" class="form-control3" >
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="carg_i">Cargo:</label></td>
                                    <td>
                                        <select id="carg_i" class="form-control3" name="cargo_in" require/>                        
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_cargo");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[nombre_cargo].'">'.$valores[nombre_cargo].'</option>';                                                        
                                                    } 
                                                ?>         
                                        </select>
                                    </td>
                                    <td><label for="dep_i">Código del empleado: </label></td>
                                    <td>
                                   
                                        <input id="dep_i" name="codigo_emp" type="text" value="" class="form-control3" >  
                                                                                    
                                    </td>
                                </tr>
                                <tr>
                                        <td><label for="sede_i">Sede:</label></td>
                                        <td> <!-- <input type="text" class="texc1" id="inc_8" readonly="readonly"></input> -->
                                        <select id="sede_i" class="form-control3" name="sede_in" require/>                        
                                                
                                                <option class="form-control" value=""><h1>Seleccione una opción</h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM inc_sede");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[nombre_sede].'">'.$valores[nombre_sede].'</option>';
                                                    
                                                            
                                                        } 
                                        
                                                    ?>         
                                            </select>
                                    </td>
                                    <td><label for="email_i">E-mail</label></td>
                                    <td>
                                        <input id="email_i" name="email_in" type="text" class="form-control3">    
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">INFORMACIÓN GENERAL DEL INCIDENTE</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="fech_hora">Fecha y hora del incidente:</label></td> 
                                    <td colspan="2">
                                        <input id="fech_hora" name="fech_hora_in" type="datetime-local" class="form-control3" >
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="cat_in">Categoría:</label></td> 
                                    <td colspan="2"> 
                                        <select id="cat_in" class="form-control3" name="categoria_in" require/>                        
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_categoria");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[nombre_categoria].'">'.$valores[nombre_categoria].'</option>';
                                                
                                                    } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="tip_i">Tipo:</label></td> 
                                    <td colspan="2">
                                        <select id="tip_i" class="form-control3" name="tipo_in" require/>                        
                                            
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_tipo_incidentes");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[nombre_tipo_in].'">'.$valores[nombre_tipo_in].'</option>';
                                                        
                                                } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="estad_i">Estado:</label></td> 
                                    <td colspan="2"> 
                                        <select id="estad_i" class="form-control3" name="estado_in" require/>                        
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_estado");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[nombre_estado].'">'.$valores[nombre_estado].'</option>';
                                                        
                                                } 
                                            ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">VALORACIÓN DEL INCIDENTE</td>
                                </tr>             
                                <tr>
                                    <td colspan="2"><label for="prio_i">Priorización:</label></td> 
                                    <td colspan="2">                          
                                    <select  id="prio_i" class="form-control3" name="importante" require/>                        
                                                <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM inc_priorizacion");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[nombre_priorizacion].'">'.$valores[nombre_priorizacion].'</option>';
                                                                
                                                        } 
                                            
                                                    ?>         
                                            </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="escal_i">Escalamiento:</label></td> 
                                    <td colspan="2"> 
                                        <select id="escal_i" class="form-control3" name="escal" require>                        
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM inc_escalamiento");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[nombre_escalamiento].'">'.$valores[nombre_escalamiento].'</option>';
                                                
                                                    } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="lugar_i">Lugar o sede del incidente:</label></td> 
                                    <td colspan="2">
                                        <input id="lugar_i" name="lugar_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">DIAGNÓSTICO, SOLUCIÓN Y OBSERVACIONES PARA EL INCIDENTE REPORTADO</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="inc_13">Descripción:</label></td> 
                                    <td colspan="2">
                                        <textarea class="form-control3" id="inc_13" name="descripcion_in" rows="8" cols="70" minlength="10" maxlength="200"  placeholder="Máximo 200 caracteres" ></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="causa_i">Causa:</label></td> 
                                    <td colspan="2">
                                    <select id="causa_i" class="form-control3" name="nomb_iM" require/>                        
                                                <option class="form-control" value=""><h1>Seleccione una opción</h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM inc_causa");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[nombre_causa].'">'.$valores[nombre_causa].'</option>';
                                                                
                                                        } 
                                            
                                                    ?>         
                                            </select>                                    
                                        </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="impac_i">Impacto:</label></td> 
                                    <td colspan="2">                                 
                                        <select id="causa_i" class="form-control3" name="impacto_in" require/>                        
                                                <option class="form-control" value=""><h1>Seleccione una opción</h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM inc_impacto");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[nombre_impacto].'">'.$valores[nombre_impacto].'</option>';
                                                                
                                                        } 
                                            
                                                    ?>         
                                            </select>  
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="soluc_i">Solución:</label></td> 
                                    <td colspan="2">
                                        <textarea class="form-control3" id="soluc_i" name="solucion_in" rows="8" cols="70" minlength="10" maxlength="200" placeholder="Máximo 200 caracteres" ></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="obser_i">Observaciones:</label></td> 
                                    <td colspan="2">
                                    <textarea class="form-control3" id="obser_i" name="observaciones_in" rows="8" cols="70" minlength="10" maxlength="200" placeholder="Máximo 200 caracteres" ></textarea>
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">CARACTERISTICAS DEL ACTIVO</td>
                                </tr>
                                <tr>
                                    <td colspan="1"><label for="serial_i">Serial/Núm:</label></td> 
                                    <td colspan="1">
                                     <input id="serial_i" name="SN_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >
                                    </td>
                                    <td colspan="1"><label for="marca_i">Marca:</label></td> 
                                    <td colspan="1">
                                     <input id="marca_i" name="marca_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><label for="model_i">Modelo:</label></td> 
                                    <td colspan="2">
                                        <input id="model_i" name="modelo_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >
                                    </td>
                                </tr>
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
             
             $codigo_in=$_POST['cod_in'];
             $fecha=$_POST['fecha_r'];
             $responsable_in=$_POST['responsable_in'];
              
             /* ------------------------------------ */
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
               $priorizacionin=$_POST['importante'];
             $escalamientoin=$_POST['escal'];
             $lugarin=$_POST['lugar_in']; 
        
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
  
     
             $guardado=consulta($miconexion,"INSERT INTO `gestion_incidente`
             ( `codigo_in`, `responsable_in`, `fecha_r`, `nombre_R`, `cargo`, `cod_emp`, `sede`, `email_in`,
              `categoria_in`, `tipo_in`, `estado`, `priorizacion_in`, `escalamiento`, `lugar`, `descripcion_in`,
              
               `fecha_inc`, `causa_in`, `impacto_in`, `solu_in`, `observaciones`, `SN`, `marca`, `modelo`) 
             VALUES  ('$codigo_in','$responsable_in','$fecha','$nombre_rep','$cargo_ain','$codigo_emp',
             '$sede_in','$mail_1','$categoria','$tipo','$estado','$priorizacionin','$escalamientoin',
             '$lugarin','$descripcion_in','$fech_hora_in','$causa_in','$impacto_in','$solucion_in',
             '$observaciones','$SN_in','$marca_in','$modelo_in')");
                 if($guardado)
                  {  $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                    $query = $mysqli -> query ("INSERT INTO `inc_codigo`( `nombre_codigo`) VALUES ('$codigo_in')" );
                  
                      
                    /* -----------------Alerta para notificar registro ------------------------*/

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
