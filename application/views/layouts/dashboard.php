<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dashboard | Sistem Relawan</title>
		<!-- Favicon -->
		<!-- <link rel="icon" href="path/to/img.png">  -->
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bbootstrap 4 -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<!-- JQVMap -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
		<!-- summernote -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<!-- DataTables -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<!-- <script src="<?= base_url() ?>assets/dist/js/axios.min.js"></script> -->
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
				</ul>
				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<!-- <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
							<i class="fas fa-th-large"></i>
						</a> -->
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="<?= base_url('app/index') ?>" class="brand-link">
					<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
					style="opacity: .8">
					<span class="brand-text font-weight-light">RELAWAN</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
						</div>
						<div class="info">
							<a href="#" class="d-block text-uppercase"><?= $this->session->userdata('sess_relawan_username') ?></a>
						</div>
					</div>
					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
							with font-awesome or any other icon font library -->
							<!-- tambah class menu-open untuk secara otomatis membuka -->
							<li class="nav-item">
								<a href="<?= base_url('app/index') ?>" class="nav-link">
									<i class="nav-icon fas fa-home"></i>
									<p>
										Dashboard
										<!-- <span class="badge badge-info right">2</span> -->
									</p>
								</a>
							</li>
							
							<li class="nav-header">MASTER DATA</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-copy"></i>
									<p>
										Menu User
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="<?= base_url('users/admin') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Admin Pusat</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('users/relawan') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Relawan</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="<?= base_url() ?>" class="nav-link">
									<i class="nav-icon fas fa-people-carry"></i>
									<p>Tanggap Darurat</p>
								</a>
							</li>
							<!-- tambah class menu-open untuk secara otomatis membuka -->
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-house-damage"></i>
									<p>
										Bencana
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="<?= base_url('bencana/index') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Tipe Bencana</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('bencana/spesifikasi') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Spesifikasi</p>
										</a>
									</li>
								</ul>
							</li>
							<!-- tambah class menu-open untuk secara otomatis membuka -->
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-cog"></i>
									<p>
										Pengaturan
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="<?= base_url() ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Belum diatur</p>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-header"></li>
							<li class="nav-item">
								<a href="<?= base_url('logout') ?>" class="nav-link">
									<i class="nav-icon fas fa-sign-out-alt"></i>
									<p>
										Keluar
										<!-- <span class="badge badge-info right">2</span> -->
									</p>
								</a>
							</li>
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
			</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				
				<!-- /.content-header -->
				<!-- Main content -->
				<section class="content pt-2">
					<?= $contents; ?>
				</section>
				<!-- /.content -->
			</div>
							<!-- /.content-wrapper -->
							<!-- /.content-wrapper -->
			<footer class="main-footer">
				<strong>Copyright &copy; <?= date('Y', time()) ?> <a href="http://adminlte.io">Putra Rahindra</a>.</strong>
				All rights reserved.
				<div class="float-right d-none d-sm-inline-block">
					<b>Version</b> 1.0.0
				</div>
			</footer>
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
		<!-- DataTables -->
		<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script>
		$(function () {
			$("#example1").DataTable({
				"responsive": true,
				"autoWidth": false,
			});
			
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
		</script>
	</body>
</html>