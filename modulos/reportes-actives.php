<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web App for exchange of master keycard for employes">
    <meta name="author" content="Nicolas Schnitman">
    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <base href="../" />
    <title>Pj-MasterKey - דוח פעילים</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">
    <link href="dist/css/exchange.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar" data-navbarbg="skin5">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin5">
					<!-- This is for the sidebar toggle which is visible on mobile only -->
					<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<a class="navbar-brand" href="index.php">
						<!-- Logo icon -->
						<b class="logo-icon p-l-10">
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="assets/favicon/favicon-32x32.png" alt="homepage" class="light-logo" />

						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<!-- dark Logo text -->
							<img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />

						</span>
						<!-- Logo icon -->
						<!-- <b class="logo-icon"> -->
						<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
						<!-- Dark Logo icon -->
						<!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

						<!-- </b> -->
						<!--End Logo icon -->
					</a>
					<!-- ============================================================== -->
					<!-- End Logo -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- Toggle which is visible on mobile only -->
					<!-- ============================================================== -->
					<a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-left mr-auto">
						<li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
					</ul>
					<!-- ============================================================== -->
					<!-- Right side toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-right">
						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
							<div class="dropdown-menu dropdown-menu-right user-dd animated">
								<a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
								<a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="javascript:logout();"><i class="fa fa-power-off m-r-5 m-l-5"></i> יציאה</a>
							</div>
						</li>
						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar" data-sidebarbg="skin5">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav" class="p-t-30">
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">דף הבית</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/exchange-in.php" aria-expanded="false"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu">חלוקה</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/exchange-out.php" aria-expanded="false"><i class="mdi mdi-credit-card-off"></i><span class="hide-menu">החזרה</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">דוחות </span></a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"><a href="modulos/reportes.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> דוח יומי </span></a></li>
								<li class="sidebar-item"><a href="modulos/reportes-actives.php" class="sidebar-link"><i class="mdi mdi-file-check"></i><span class="hide-menu"> דוח פעילים </span></a></li>
								<li class="sidebar-item"><a href="modulos/extras-reporte.php" class="sidebar-link"><i class="mdi mdi-human"></i><span class="hide-menu"> דוח אקסטרס </span></a></li>
								<li class="sidebar-item"><a href="modulos/extras-activos.php" class="sidebar-link"><i class="mdi mdi-human-greeting"></i><span class="hide-menu"> דוח אקסטרס פעילים </span></a></li>
							</ul>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">עובדי מלון </span></a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/users.php" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">רשימת עובדים </span></a></li>
								<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/new-user.php" aria-expanded="false"><i class="mdi mdi-account-add"></i><span class="hide-menu">עובד חדש</span></a></li>

							</ul>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/autos.php" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">רשימת רכבים עובדים </span></a></li>

						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-worker"></i><span class="hide-menu">עובדי אקסטרה </span></a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/extras.php" aria-expanded="false"><i class="mdi mdi-human-greeting"></i><span class="hide-menu">רשימת עובדי אקסטרה</span></a></li>
								<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/extra-in.php" aria-expanded="false"><i class="mdi mdi-human-handsup"></i><span class="hide-menu">כניסה אקסטרה</span></a></li>
								<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/extra-out.php" aria-expanded="false"><i class="mdi mdi-human-handsdown"></i><span class="hide-menu">יציאה אקסטרה</span></a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">דוח פעילים</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">בית</a></li>
                            <li class="breadcrumb-item active" aria-current="page">דוחות</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">תבחר דוח</h5>
                        <button type="button" id="master-button" class="btn btn-outline-secondary">מאסטרים</button>
                        <button type="button" id="telefonos-button" class="btn btn-outline-secondary">טלפונים</button>
                        <button type="button" id="llaves-button" class="btn btn-outline-secondary">מפתחות</button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">דוח פעילים</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>שעה כניסה</th>
                                            <th>דבר</th>
                                            <th>שם</th>
                                            <th>שם משפחה</th>
                                            <th>קבט</th>
                                            <th>שעה יציאה</th>
                                            <th>קבט</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center" dir="ltr">
            All Rights Reserved. Designed and Developed by <a href="https://nicolasschnitman.com">Nicolas Schnitman</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script>
    /****************************************
     *       Report selector                *
     ****************************************/
    let ReportSelector = "1"
    document.getElementById("master-button").addEventListener("click", btnMaster);
    document.getElementById("telefonos-button").addEventListener("click", btnTelefonos);
    document.getElementById("llaves-button").addEventListener("click", btnLlaves);


    function btnMaster() {
        ReportSelector = "1"
        console.log("Cambio a Master")
        $('#zero_config').DataTable().ajax.url('https://pj-serverless.vercel.app/api/reportes/actives/' + ReportSelector).load()
    }

    function btnTelefonos() {
        ReportSelector = "3"
        console.log("Cambio a Telefonos")
        $('#zero_config').DataTable().ajax.url('https://pj-serverless.vercel.app/api/reportes/actives/' + ReportSelector).load()
    }

    function btnLlaves() {
        ReportSelector = "2"
        console.log("Cambio a Llaves")
        $('#zero_config').DataTable().ajax.url('https://pj-serverless.vercel.app/api/reportes/actives/' + ReportSelector).load()
    }

    /****************************************
     *       Basic Table                   *
     ****************************************/

    $('#zero_config').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ],
        ajax: {
            url: 'https://pj-serverless.vercel.app/api/reportes/activo/' + ReportSelector,
            dataSrc: ''
        },
        responsive: true,
        columns: [{
                data: 'Hora IN'
            },
            {
                data: 'item'
            },
            {
                data: 'name'
            },
            {
                data: 'last_name'
            },
            {
                data: 'kabat1'
            },
            {
                data: 'Hora Out'
            },
            {
                data: 'kabat2'
            }
        ]
    });
</script>

</body>

</html>