
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
								<li class="sidebar-item"><a href="modulos/reportes-actives.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> דוח פעילים </span></a></li>
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
								<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="modulos/extras.php" aria-expanded="false"><i class="mdi mdi-human-handsup"></i><span class="hide-menu">עובד אקסטרה חדש</span></a></li>	
							</ul>
						</li>			
						
						<!-- Futuros a borrar   -->
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Elements</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2 </span></a></li>
								<li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span></a></li>
								<li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>
								<li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a></li>
								<li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span></a></li>
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