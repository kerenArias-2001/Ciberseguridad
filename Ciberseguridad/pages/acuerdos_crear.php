<?php
    include('../funciones.php');
    $enviar=0;    
    $control=0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Crear Acuerdos | Ciberseguridad</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">     
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
<body>

<?php
    if ( session_start()==true){
    $miconexion=conectar_bd("",'bd_ciberseguridad');
    $verificacion0=consulta($miconexion,"SELECT  EXISTS(SELECT * FROM administrador WHERE correo_adm ='{$_SESSION['nusuario']}' ) ");
    $row0=mysqli_fetch_row($verificacion0);
    
    if ( $row0>0){
        $busqueda=consulta($miconexion,"SELECT * FROM administrador WHERE correo_adm ='{$_SESSION['nusuario']}'");
        $fila1 = $busqueda->fetch_object(); 
        $nombre=$fila1->nombre_adm;
        $apellido=$fila1->apellido_adm;
 ?>
<div id="wrapper">

    <?php
    include('../nabvar.php');
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <center> <div class="col-lg-12">
                    <h2 class="page-header">Acuerdos de Confidencialidad</h2>
                </div></center> 
            </div>
            <section id="acuerdo">                            
            <form  id=""  method="post" action="" >

                    <div class="form-group">
                        <label>Identificación</label> 
                        <input id="cod_i" name="cod_c1" type="number"  class="form-control2" placeholder="Número" >
                    </div>
                    <div class="form-group">
                        <label>Nombre de la empresa</label>
                        <input id="name_e" name="name_e1" type="text" class="form-control2"  placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label>Nit</label>
                        <input id="nit_e" name="nit_e1" type="text" class="form-control2"  placeholder="Número">
                    </div>
                    <div class="form-group">
                        <label>Representante Legal</label>
                        <input id="repr_l" name="repr_l1" type="text" class="form-control2"  placeholder="Nombre" style="text-transform: capitalize;">
                    </div>
                    <div class="form-group">
                        <label>Identificación del representante</label>
                        <input id="num_i" name="num_i1" type="number" class="form-control2"  placeholder="Número">
                    </div>
                    <div class="form-group">
                        <label>Contrato</label>
                        <?php
                            $cont=0;
                            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_ciberseguridad');
                            $query = $mysqli -> query ("SELECT * FROM acuerdos_confidencialidad");
                            while ($valores = mysqli_fetch_array($query)) {
                                $cont=$cont+1;                                 
                                
                            }    $cont=$cont+1;
                            
                            ?>   
                        <input id="num_c" name="num_c1" type="number" value='<?php echo $cont;?>' class="form-control2" >

                    </div>
                    <div class="form-group">
                        <label>Empleador</label>
                        <input id="num_c2" name="num_c3" type="text" class="form-control2"  placeholder="Nombre" style="text-transform: uppercase;">
                    </div>
                    <br>
                  
                    
                    <div class="cont_acta"><br><br>   
                        <center><div class="text_acta">
                            IDENTIFICACIÓN DEL CONTRATISTA: <input type="text" class="texc1" id="tex1" name="ident" readonly="readonly"></input><br>
                            NOMBRE DE LA SOCIEDAD: <input type="text" class="texc1" id="tex2" name="nomb" readonly="readonly"></input><br>
                            NIT: <input type="text" class="texc1" id="tex3" name="nit" readonly="readonly"></input><br>
                            REPRESENTANTE LEGAL: <input type="text" class="texc1" id="tex4" name="repr" readonly="readonly"></input><br>
                            NÚMERO DE IDENTIFICACIÓN: <input type="text" class="texc1" id="tex5" name="iden" readonly="readonly"></input><br>
                            CONTRATO DE FIDUCIA MERCANTIL No: <input type="text" class="texc1" id="tex6" name="cont" readonly="readonly"></input><br> 
                            CLAÚSULAS<br>
                            PRIMERA. El CONTRATISTA se obliga a no divulgar a terceras partes, la “Información confidencial”, que 
                            reciba por parte de <input type="text" class="texc1" id="tex7" name="empl" readonly="readonly" style="text-transform: uppercase; text-align: center;"></input>
                            , y a darle a dicha información el mismo tratamiento que le darían a la 
                            información confidencial de su propiedad. Para efectos de la presente acta, “Información Confidencial” 
                            comprende toda la información divulgada por XXXXXXXX ya sea en forma oral, visual, escrita, grabada en 
                            medios magnéticos o en cualquier otra forma tangible y que se encuentre claramente marcada como tal al ser 
                            entregada a la parte receptora. <br>
                            SEGUNDA. La parte receptora se obliga a mantener de manera confidencial la “Información confidencial” que 
                            reciba de XXXXXXXX y a no darla a una tercera parte diferente de su equipo de trabajo y asesores que 
                            tengan la necesidad de conocer dicha información para los propósitos autorizados, y quienes deberán estar 
                            de acuerdo en mantener de manera confidencial dicha información. <br>
                            TERCERA. Es obligación del CONTRATISTA de no divulgar la “Información confidencial”, incluyendo, mas no 
                            limitando, el informar a sus empleados que la manejen, que dicha información es confidencial y que no deberá 
                            ser divulgada a terceras partes. <br>
                            CUARTA. El CONTRATISTA se obliga a utilizar la “Información confidencial” recibida, únicamente para el 
                            desarrollo el objeto del contrato de fiducia mercantil suscrito con XXXXXXXX. <br>
                            QUINTA. El CONTRATISTA se compromete a efectuar una adecuada custodia y reserva de la información y 
                            gestión -es decir tratamiento- de los datos suministrados por XXXXXXXX al interior de las redes y bases 
                            de datos (físicas y/o electrónicas) en donde se realice su recepción y tratamiento en general. <br>
                            SEXTA. Para el caso del manejo de información que incluya datos personales, el CONTRATISTA dará 
                            estricto cumplimiento a las disposiciones constitucionales y legales sobre la protección del derecho
                            fundamental de habeas data, en particular lo dispuesto en el artículo 15 de la Constitución Política y la ley 
                            1581 de 2012. <br>
                            SÉPTIMA. En caso de que el CONTRATISTA incumpla parcial o totalmente con las obligaciones establecidas 
                            en la presente acta éste será responsable de los daños y perjuicios que dicho incumplimiento llegase a 
                            ocasionar a XXXXXXXX. <br>
                            OCTAVA. La vigencia de la presente acta será indefinida y permanecerá vigente mientras exista relación 
                            receptora, se hará acreedora a la Pena Convencional establecida en la Cláusula Séptima del presente <br>
                            Contrato. <br>
                            Suscrita a los XXX días XXX del mes de XXXX de 2014, en Bogotá D.C. <br>
                            Firma: <br>
                            <br><br><br>
                            
                            CONTRATISTA <br><br>
                            <br><br>
                            <center>
                        <button type="submit" value="1" name="guardar" id="btnNuevaFactura" class="btn btn-success">Guardar</button>
                    </center>
                    <br>
                        </div></center>
                    </div>
                    
                </form>
                <button class="btn btn-success" onclick="enviartexto()" > llenar</button>
            </section>  
            <br>
            <br>

        </div>
    </div> 
</div>   

   
<?php
    if ($_SERVER['REQUEST_METHOD']==='POST') { 
        
    /* Activar alerta */
    echo"<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo"<script src='sweetalert2.all.min.js'></script>";
    echo"<script src='sweetalert2.min.js'></script>";
    echo"<link rel='stylesheet' href='sweetalert2.min.css'>";
/* Activar alerta */

       
        $control=$_POST['guardar'];
        if ($control==1){
            $identificacion=$_POST['ident'];
        echo " ----------------".$identificacion."--------------------";
        $nomb_empresa=$_POST['nomb'];
        $num_nit=$_POST['nit'];
        $representante=$_POST['repr'];
        $identificacion2=$_POST['iden'];
        $contrato=$_POST['cont'];
        $empleador=$_POST['empl'];

        if ($nomb_empresa!='' & $num_nit!='' & $representante!='' & $identificacion2!='' & $contrato!='' & $empleador!='') {
           
      
     
            $resultado=consulta($miconexion,"INSERT INTO `acuerdos_confidencialidad`( `identificacion`, `nombre_empresa`, `num_nit`, `representante`, `identificacion2`, `contrato`, `empleador`) 
            VALUES('$identificacion','$nomb_empresa', '$num_nit','$representante','$identificacion2','$contrato','$empleador')");

                if ($resultado) {
                    
                    echo "<script>
                    Swal.fire({type: 'success',
                    text: 'Guardado Exitoso',
                    
                }).then(function() {
                    window.location = '../pages/acuerdos_crear.php';
                });
                </script>" ; 
            }

        }
        else{
            echo "<script>
            Swal.fire({type: 'error',
                title: 'Datos vacíos',
                text: 'Por favor rellene los datos',
                
            }).then(function() {
                window.location = '../pages/acuerdos_crear.php';
            });
            </script>" ;
        }
        }
}
     
}
} else{
    echo "<script>
    Swal.fire({type: 'error',
        title: 'error',
        text: 'Por favor intente de nuevo',
        
    }).then(function() {
        window.location = '../pages/acuerdos_crear.php';
    });
    </script>" ;
}
?>
  

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/metisMenu.min.js"></script>
<script src="../js/startmin.js"></script>
<!-- enviar texto de input a label -->
<script src="../js/enviarTexto.js"></script>
</body>
    
</html>
