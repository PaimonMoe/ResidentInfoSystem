<?php
    class MyDB extends SQLite3
    {
      function __construct()
      {
         $this->open('../../bin/database.db');
      }
   }
   $db = new MyDB();
   $sql = "select * from regist";
   $res = $db->query($sql);


    //$db->close();

?>
<!DOCTYPE html>
<html lang="cn">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>住户登记系统</title>
	<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<!-- <link rel="stylesheet" href="../assets/css/demo.css"> -->
</head>
<body data-background-color="dark">
	<div class="wrapper compact-wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="#" class="logo ml-auto mr-auto" style="position: relative;">
					<span style="color: white;font-weight: 550;font-size: 22px;position: relative;bottom: -10px;">管理前台</span>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						
						
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/profile.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/profile.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Paimon</h4>
												<p class="text-muted">已登入，数据库已连接。</p><a href="../../" class="btn btn-xs btn-secondary btn-sm">登出</a>
											</div>
										</div>
									</li>
									
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar"  data-background-color="dark2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						
						
					
						<li class="nav-item <?php if(@$_GET['tab']==1) echo "active"; ?>" style="margin-top: 80px;">
							<a href="?tab=1">
								<i class="fas fa-th-list"></i>
								<p>系统概览</p>
								<span class="caret"></span>
							</a>
							
						</li>
						<li class="nav-item <?php if(@$_GET['tab']==2) echo "active"; ?>">
							<a href="?tab=2">
								<i class="fas fa-pen-square"></i>
								<p>新登记住户</p>
								<span class="caret"></span>
							</a>
							
						</li>
						<li class="nav-item <?php if(@$_GET['tab']==3) echo "active"; ?>">
							<a href="?tab=3">
								<i class="fas fa-table"></i>
								<p>已登记住户列表</p>
								<span class="caret"></span>
							</a>
							
						</li>
						
						
						<!-- <li class="nav-item <?php if(@$_GET['tab']==4) echo "active"; ?>">
							<a href="?tab=4">
								<i class="fas fa-desktop"></i>
								<p>更改加密使用的公钥</p>
								
							</a>
						</li> -->
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<?php

			if(@$_GET['tab']==1)	
				include "dashboard.php";
			else if(@$_GET['tab']==2)
				include "./tabs/forms.php";
			else if(@$_GET['tab']==3)
				include "./tabs/datatables.php";
		?>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						
					</nav>
					<div class="copyright ml-auto">
						- 2021 - Paimon - 基于国密的数据库敏感数据的加密 - 大学生创新训练项目 -
					</div>				
				</div>
			</footer>
		</div>
		
		
		
	
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	
	<script src="../assets/js/setting-demo.js"></script>

	<script>
		$(document).ready(function() {
			

			$('#multi-filter-select').DataTable( {
				"pageLength": 50,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});
			
		});
	</script>
</body>
</html>