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
        <title>Acuerdos | Ciberseguridad</title>
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
            <center>  
                <button  id="btncrear" class="btn btn-success ">Crear Acuerdo</button>
                <button  id="btnmodificar" class="btn btn-success " >Modificar Acuerdo</button>
            </center> 
            <section id="acuerdo">                            
                <form>
                    <div class="form-group">
                        <label>Identificación</label>
                        <input id="cod_i" name="cod_c1" type="number" class="form-control2" placeholder="Número">
                    </div>
                    <div class="form-group">
                        <label>Nombre de la empresa</label>
                        <input id="name_e" name="name_e1" type="text" class="form-control2" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label>Nit</label>
                        <input id="nit_e" name="nit_e1" type="number" class="form-control2" placeholder="Número">
                    </div>
                    <div class="form-group">
                        <label>Representante Legal</label>
                        <input id="repr_l" name="repr_l1" type="text" class="form-control2" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label>Identificación</label>
                        <input id="num_i" name="num_i1" type="number" class="form-control2" placeholder="Número">
                    </div>
                    <div class="form-group">
                        <label>Contrato</label>
                        <input id="num_c" name="num_c1" type="number" class="form-control2" placeholder="Número">
                    </div>
                    <div class="form-group">
                        <label>Contrato</label>
                        <input id="num_c2" name="num_c3" type="number" class="form-control2" placeholder="Número">
                    </div>
                    <br>
                    
                    <div class="cont_acta"><br><br>   
                        <center><div class="text_acta">
                            IDENTIFICACIÓN DEL CONTRATISTA: <input type="text" class="texc1" id="tex1" readonly="readonly"></input><br>
                            NOMBRE DE LA SOCIEDAD: <input type="text" class="texc1" id="tex2" readonly="readonly"></input><br>
                            NIT: <input type="text" class="texc1" id="tex3" readonly="readonly"></input><br>
                            REPRESENTANTE LEGAL: <input type="text" class="texc1" id="tex4" readonly="readonly"></input><br>
                            NÚMERODE IDENTIFICACIÓN: <input type="text" class="texc1" id="tex5" readonly="readonly"></input><br>
                            CONTRATO DE FIDUCIA MERCANTIL No: <input type="text" class="texc1" id="tex6" readonly="readonly"></input><br> 
                            de <input type="text" class="texc1" id="tex7" readonly="readonly"></input><br><br>
                            CLAÚSULAS<br>
                            PRIMERA. El CONTRATISTA se obliga a no divulgar a terceras partes, la “Información confidencial”, que 
                            reciba por parte de XXXXXXXX, y a darle a dicha información el mismo tratamiento que le darían a la 
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
                            <input type="file"> <br>
                            CONTRATISTA <br><br>
                            <br><br>
                        </div></center>
                    </div>
                    <center>
                        <button type="submit" value="1" name="guardar" id="btnNuevaFactura" class="btn btn-success">Guardar</button>
                    </center>
                </form>
                <button class="btn btn-success" onclick="enviartexto()" > llenar</button>
            </section>  
            <br>
            <br>
            <section id="consul_acuerdo">
                <center>
                    <div class="sidebar-search2">
                        <div class="input-group2 custom-search-form">
                            <input type="text" class="form-control3" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </center>
            </section>

        </div>
    </div> 
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
<script src="../js/adaptable.js"></script>
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
            $resultado=consulta($miconexion,"insert into acuerdos (id_acuerdos,num_acuerdo,tipo_acuerdo,observaciones_acuer,nombre_empresa_acuer,fecha,lugar_acuer)
            values('$tipod_usuario','$numero_usuario', '$nombre_usuario','$apellido_usuario','$tel_usuario','$direccion','$correo_usuario','$fecha_na','$nacionalidad','$codigo_em','$contraseña_adm')");

        }
}
     
}
} else{
    echo "<script>
    Swal.fire({type: 'error',
        title: 'Error de autenticación',
        text: 'el usuario no tiene acceso',
        
    }).then(function() {
        window.location = '../login.php';
    });
    </script>" ;
}
?>
  
</body>
    
</html>
