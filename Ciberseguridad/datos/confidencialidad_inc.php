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
    <style>


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 75%;
    float: right;
}
input[type=submit]:hover {
  background-color: #45a049;
}

#agg_in {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 54%;
    margin: 8px;
}
.col-25_in {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75_in {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row_in:after {
  content: "";
  display: table;
  clear: both;
}

</style>
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
                            <h2 class="page-header"> Modificaciones para tipos de Incidentes </h2>
                        </div>
                    </div>
                <div class="cont-b">
                    <form  id=""  method="post" action="" >

<center><div class="text_acta">
<center> 
<section id="agg_in">
  <form method="post" >
  <div class="row_in">
    <div class="col-25_in" >
            <img src="add-button.png" width="50%" height="6%">   
    </div>
    <div class="col-75_in">
    <input class="form-control3" id="incidente" name="nomb_i" type="text" placeholder="ingrese el nombre de incidente" ><br>
    </div>
  </div>
 
  <div class="row_in">
        <button type="submit" name="enviar" value="1" class="btn_g" >Agregar</button><br>

  </div>

</section >






<section id="agg_in" >
    <form method="post" >
   
   
    <div class="row_in">
      <div class="col-25_in">
   <!--      <label for="country">Modificar tipo de incidente</label> -->
    <label >
    <img src="edit.png" width="50%" height="6%">   
    </label>
      </div>
      <div class="col-75_in">
        
      <select id="m1" class="form-control3" name="nomb_iE" require/>                        
                                                
        <option class="form-control" value="0"><h1>Seleccione una opción</h1></option>
            <?php
            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
            $query = $mysqli -> query ("SELECT * FROM confidencialidad");
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="'.$valores[id_confidencialidad].'">'.$valores[nombre_confidencialidad].'</option>';
            
                    
            } 

        ?>         
    </select><br>
        <input class="form-control3" id="Mincidente" name="nomb_iM1" type="text" placeholder="ingrese nuevo  tipo"><br>
      </div>
    </div>

    <div class="row_in">
          <button type="submit" name="enviar" value="2"  class="btn_g">Actualizar</button><br>
    </div>
  
</section>

<section id="agg_in" >
    <form method="post" >
    <div class="row_in">
      <div class="col-25_in">
       <!--  <label for="fname">Eliminar tipo de incidente</label> -->
       <label >
        <img src="delete.png" width="50%" height="6%">   
        </label>
      </div>
      <div class="col-75_in">
      <select id="m1" class="form-control3" name="nomb_iE" require/>                        
                                                
        <option class="form-control" value=""><h1>Seleccione una opción</h1></option>
            <?php
            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_datos');
            $query = $mysqli -> query ("SELECT * FROM confidencialidad");
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="'.$valores[id_confidencialidad].'">'.$valores[nombre_confidencialidad].'</option>';
            
                    
            } 

        ?>         
    </select><br>
      
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
        if ($enviar==1) {
        if ($enviar==1 & $_POST['nomb_i'] !='') {
            
           

                            $nomb_in=$_POST['nomb_i'];
                            /* 
                            echo "---------------------",$nomb_in; */
                            $consulta=consulta($miconexion,"INSERT INTO `confidencialidad`(`nombre_confidencialidad`) VALUES ('$nomb_in')");
                            if($consulta)
                            {  /* -----------------Alerta para notificar registro ------------------------*/
                                echo "<script>
                                    Swal.fire({type: 'success',
                                    text: 'Guardado Exitoso',
                                    
                                }).then(function() {
                                    window.location = 'confidencialidad_inc.php';
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
                                  window.location = 'confidencialidad_inc.php';
                              });
                              </script>" ;
                      }          
                  
            }
           
        }
        else {
            ?>
            <script>
                 document.getElementById("error").classList.add("mostrar");
                 function validarContraseña(){
                    if($("#pass").val() === $("#passC").val()){
                        //Si son iguales
                        console.log("Las contraseñas son iguales");
                    }else if($("#pass").val() !== $("#passC").val()){
                        //Si no son iguales
                        console.log("Las contraseñas no son iguales");
                    }
                }
            </script>
            <?php
          
        }
    }
    if ($enviar==2) {
        if ($enviar==2 & $_POST['nomb_iM1'] !='') {
                                $nomb_in=$_POST['nomb_iM'];
                                $nomb_in1=$_POST['nomb_iM1'];
                                $resultado=consulta($miconexion,"SELECT * FROM `confidencialidad` WHERE `id_confidencialidad` like '$nomb_in' ");
                                $fila0=$resultado->fetch_object(); 
                                $valor=$fila0->id_confidencialidad;

                                $consulta=consulta($miconexion,"UPDATE `confidencialidad` SET `nombre_confidencialidad`='$nomb_in1' WHERE id_confidencialidad like '$valor'");
                                # code...
                            if($consulta)
                            {  /* -----------------Alerta para notificar registro ------------------------*/
                                echo "<script>
                                    Swal.fire({type: 'success',
                                        text: 'Actualizado Exitosamente',                    
                                }).then(function() {
                                    window.location = 'confidencialidad_inc.php';
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
                                window.location = 'confidencialidad_inc.php';
                            });
                            </script>" ;
                    }          
                            
        }
        else {
            ?>
             <script>
                  document.getElementById("error").classList.add("mostrar");
             </script>
            <?php
        }
    }
        if ($enviar==3) {
        if ($enviar==3 & $_POST['nomb_iE'] !='') {
                            $nomb_in=$_POST['nomb_iE'];
                        
                            $resultado=consulta($miconexion,"SELECT * FROM `confidencialidad` WHERE `id_confidencialidad` like '$nomb_in' ");
                            $fila0=$resultado->fetch_object(); 
                            $valor=$fila0->id_confidencialidad; 
                        

                            $consulta=consulta($miconexion,"DELETE FROM `confidencialidad` WHERE  id_confidencialidad like '$nomb_in'");
                            # code...
                            if($consulta)
                            {  /* -----------------Alerta para notificar registro ------------------------*/
                                echo "<script>
                                    Swal.fire({type: 'success',
                                    text: 'Eliminado Exitosamente',
                                    
                                }).then(function() {
                                    window.location = 'confidencialidad_inc.php';
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
                                                window.location = 'confidencialidad_inc.php';
                                            });
                                            </script>" ;
                        }          
                                
        }
        else {
            ?>
             <script>
                  document.getElementById("error").classList.add("mostrar");
             </script>
            <?php
        }
        }
    ?>
    
    </body>
    
</html>
