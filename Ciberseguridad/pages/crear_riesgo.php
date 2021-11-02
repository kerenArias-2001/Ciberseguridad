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

        <title>Ciberseguridad</title>

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
                            <td colspan="3">  Versión:<input id="version_i" name="version_i2" type="number" class="form-control3" >
                                <!-- <input type="text" class="texc1" id="inc_1" ></input> -->
                            

                                Fecha:<!-- <input type="text" class="texc1" id="inc_2" readonly="readonly"></input> -->
                                <input id="fecha_r" name="fecha_r2" type="datetime-local" class="form-control3" >

                                Responsable:<!--  <input type="text" class="texc1r" id="inc_3" readonly="readonly"></input> -->
                                <input id="resp_i" name="resp_i2" type="text" class="form-control3" >

                            
                            </td>
                        </tr>
                        
                        <tr class="fondo_sub">
                            <td colspan="6" style="text-align: center;">ANÁLISIS DEL RIESGO </td>
                        </tr>
                       
                       
                        <tr>
                            <td colspan="1">Proceso:
                            </td> 
                            <td colspan="5">
<!--                          <input type="text" class="texc1" id="inc_4" readonly="readonly"></input>-->
                            <textarea class="form-control3" id="inc_13" name="textarea" rows="8" cols="70" placeholder="Máximo 200 caracteres" ></textarea>

                            </td>
                        </tr>

                            <tr>
                            <td colspan="1">Objetivo:
                            </td> 
                            <td colspan="5">
<!--                                     <input type="text" class="texc1" id="inc_5" readonly="readonly"></input>-->                                    
                            <textarea class="form-control3" id="inc_13" name="textarea" rows="8" cols="70" placeholder="Máximo 200 caracteres" ></textarea>

                            </td>
                        </tr>

                            
                 
              
                        <tr>
                                        <td rowspan="2"  style="text-align: center;">RIESGO</td>
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
                                    <td colspan="">
                                    <select id="m1" class="form-control3" name="tipoinc" require/>                        
                                        
                                        <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                                            <?php
                                            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_ciberseguridad');
                                            $query = $mysqli -> query ("SELECT * FROM tipo_incidentes");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="'.$valores[id_tipo_in].'">'.$valores[nombre_tipo_in].'</option>';
                                            
                                                   
                                            } 

                                            
                                        ?>         
                                    </select>

                                    </td> 
                                    <td><!-- <input type="text" class="texc1" id="inc_4" readonly="readonly"></input> --></td>
                                    <td><!-- <input type="text" class="texc1" id="inc_4" readonly="readonly"></input> --></td>
                                    <td><!-- <input type="text" class="texc1" id="inc_4" readonly="readonly"></input> --></td>
                                    <td><!-- <input type="text" class="texc1" id="inc_4" readonly="readonly"></input> --></td>
                                    <td><!-- <input type="text" class="texc1" id="inc_4" readonly="readonly"></input> --></td>
                                   
                                </tr>
 







                            
                        <tr>
                            <td colspan="2">Fecha y hora del incidente:
                            </td> 
                            <td colspan="2">
<!--                                     <input type="text" class="texc1" id="inc_10" readonly="readonly"></input>
-->                                    <input id="fech_hora" name="fech_hora2" type="datetime-local" class="form-control3" >

                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">Tipo:
                            </td> 
                            <td colspan="2">
<!--                                     <input type="text" class="texc1" id="inc_11" readonly="readonly"></input>
-->                                   
                                


                                    <select id="m1" class="form-control3" name="tipoinc" require/>                        
                                        
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
                                    <select   class="form-control3"  name="tipo_id" required>
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
<!--                                     <input type="text" class="texc1" id="inc_11" readonly="readonly"></input>
-->                                   
                                    <select   class="form-control3"  name="tipo_id" required>
                                            <option value="" selected>Seleccione una opción</option>
                                            <option value="alto">Alto</option>
                                            <option value="medio">Medio</option>
                                            <option value="bajo">Bajo</option>
                                    </select>

                            </td>
                        </tr>



                        <tr>
                            <td colspan="
                            2">Lugar o sede del incidente:
                            </td> 
                            <td colspan="2">
<!--                                     <input type="text" class="texc1" id="inc_11" readonly="readonly"></input>
-->                                    <input id="lugar_i" name="lugar_i2" type="text" class="form-control3" >

                            </td>
                        </tr>


                        <tr class="fondo_sub">
                            <td colspan="4" style="text-align: center;">Descripción del riesgo</td>
                        </tr>
                        <th colspan="4">
                                <label>
                                <textarea class="form-control3" id="inc_13" name="textarea" rows="8" cols="70" placeholder="Máximo 200 caracteres" ></textarea>
<!--                                         <input id="descrip_i" name="descrip_i2" type="text" class="form-control3" >
-->
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
                $vtipod=$_POST['tip_id'];
                $vcodigoi=$_POST['cod_i'];
                $vdoc=$_POST['numdoc'];
                $vrol=$_POST['rol'];
                $vnit=$_POST['nit'];
                $vdescrip=$_POST['descrip'];
                $vobser=$_POST['obser'];

            }
           
            
          
            
        }  
        ?>

    
    </body>
    
</html>
