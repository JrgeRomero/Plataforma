<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<!--Title & Icon-->
		<title>SIGEVO | <?php if ($this->Systemsettings_model->get_data('id', 1, 'titulo')) { echo $this->Systemsettings_model->get_data('id', 1, 'titulo'); }else{ echo "PORTAL";} ?></title>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url("resources/imagenes/logos/SIGEVO_Logo_ICONO.ico"); ?>"/>
		<!--Bootstrap 4.1.3-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
		<!--CSS-->
			<!--Font Awesome-->
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
			<!--Material Dashboard-->
			<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/material-dashboard.css');?>"/>
			<link rel="stylesheet" type="text/css" href="//cdn.materialdesignicons.com/3.4.93/css/materialdesignicons.min.css">
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
			<!--Datatables Bootstrap 4-->
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
			<!--Datatables Extra-->
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"/>
			<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"/>-->
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css"/>
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap4.min.css"/>
			<!--Material Dashboard Plugins-->
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"/>
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css"/>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/jasny-bootstrap.min.css"/>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/bootstrap-select.min.css"/>
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" />
			<!-- Extra/Plugins-->
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/editor/css/editor.css"/>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/easyTree.css"/>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fancybox/jquery.fancybox.css" media="screen">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" />
			<!--Estilos Propios-->
			<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/estilos.css');?>"  />
			<!Pruebas>
			<link rel="stylesheet" type="text/css" href=""/>

			<style type="text/css">
				 @media (min-width: 768px) {
					.modal-xl {
						width: 90%;
					 max-width:1200px;
					}
				}
			</style>
	</head>

	<!--Estilos Sobreescritos--> 
	<?php if ($this->Systemsettings_model->get_data('id', 1, 'color')) {echo 
			"<style type='text/css'>
			.dropdown-item:hover{
				background-color: ".$this->Systemsettings_model->get_data('id', 1, 'color')." !important;
			}

			.nav-link:hover {
				background-color: ".$this->Systemsettings_model->get_data('id', 1, 'color')." !important;
			color: white !important;
			}

			.sidebar-background:after {
			opacity: .5 !important;
			}

			.dropdown-header {
			color: white !important;
			}

			.modal-body {
			max-height: calc(100vh - 210px) !important;
			overflow-y: auto !important;
			}

			#template {
				background-color: ".$this->Systemsettings_model->get_data('id', 1, 'color')." !important;
			}
		</style>";
	}else{echo
		"<style type='text/css'>
			.dropdown-item:hover{
				background-color: #00bcd4 !important;
			}

			.nav-link:hover {
				background-color: #00bcd4 !important;
			color: white !important;
			}

			.sidebar-background:after {
			opacity: .5 !important;
			}

			.dropdown-header {
			color: white !important;
			}

			.modal-body {
			max-height: calc(100vh - 210px) !important;
			overflow-y: auto !important;
			}

			#template {
				background-color: #00bcd4 !important;
			}
		</style>";
	} ?> 

	<body class="sidebar-mini">



		<!--Main Wrapper-->
		<div class="wrapper">

			<!-- Sidebar -->
			<div class="sidebar" data-background-color="black">
				<!-- data-color="" purple | azure | green | orange | danger -->

				<div class="logo">
					<span class="simple-text logo-mini">
						<b><?php if ($this->Systemsettings_model->get_data('id', 1, 'titulo')) { echo $this->Systemsettings_model->get_data('id', 1, 'titulo'); }else{ echo "PORTAL";} ?></b>
					</span>
				</div>
				<!--Sidebar Wrapper-->
				<div class="sidebar-wrapper ps-container ps-theme-default ps-active-y">
					<ul class="nav navbar-nav">
						<li class="dropdown-header nav-mobile-menu">Portal</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('menu'); ?>">
								<i class="material-icons">home</i>
									<p>&nbsp;Menú Principal </p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('usuarios'); ?>">
								<i class="material-icons">group</i>
									<p>&nbsp;Usuarios</p>
							</a>
						</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('config'); ?>">
									<i class="material-icons">settings</i>
										<p>&nbsp;Configuraciones</p>
								</a>
							</li>
						<!--<li class="dropdown-divider nav-mobile-menu"></li>-->
						<li class="dropdown-header nav-mobile-menu">Cuenta</li>
						<li class="nav-item nav-mobile-menu"> <!--|nav-mobile-menu| Only display items in collapsed menu-->
							<a class="nav-link" href="<?php //echo site_url('perfil'); ?>">
								<i class="material-icons">person</i>
									<p>&nbsp;<?= $_SESSION['username']; ?></p>
							</a>
						</li>
						<li class="nav-item nav-mobile-menu">
							<a class="nav-link" href="<?php echo site_url('salir'); ?>">
								<i class="material-icons">exit_to_app</i>
									<p>&nbsp;Cerrar Sesión</p>
							</a>
						</li>
					</ul>
					<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
						<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
						</div>
					</div>
					<div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px; height: 601px;">
						<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 356px;">
						</div>
					</div>
				</div>
				<!-- End Sidebar Wrapper -->
				<div class="sidebar-background" style="background-image: url(<?php if ($this->Systemsettings_model->get_data('id', 1, 'sidebarbackground')) { echo $this->Systemsettings_model->get_data('id', 1, 'sidebarbackground'); }else{ echo "resources/imagenes/sidebar-predeterminado.jpg";} ?>)"></div>
			</div>
			<!-- End Sidebar -->
			<!-- Main Panel-->
			<div class="main-panel ps-container ps-theme-default">
				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navegacion1">
					<div class="container-fluid">
						<div class="navbar-wrapper">
							<div class="navbar-minimize">
							</div>
							<a class="navbar-brand" href=""></a>
						</div>
						<button type="button" class="navbar-toggler" data-target="#navegacion1" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
									<span class="sr-only">Toggle navigation</span>
									<span class="navbar-toggler-icon icon-bar"></span>
									<span class="navbar-toggler-icon icon-bar"></span>
									<span class="navbar-toggler-icon icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end">
							<br>
							<ul class="navbar-nav">
								<li class="nav-item dropdown">
									<a id="template" class="btn btn-success btn-fab btn-round" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
										<i class="material-icons">person</i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-success text-centered">
										<a class="dropdown-item" href="<?php //echo site_url('perfil'); ?>">
												<i class="material-icons">person</i>&nbsp;&nbsp;<?= $_SESSION['username']; ?>
										</a>
										<a class="dropdown-item" href="<?php echo site_url('salir'); ?>">
											<i class="material-icons">exit_to_app</i>&nbsp;&nbsp;Cerrar Sesión
										</a>
									</div><!--/.dropdown-menu-->
								</li><!--/.nav-item dropdown-->
							</ul><!--/.navbar-nav-->
						</div> <!--/.navbar-collapse-->
					</div> <!--/.container-fluid-->
				</nav>
				<!-- End Navbar -->
				<!-- Content -->
				<div class="content" style="padding: 0px 0px !important;">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<?php	if(isset($_view) && $_view)
								$this->load->view($_view);
								?>
							</div>
						</div>
					</div>
				</div>
				<!-- End Content -->
				<!-- Main Footer -->
				<footer class="main-footer">
					<div class="container-fluid">
						<!-- To the right -->
						<div class="float-right hidden-xs">
							<p>
								<a href="" class="text-info"><sup>&reg;</sup></a>
								<small><?php echo date("Y"); ?>. Todos los derechos reservados.</small>
							</p>
						</div>
						<!-- Default to the left -->
					</div> <!--/.container-fluid-->
				</footer>
				<!-- End Main Footer -->
			</div>
			<!-- End Main Panel-->
		</div>
		<!--End Main Wrapper-->
		<!--JS-->
			<script type="text/javascript">var baseurl = "<?php echo base_url(); ?>";</script>
			<!jQuery first, then Popper.js, then Bootstrap JS>
			<!--Core JS-->
			<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
			<!--Bootstrap 4 JS-->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
			<!--Material Dashboard Plugins JS-->
			<script type="text/javascript" src="<?php echo site_url('resources/js/core/bootstrap-material-design.min.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/moment.min.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/sweetalert2.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/jquery.validate.min.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/jquery.bootstrap-wizard.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/bootstrap-selectpicker.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/bootstrap-tagsinput.js'); ?>"></script>
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/jquery-jvectormap.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/nouislider.min.js'); ?>"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/arrive.min.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/bootstrap-switch.js'); ?>"></script>
			<script type="text/javascript" src="https://buttons.github.io/buttons.js"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/bootstrap.bundle.min.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/perfect-scrollbar.jquery.min.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/material-dashboard.min.js?v=2.0.2'); ?>"></script>
			<!--DataTables 4 JS Core-->
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
			<!--DataTables 4 JS Extra-->
			<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
			<!--Chartist Plugin JS-->
			<script type="text/javascript" src="<?php echo site_url('resources/js/plugins/chartist.min.js'); ?>"></script>
			<!--Notifications Plugin JS-->
			<script type="text/javascript" src="<?php echo site_url('resources/js/plugins/bootstrap-notify.js'); ?>"></script>
			<!--Select2 Plugin JS-->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
			 <!--Easy Tree Plugin JS-->
			<script type="text/javascript" src="<?php echo site_url('resources/js/easyTree.js'); ?>"></script>
			<!--Funciones Propias JS-->
			<script type="text/javascript" src="<?php echo site_url('resources/tinymce/tinymce.min.js?apiKey=3k19u0rpgoif38tcdcq5vxox68sovtzltm38av8rqx9awtln'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/funciones.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/formatos.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/formatos2.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/formatofiniquito.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/estimaciones.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/isemanal.js'); ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/funcionesentidades.js'); ?>"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.js"></script>
			<!--Pruebas-->
 			<script src="alert/dist/sweetalert-dev.js"></script>
			<script type="text/javascript" src="<?php echo site_url('resources/js/meraki.js'); ?>"></script>
			<!Pruebas>
	</body>
</html>
