

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
                <i class="fa fa-user fa-fw"></i> <?php echo "$nombre";?><b class="caret"></b>    
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
<div class="sb-sidenav-menu">
    <div class="navbar-default sidebar" role="navigation">
        <div class="" style="position:relative; overflow-y: auto;   " >
        <div class="abcs" style="height: 550px; overflow: auto;">   
        <ul class="nav" id="side-menu" >
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
                <li>
                    <a href="../pages/acuerdos.php"><i class="fa fa-table fa-fw"></i> Gestión de Acuerdos</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tasks fa-fw"></i>  Módulo Gestión de Incidentes<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>           
                            <a href="#"><i class="fa fa-edit fa-fw"></i>  gestionar Incidentes<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../pages/inc_crear.php">Crear Incidente</a>
                                </li>
                                <li>
                                    <a href="../pages/inc_consultar.php">Consultar Incidente</a>
                                </li>
                                <li>
                                    <a href="../pages/inc_modificar.php">Modificar Incidente</a>
                                </li>
                                <li>
                                    <a href="../pages/morris.html">Eliminar Incidente</a>
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
                <li>
                    <a href="#"><i class="fa fa-cogs fa-fw"></i> Módulo Gestión de Activos  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="crear_activo.php">Eventos de incidentes de seguridad</a>
                        </li>
                        <li>
                            <a href="crear_activo.php">Registro de Actualización de Activos</a>
                        </li>
                        <li>
                            <a href="crear_activo.php">Registro de Actualización de Inventario</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>agregar-modificar-eliminar <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="../datos/tipo_inc.php">Tipo Incidente</a>
                                </li>
                                <li>
                                    <a href="morris.html">Cargo</a>
                                </li>
                                <li>
                                    <a href="morris.html">Sede</a>
                                </li>
                                <li>
                                    <a href="morris.html">Codigo</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Módulo Gestión de Riesgos <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="crear_riesgo.php">Crear eventos de Riesgos</a>
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
                            <a class="active" href="blank.html">Generar Reportes</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>
<div class="sesion_a" >Sesión iniciada commo:</div>
</nav>

<!-- jQuery -->
