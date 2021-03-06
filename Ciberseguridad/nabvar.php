
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="../pages/index.php">Nombre proyecto</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo "$nombre"."       "."$apellido";?><b class="caret"></b>    
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li class="hidden-xs">
                    <a href="index.html" class="modal-link">
                        <i class="fa fa-bell"></i>
                        <span class="badge"><?php  echo "".$i; ?></span>
                    </a>
                </li>
                <li class="hidden-xs">
                    <a class="ajax-link" href="ajax/calendar.html">
                        <i class="fa fa-calendar"></i>
                        <span class="badge">7</span>
                    </a>
                </li>
                <li class="hidden-xs">
                    <a href="ajax/page_messages.html" class="ajax-link">
                        <i class="fa fa-envelope"></i>
                        <span class="badge">7</span>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../cerrarsesion.php"><i class="fa fa-sign-out-alt- fa-fw"></i> Cerrar sesión</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        
    <div class="" style="position:relative; overflow-y: auto;   " >
        <div class="abcs">   
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li>
                <li>
                    <a href="../pages/index.php"><i class="fa fa-home fa-fw"></i> Inicio</a>
                </li>

<!--  -->
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Acuerdos de Confidencialidad<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>           
                            <a href="#"><i class="fa fa-edit fa-fw"></i>  Gestionar Acuerdos<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                <a href="../pages/acuerdos_crear.php">Crear Acuerdo</a>
                                </li>
                                <li>
                                <a href="../pages/acuerdos_consultar.php">Consultar Acuerdos</a>
                                </li>
                            </ul>
                        </li>
                            
                    </ul>
                </li>
<!--  -->


                <li>
                    <a href="#"><i class="fa fa-tasks fa-fw"></i>  Módulo Gestión de Incidentes<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>           
                            <a href="#"><i class="fa fa-edit fa-fw"></i>  Gestionar Incidentes<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../pages/inc_crear.php">Creación de Incidente</a>
                                </li>
                                <li>
                                    <a href="../pages/inc_consultar.php">Consultar Incidente</a>
                                </li>
                                <li>
                                    <a href="../pages/inc_modificar.php">Modificación de Incidente</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Agregar-Modificar-Eliminar <span class="fa arrow"></span></a>
                            
                                <ul class="nav nav-third-level">
                                    
                                    <li>
                                        <a href="../datos/inc_cargo.php">Cargo</a>
                                    </li>
                                    <li>
                                        <a href="../datos/inc_categoria.php">Categoría</a>
                                    </li>
                                    <li>
                                        <a href="../datos/inc_causa.php">Causa</a>
                                    </li>
                                    <li>
                                        <a href="../datos/inc_codigo.php">Codigo</a>
                                    </li>
                                    <li>
                                        <a href="../datos/inc_escalamiento.php">Escalamiento</a>
                                    </li>
                                    <li>
                                        <a href="../datos/inc_estado.php">Estado</a>
                                    </li>
                                    <li>
                                        <a href="../datos/inc_priorizacion.php">Priorización</a>
                                    </li>
                                    <li>
                                        <a href="../datos/inc_sede.php">Sede</a>
                                    </li>
                                    <li>
                                        <a href="../datos/inc_tipo.php">Tipo Incidente</a>
                                    </li>
                                    
                                </ul>
                           
                        </li>
                            
                    </ul>
                 </li>
<!--  -->
                <li>
                    <a href="#"><i class="fa fa-cogs fa-fw"></i>  Módulo Gestión de Activos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>           
                            <a href="#"><i class="fa fa-edit fa-fw"></i>  Gestionar Activos<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                <a href="../pages/activo_crear.php">Creación de Activos</a>
                                </li>
                                <li>
                                <a href="../pages/activo_consultar.php">Consultar Activos</a>
                                </li>
                                <li>
                                <a href="../pages/activo_modificar.php">Modificación de Activos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Agregar-Modificar-Eliminar <span class="fa arrow"></span></a>
                            
                                <ul class="nav nav-third-level">
                                    
                                    <li>
                                    <a href="../datos/act_nombre.php">Nombre de Activo</a>
                                    </li>
                                    <li>
                                    <a href="../datos/act_confidencialidad.php">Confidencialidad</a>
                                    </li>
                                    <li>
                                    <a href="../datos/act_disponibilidad.php">Disponibilidad</a>
                                    </li>
                                    <li>
                                    <a href="../datos/act_integridad.php">Integridad</a>
                                    </li>
                                    <li>
                                    <a href="../datos/act_ubicacion.php">Ubicacion</a>
                                    </li>
                                    <li>
                                    <a href="../datos/act_nivel_criticidad.php">Nivel de criticidad</a>
                                    </li>
                                    <li>
                                    <a href="../datos/act_tipo_activo.php">Tipo de activo</a>
                                    </li>
                                    
                                </ul>
                        
                        </li>
                            
                    </ul>
                </li>
                <!--  -->

                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Módulo Gestión de Riesgos <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="riesgo_crear.php">Crear eventos de Riesgos</a>
                        </li>
                        <li>
                            <a href="https://docs.google.com/spreadsheets/d/1Yk07670QWSzcfR7ZrMUOBlBQ1swClns768AH_b4EXBg/edit#gid=0">Modificar eventos de Riesgos</a>
                        </li>
                        <li>
                            <a href="#">Third Level<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-chart-bar"></i> Módulo Gestión de Reportes   <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="active" href="#">Generar Reportes</a>
                        </li>
                    </ul>
                </li>
                    </ul>
            
        </div>
    </div>
    </div>
    </div>
    <div class="sesion_a" style="text-align: center; ">  
            Copyright &copy; Your Website 2020
                <br>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
                
</div>
     
</nav>

   
   
    

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>
