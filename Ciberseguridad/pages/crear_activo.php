
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

        <title>Activos | Ciberseguridad</title>

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
                <h2 class="page-header">Gestión de Activos</h2>
            </div>
        </div>
        <div class="cont-b">
    <form >

        <center><div class="cont_inc"><br><br>
                
            <div class="text_acta">
                <br><br>
                
                <table>
                    <tr class="fondo_sub2">
                        <th colspan="5" style="text-align: center;">GESTIÓN DE ACTIVOS
                            <br>
                        </th>
                        <td colspan="3">  Versión:<input id="version_i" name="version_i2" type="number" class="form-control3" required>
                            <!-- <input type="text" class="texc1" id="inc_1" ></input> -->
                        

                            Fecha:<!-- <input type="text" class="texc1" id="inc_2" readonly="readonly"></input> -->
                            <input id="fecha_r" name="fecha_r2" type="datetime-local" class="form-control3" required >

                            Responsable:<!--  <input type="text" class="texc1r" id="inc_3" readonly="readonly"></input> -->
                            <input id="resp_i" name="resp_i2" type="text" class="form-control3" required>

                        
                        </td>
                    </tr>
                    
                    <tr class="fondo_sub">
                        <td colspan="6" style="text-align: center;">IDENTIFICACIÓN DEL ACTIVO </td>
                    </tr>
                   
                   
                    <tr>
                        <td colspan="1">Identificador:
                        </td> 
                        <td colspan="2"><input id="version_i" name="version_i2" type="number" class="form-control3" required>
                        </td>
                        <td colspan="1">Nombre:
                        </td> 
                        <td colspan="5">
                        <textarea class="form-control3" id="inc_13" name="textarea" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>
                        </td>
                    </tr>

                    <tr>
                
                    <td colspan="1">Descripción / Observaciones:
                    </td> 
                    <td colspan="3">
                    <textarea class="form-control3" id="inc_13" name="textarea" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>
                    </td>
                    <td colspan="1">Tipo:
                    </td> 
                        <td colspan="2">

                            <select   class="form-control3"  name="tipo_activo" required>
                                <option value="" selected>Seleccione una opción</option>
                                <option value="critico">Hardware</option>
                                <option value="alto">Información</option>
                                <option value="medio">Lugar</option>
                                <option value="bajo">Organización</option>
                                <option value="alto">Recurso Humano</option>
                                <option value="medio">Red</option>
                                <option value="otro">Otro</option>
                            </select>
                             <!--    <?php
                            /*     if (tipo_activo) */ {
                                    # code...
                                }
                                ?> -->

                        </td>
                    </tr>

            
                                
                            <tr>
                                <td rowspan="3">CALIFICACIÓN</td>
                                <td>Confidencialidad</td>
                                <td colspan="4"> 
                                    <select   class="form-control3"  name="tipo_id" required>
                                    <option value="" selected>Seleccione una opción</option>
                                    <option value="critico">Información pública Reservada</option>
                                    <option value="critico">Información pública Clasificada</option>
                                    <option value="critico">Información pública</option>
                                    <option value="critico">No clasificada</option>
                                    </select>
                                </td>
                                </tr>
                                <tr>
                                <td>Integridad</td>
                                <td colspan="4"> 
                                    <select   class="form-control3"  name="tipo_id" required>
                                    <option value="" selected>Seleccione una opción</option>
                                    <option value="critico">Alta</option>
                                    <option value="critico">Media</option>
                                    <option value="critico">Baja</option>
                                    <option value="critico">No clasificada</option>
                                    </select>
                            </td>
                                </tr>
                                <tr>
                                <td>Disponibilidad</td>
                                <td colspan="4">
                                    <select   class="form-control3"  name="tipo_id" required>
                                    <option value="" selected>Seleccione una opción</option>
                                    <option value="critico">Alta</option>
                                    <option value="critico">Media</option>
                                    <option value="critico">Baja</option>
                                    <option value="critico">No clasificada</option>
                                    </select>
                                </td>
                            </tr>


                            <tr>
                        <td colspan="1">Ubicación:
                        </td> 
                        <td colspan="2">
                            <select   class="form-control3"  name="tipo_id" required>
                                <option value="" selected>Seleccione una opción</option>
                                <option value="critico">Física</option>
                                <option value="critico">Electrónica</option>
                            </select>
                            <input id="version_i" name="version_i2" type="text" class="form-control3" placeholder="Describa la ubicación del activo" required>                                
                        </td>
                        <td>Nivel de Criticidad:</td>
                        <td colspan="2">
                            <select   class="form-control3"  name="tipo_id" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="critico">Alta</option>
                            <option value="critico">Media</option>
                            <option value="critico">Baja</option>
                            </select>
                            </td>
                    </tr>
                    
                    <tr>
                        <td colspan="1">Justificación:
                        </td> 
                        <td colspan="5">
                        <textarea class="form-control3" id="inc_13" name="textarea" rows="8" cols="70" placeholder="Máximo 200 caracteres" required></textarea>
                        </td>
                    </tr>

                    <tr class="fondo_sub">
                        <td colspan="6" style="text-align: center;">PROPIEDAD - ACCESO - GESTIÓN </td>
                    </tr>
                    <tr>
                        <td colspan="1">Propietario:
                        </td> 
                        <td colspan="5">
                        <input id="version_i" name="version_i2" type="text" class="form-control3" placeholder="Responsable de la Producción de la Información" required>                                
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1">Custodio:
                        </td> 
                        <td colspan="5">
                        <input id="version_i" name="version_i2" type="text" class="form-control3" placeholder="Responsable de la Información" required>                                
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1">Fecha ingreso del Activo:
                        </td> 
                        <td colspan="3">
                        <input id="fecha_r" name="fecha_r2" type="datetime-local" class="form-control3" required>
                        </td>
                        <td colspan="1">Fecha salida del Activo:
                        </td> 
                        <td colspan="2">
                        <input id="fecha_r" name="fecha_r2" type="datetime-local" class="form-control3" required>
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
