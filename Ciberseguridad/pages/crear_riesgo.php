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

        <title>Riesgo | Ciberseguridad</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
<!--        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
 -->       
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
                    <h2 class="page-header">Gestión de Riesgos</h2>
                </div>
            </div>
            <div class="cont-b">
        <form >

            <center><div class="cont_inc"><br><br>
                    
                <div class="text_acta">
                    <br><br>
                    
                    <table>
                        <tr class="fondo_sub2">
                            <th colspan="5" style="text-align: center;">GESTIÓN DE RIESGOS
                                <br>
                            </th>
                            <td colspan="3">  Versión:
                                <?php
                                    $miconexion=conectar_bd("",'bd_ciberseguridad');               
                                    $guardado=consulta($miconexion,"SELECT * FROM `gestion_incidente` ");
                                    $fila = $guardado->fetch_object();
                                    $valor=$fila->id_in;
                                
                                ?>                                      
                                  <input id="version_i" name="version_riesgo" type="text" class="form-control3" placeholder='<?php echo "version actual:".$valor; ?>' disabled>

                                      Fecha:
                                      <?php
                                        // Obteniendo la fecha actual con hora, minutos y segundos en PHP
                                        $fechaActual = date('d-m-Y H:i:s');
                                        ?>
                                      <input id="fecha_r" name="fecha_actual"  class="form-control3" placeholder='<?php echo $fechaActual; ?>' disabled >

                                Responsable:<!--  <input type="text" class="texc1r" id="inc_3" readonly="readonly"></input> -->
                                <input id="resp_i" name="resp_i2" type="text" class="form-control3" required>

                            
                            </td>
                        </tr>
                        
                        <tr class="fondo_sub">
                            <td colspan="7" style="text-align: center;">ANÁLISIS DEL RIESGO </td>
                        </tr>
                       
                       
                        <tr>
                            <td colspan="1">Proceso:
                            </td> 
                            <td colspan="6">
<!--                          <input type="text" class="texc1" id="inc_4" readonly="readonly"></input>-->
                            <textarea class="form-control3" id="inc_13" name="proceso_riesgo" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>

                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">Objetivo:
                            </td> 
                            <td colspan="6">
<!--                                     <input type="text" class="texc1" id="inc_5" readonly="readonly"></input>-->                                    
                            <textarea class="form-control3" id="inc_13" name="objetivo_riesgo" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>

                            </td>
                        </tr>

                            
                 
        
                            <tr>
                                <td rowspan="2" colspan="2" style="text-align: center;">RIESGO</td>
                                <td colspan="2"  style="text-align: center;">CALIFICACIÓN</td>
                                <td rowspan="2"  style="text-align: center;">Tipo de Impacto</td>
                                <td rowspan=""  style="text-align: center;">Evaluación</td>
                                <td rowspan="2"  style="text-align: center;">Medidas de Respuesta</td>
                            </tr>
                            <tr>
                                <td>Probabilidad</td>
                                <td>Impacto</td>
                                <td  style="text-align: center;">Zona de Riesgo</td>
                                
                            </tr>
                                

                                <tr>
                                    <td colspan="2">
                                    <select   class="form-control3"  name="tipo_riesgo" required>
                                            <option value="" selected>Seleccione una opción</option>
                                            <option value="medio">Riesgos de Cumplimiento</option>
                                            <option value="alto">Riesgos de Imagen</option>
                                            <option value="bajo">Riesgos de Tecnología </option>
                                            <option value="critico">Riesgo Estratégico</option>
                                            <option value="bajo">Riesgos Financieros </option>
                                            <option value="medio">Riesgos Operativos</option>
                                    </select>

                                    </td> 
                                    <td> <select   class="form-control3"  name="probabilidad_riesgo" required>
                                            <option value="" selected>Seleccione una opción</option>
                                            <option value="medio">1</option>
                                            <option value="alto">2</option>
                                            <option value="bajo">3 </option>
                                            <option value="critico">4</option>
                                            <option value="bajo">5 </option>
                                    </select></td>
                                    <td> <select   class="form-control3"  name="impacto_riesgo" required>
                                    <option value="" selected>Seleccione una opción</option>
                                            <option value="medio">1</option>
                                            <option value="alto">2</option>
                                            <option value="bajo">3 </option>
                                            <option value="critico">4</option>
                                            <option value="bajo">5 </option>
                                    </select></td>
                                    <td> <select   class="form-control3"  name="tipo_impacto_riesgo" required>
                                            <option value="" selected>Seleccione una opción</option>
                                            <option value="medio">B</option>
                                            <option value="alto">M</option>
                                            <option value="bajo">A </option>
                                            <option value="critico">E</option>
                                    </select></td>
                                    <td> <select   class="form-control3"  name="zona_riesgo" required>
                                    <option value="" selected>Seleccione una opción</option>
                                            <option value="medio">B</option>
                                            <option value="alto">M</option>
                                            <option value="bajo">A </option>
                                            <option value="critico">E</option>
                                    </select></td>
                                    <td> 
                                    <textarea class="form-control3" id="inc_13" name="medidas_respuesta" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>

                                    </td>
                                   
                                </tr>
   
                        <tr class="fondo_sub">
                            <td colspan="7" style="text-align: center;">VALORACIÓN DEL RIESGO </td>
                        </tr>
                        <tr>
                                <td rowspan="2" colspan="2" style="text-align: center;">CONTROLES</td>
                                <td colspan="5"  style="text-align: center;">VALORACIÓN</td>
                            </tr>
                            <tr>
                                <td colspan="2">Tipo de controles</td>
                                <td colspan="1">Puntaje herramientas para ejercer el control</td>
                                <td colspan="1">Puntaje seguimiento al control</td>
                                <td colspan="1">Puntaje final</td>                               
                            </tr>
                                

                                <tr>
                                    <td colspan="2">
                                    <textarea class="form-control3" id="inc_13" name="control" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>
                                    </td> 
                                    <td colspan="2"> <select   class="form-control3"  name="tipo_controles" required>
                                        <option value="" selected>Seleccione una opción</option>
                                        <option value="medio">Probabilidad</option>
                                        <option value="alto">Impacto</option>
                                    </select></td>
                                    <td> 
                                    <input id="version_i" name="puntaje_control" type="number" class="form-control3" max="100" min="0" required>
                                    </td>
                                    <td> 
                                    <input id="version_i" name="puntaje_seguimiento" type="number" class="form-control3" max="100" min="0"  required>
                                    </td>
                                    <td> 
                                    <input id="version_i" name="puntaje_final" type="number" class="form-control3" max="100" min="0"  required>
                                    </td>
                                   
                                </tr>

                                <tr class="fondo_sub">
                                    <td colspan="7" style="text-align: center;">MAPA DE RIESGOS </td>
                                </tr>
                                <tr>
                            <td colspan="1">Acciones:
                            </td> 
                            <td colspan="6">
<!--                          <input type="text" class="texc1" id="inc_4" readonly="readonly"></input>-->
                            <textarea class="form-control3" id="inc_13" name="acciones" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>

                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">Responsable:
                            </td> 
                            <td colspan="6">
<!--                                     <input type="text" class="texc1" id="inc_5" readonly="readonly"></input>-->                                    
                            <textarea class="form-control3" id="inc_13" name="responsable" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">Indicador:
                            </td> 
                            <td colspan="6">
<!--                                     <input type="text" class="texc1" id="inc_5" readonly="readonly"></input>-->                                    
                            <textarea class="form-control3" id="inc_13" name="indicador" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>

                            </td>
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
        


        <!-- <section>
            <div id="modal_c" class="modal">
             
              <center><div  class="marco_modal">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('modal_c').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
        
                <form class="formulario" method="post"  >
                  <label>Tipo:</label>
                  <select id="doc" name="tip_id">
                    <option class="" value="0"> Tipo de documento</option>
                    <?php
                   /*  $mysqli = new mysqli('127.0.0.1', 'root', '', 'facturacion');
                    $query =  $mysqli-> query ("select * from tipo_documentos");
                    while ($valores = mysqli_fetch_array($query)) {
                      echo '<option value="'.$valores['id_tipo_doc'].'">'.$valores['tipo_doc'].'</option>';
        
                    }  */
                    ?>
        
                  </select>
        
                  <label>Documento:</label>
                  <input class="" name="numdoc" placeholder="Número de documento">
                    <br>
                  <button type="submit" value="1" name="consulta" id="btnNuevaFactura" class="btn btn-success">Consultar</button>
        
                </form>
        
        
              </div></center>
        
            </div>
        </section> -->



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
           
            $control=$_POST['guardar'];
            if ($control==1){
                $vnombre=$_POST['nom_e'];
               $version_riesgo=$_POST['version_riesgo'];
               $fecha_actual=$_POST['fecha_actual'];
               $Responsable_riesgo=$_POST['Responsable_riesgo'];
               $proceso_riesgo=$_POST['proceso_riesgo'];
               $




            }
           
            
          
            
        }  
        ?>

    
    </body>
    
</html>
