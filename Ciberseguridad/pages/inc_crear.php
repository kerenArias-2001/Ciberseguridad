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
                                        /*    $miconexion=conectar_bd("",'bd_ciberseguridad');               
                                        $guardado=consulta($miconexion,"SELECT * FROM `gestion_incidente` ");
                                        $fila = $guardado->fetch_object();
                                        $valor=$fila->id_in; */
                                    ?>                                      
                                    <input id="version_i" name="cod_in" type="text" class="form-control3" placeholder='' >
                                    Fecha:
                                    <?php
                                    // Obteniendo la fecha actual con hora, minutos y segundos en PHP
                                    $fechaActual = date('d-m-Y H:i:s');
                                    ?>
                                    <input id="fecha_r" name="fecha_r" type="datetime-local" class="form-control3" >
                                    Responsable:<!--  <input type="text" class="texc1r" id="inc_3" readonly="readonly"></input> -->
                                    <input id="resp_i" name="responsable_in" type="text" class="form-control3" >
                                </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">INFORMACIÓN DEL ENCARGADO </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Fecha y hora del reporte:</td> 
                                    <td colspan="2">
                                        <input id="fecha_hora" name="fecha_hora_reporte" type="datetime-local" class="form-control3">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">Nombre de quien reporta:</td> 
                                    <td colspan="2">
                                        <input id="rep_i" name="nombre_quien_reporta" type="text" class="form-control3" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cargo:</td>
                                    <td>
                                        <select id="m1" class="form-control3" name="cargo_in" require/>                        
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM cargo");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_cargo].'">'.$valores[nombre_cargo].'</option>';                                                        
                                                    } 
                                                ?>         
                                        </select>
                                    </td>
                                    <td>Código del empleado:</td>
                                    <td>
                                        <input id="dep_i" name="codigo_emp" type="text" class="form-control3" >                                              
                                    </td>
                                </tr>
                                <tr>
                                        <td>Sede:</td>
                                        <td> <!-- <input type="text" class="texc1" id="inc_8" readonly="readonly"></input> -->
                                        <select id="sede_i" class="form-control3" name="sede_in" require/>                        
                                                
                                                <option class="form-control" value=""><h1>Seleccione una opción</h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM sede");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[id_sede].'">'.$valores[nombre_sede].'</option>';
                                                    
                                                            
                                                        } 
                                        
                                                    ?>         
                                            </select>
                                    </td>
                                    <td>E-mail:</td>
                                    <td>
                                        <input name="email_in" type="text">    
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">INFORMACIÓN GENERAL DEL INCIDENTE</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Fecha y hora del incidente:</td> 
                                    <td colspan="2">
                                        <input id="fech_hora" name="fech_hora_in" type="datetime-local" class="form-control3" >
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Categoría:</td> 
                                    <td colspan="2"> 
                                        <select id="m1" class="form-control3" name="categoria_in" require/>                        
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM categoria");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_categoria].'">'.$valores[nombre_categoria].'</option>';
                                                
                                                    } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Tipo:</td> 
                                    <td colspan="2">
                                        <select id="m1" class="form-control3" name="tipo_in" require/>                        
                                            
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM tipo_incidentes");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_tipo_in].'">'.$valores[nombre_tipo_in].'</option>';
                                                        
                                                } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Estado:</td> 
                                    <td colspan="2"> 
                                        <select id="m1" class="form-control3" name="estado_in" require/>                        
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM estado");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_estado].'">'.$valores[nombre_estado].'</option>';
                                                        
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
                                    <select  class="form-control3" name="importante" require/>                        
                                                
                                                <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM priorizacion");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="'.$valores[id_priorizacion].'">'.$valores[nombre_priorizacion].'</option>';
                                                    
                                                                
                                                        } 
                                            
                                                    ?>         
                                            </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Escalamiento:</td> 
                                    <td colspan="2"> 
                                        <select id="m1" class="form-control3" name="escal" require>                        
                                            <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                                <?php
                                                $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                $query = $mysqli -> query ("SELECT * FROM escalamiento");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[id_escalamiento].'">'.$valores[nombre_escalamiento].'</option>';
                                                
                                                    } 
                                                ?>         
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Lugar o sede del incidente:</td> 
                                    <td colspan="2">
                                        <input id="lugar_i" name="lugar_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">DIAGNÓSTICO, SOLUCIÓN Y OBSERVACIONES PARA EL INCIDENTE REPORTADO</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Descripción:</td> 
                                    <td colspan="2">
                                        <textarea class="form-control3" id="inc_13" name="descripcion_in" rows="8" cols="70" minlength="10" maxlength="200"  placeholder="Máximo 200 caracteres" ></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Causa:
                                    </td> 
                                    <td colspan="2">

                                    <select id="m1" class="form-control3" name="nomb_iM" require/>                        
                                                <option class="form-control" value=""><h1>Seleccione una opción</h1></option>
                                                    <?php
                                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                                    $query = $mysqli -> query ("SELECT * FROM causa_inc");
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
                                                <option value="" selected>Seleccione una opción</option>
                                                <option value="alto">Alto</option>
                                                <option value="medio">Medio</option>
                                                <option value="bajo">Bajo</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Solución:</td> 
                                    <td colspan="2">
                                        <textarea class="form-control3" id="inc_13" name="solucion_in" rows="8" cols="70" minlength="10" maxlength="200" placeholder="Máximo 200 caracteres" ></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Observaciones:
                                    </td> 
                                    <td colspan="2">
                                    <textarea class="form-control3" id="inc_13" name="observaciones_in" rows="8" cols="70" minlength="10" maxlength="200" placeholder="Máximo 200 caracteres" ></textarea>
                                    </td>
                                </tr>
                                <tr class="fondo_sub">
                                    <td colspan="4" style="text-align: center;">CARACTERISTICAS DEL ACTIVO</td>
                                </tr>
                                <tr>
                                    <td colspan="1">S/N
                                    </td> 
                                    <td colspan="1">
                                     <input id="lugar_i" name="SN_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >
                                    </td>
                                    <td colspan="1">Marca
                                    </td> 
                                    <td colspan="1">
                                     <input id="lugar_i" name="marca_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">modelo </td> 
                                    <td colspan="2">
                                        <input id="lugar_i" name="modelo_in" type="text" class="form-control3"  minlength="10" maxlength="80"  placeholder="Máximo 80 caracteres" >
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
             '$observaciones','','','')");
                 if($guardado)
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
