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
    ?>
        
<section id="acuerdo">

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header"> Modificaciones para nombre de Activos </h2>
                        </div>
                    </div>
                <div class="cont-b">
                    <form  id=""  method="post" action="" >

<center><div class="text_acta">
<center> 
            <section id="agg_in">
                <div class="row_in">
                    <div class="col-25_in" >
                        <img src="add-button.png" width="50%" height="6%">   
                    </div>
                    <div class="col-75_in">
                    <input class="form-control3" id="incidente" name="nomb_i" type="text" placeholder="Ingrese el nombre del Activo" ><br>
                    </div>
                </div>
            
                <div class="row_in">
                    <button type="submit" name="enviar" value="1" class="btn_g" >Agregar</button><br>

                </div>

            </section >

            <section id="agg_in" >   
                    <div class="row_in">
                    <div class="col-25_in">
            <!--      <label for="country">Modificar tipo de incidente</label> -->
                    <label >
                        <img src="edit.png" width="50%" height="6%">   
                    </label>
                </div>
                <div class="col-75_in">

                    <select id="nomb_act" class="form-control3" name="nombre_act" require>                        
                        <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
                            <?php
                            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                            $query = $mysqli -> query ("SELECT * FROM act_nombre");
                            while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores[id_nomb_act].'">'.$valores[nombre_activo].'</option>';                                                        
                                } 
                            ?>         
                    </select>
                    
                    <br>
                        <input class="form-control3" id="Mincidente" name="nombre_act1" type="text" placeholder="Ingrese nuevo nombre del Activo"><br>
                </div>
                </div>

                <div class="row_in">
                    <button type="submit" name="enviar" value="2"  class="btn_g">Actualizar</button><br>
                </div>
            
            </section>

            <section id="agg_in" >
                    <div class="row_in">
                        <div class="col-25_in">
                    <!--  <label for="fname">Eliminar tipo de incidente</label> -->
                        <label >
                            <img src="delete.png" width="50%" height="6%">   
                        </label>
                        </div>
                        <div class="col-75_in">
                            <select id="nomb_act" class="form-control3" name="nomb_iE" require>                        
                                <option class="form-control" value=""><h1>Seleccione una opción</h1></option>
                                <?php
                                    $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
                                    $query = $mysqli -> query ("SELECT * FROM act_nombre");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores[id_nomb_act].'">'.$valores[nombre_activo].'</option>';  
                                    } 
                
                                ?>         
                            </select>
                    </div>
                </div>
                <div class="row_in">
                    <button type="submit" name="enviar" value="3" class="btn_g" >Eliminar</button><br>
                </div>
            
            </section>

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
        $enviar=$_POST['enviar'];
        $miconexion=conectar_bd("",'bd_datos');
        if($enviar!=0){
            if ($enviar==1 & $_POST['nomb_i'] !='' ) {
                
            

                $nomb_in=$_POST['nomb_i'];

                echo "---------------------",$nomb_in;
                $consulta=consulta($miconexion,"INSERT INTO `act_nombre`(`nombre_activo`) VALUES ('$nomb_in')");
                if($consulta)
                {  /* -----------------Alerta para notificar registro ------------------------*/
                    echo "<script>
                        Swal.fire({type: 'success',
                        text: 'Guardado Exitoso',
                        
                    }).then(function() {
                        window.location = 'act_nombre.php';
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
                        window.location ='act_nombre.php';
                    });
                    </script>" ;
            }          
            
            
            }
        if ($enviar==2 & $_POST['nombre_act1'] !=''& $_POST['nombre_act'] !='') {
            $nomb_in=$_POST['nombre_act'];
            $nomb_in1=$_POST['nombre_act1'];
            $resultado=consulta($miconexion,"SELECT * FROM `act_nombre` WHERE `id_nomb_act` like '$nomb_in' ");
            $fila0=$resultado->fetch_object(); 
            $valor=$fila0->id_nomb_act;

            $consulta=consulta($miconexion,"UPDATE `act_nombre` SET `nombre_activo`='$nomb_in1' WHERE id_nomb_act like '$valor'");
            if($consulta)
            {  /* -----------------Alerta para notificar registro ------------------------*/
                  echo "<script>
                    Swal.fire({type: 'success',
                        text: 'Actualizado Exitosamente',                    
                }).then(function() {
                    window.location = 'act_nombre.php';
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
                        window.location ='act_nombre.php';
                    });
                    </script>" ;
            }          

        }
        if ($enviar==3 & $_POST['nomb_iE'] !='') {
            $nomb_in=$_POST['nomb_iE'];
           
            $resultado=consulta($miconexion,"SELECT * FROM `act_nombre` WHERE `id_nomb_act` like '$nomb_in' ");
            $fila0=$resultado->fetch_object(); 
            $valor=$fila0->id_nomb_act; 
           

            $consulta=consulta($miconexion,"DELETE FROM `act_nombre` WHERE  id_nomb_act like '$nomb_in'");
            if($consulta)
            {  /* -----------------Alerta para notificar registro ------------------------*/
                  echo "<script>
                    Swal.fire({type: 'success',
                        text: 'Eliminado Exitosamente',                    
                }).then(function() {
                    window.location = 'act_nombre.php';
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
                    window.location ='act_nombre.php';
                });
                </script>" ;
                      }          
                 
        }

    
     
     
    }
    




    }
    ?>

    
    </body>
    
</html>