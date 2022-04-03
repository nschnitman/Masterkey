<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8"> <base href="../" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Pj-MasterKey - חלוקת דברים</title>
    <!-- Custom CSS -->
    <link href="assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/exchange.css" rel="stylesheet">

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
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
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5> 
                                                        <span class="mail-desc">You can customize this template</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5> 
                                                        <span class="mail-desc">Just see the my admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5> 
                                                        <span class="mail-desc">Just see the my new admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Charts</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Widgets</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Forms </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-buttons.html" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Icons </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome Icons </span></a></li>
                            </ul>
                        </li>
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
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a></li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Errors </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">החזרת דברים</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">דף הבית</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">טיים קיפר</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <div class="card">
                <div class="card-body wizard-content">
                    <h4 class="card-title">החלפה חדשה</h4>
                    <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="#" class="m-t-40">
                        <div>
                            <h3>חשבון</h3>
                            <section>
                                <label for="userName">CARD ID *</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-credit-card-scan"></i></span>
                                    </div>
                                    <input id="card_id" name="card_id" type="text" class="required form-control" aria-describedby="basic-addon1">
                                </div>
                                <button type="button" id="checkUser"class="btn btn-warning margin-5 text-white" data-toggle="modal" data-target="#Modal2" style="margin-top: 20px;">בדיקה</button>
                                 <p>(*) חובה</p>
                            </section>
                            <h3>פרופיל</h3>
                            <section id="section-user">
                                <label for="name">שם</label>
                                <input id="name" name="name" type="text" class="form-control" disabled>
                                <label for="surname">שם משפחה</label>
                                <input id="surname" name="surname" type="text" class="form-control" disabled>
                                <label for="tafkid">תפקיד</label>
                                <input id="tafkid" name="tafkid" type="text" class="form-control" disabled>
                                <label for="telefono">טלפון</label>
                                <input id="telefono" name="telefono" type="text" class="form-control" disabled>
                                <p>לצפייה בלבד</p>
                            </section>
                            <h3>דברים</h3>
                            <section>
                            <div>
                                <div style="column-width: 33%;">
                                    <input type="checkbox" id="check-master" onclick="master()">
                                    <label class="col-md-3">מאסטר</label>
                                    <div class="col-md-9" id="master-div" style="display: none;">
                                        <select id="master-select" class="select2 form-control custom-select" style="width: 70%; height:36px;" onselect="addM()"></select>
                                            <option value="null"></option>
                                        </select>
                                    </div>
                                </div>
                                <div style="column-width: 33%;">
                                    <input type="checkbox" id="check-telefono" onclick="telefon()">
                                    <label class="col-md-3">טלפון</label>
                                    <div class="col-md-9" id="telefono-div">
                                    </div>
                                </div>
                                <div style="column-width: 33%;">
                                    <input type="checkbox" id="check-llaves" onclick="llaves()">
                                    <label class="col-md-3">מפתחות</label>
                                    <div class="col-md-9" id="llaves-div">
                                    </div>
                                </div>
                            </div>
                            </section>
                            <h3>סיום</h3>
                            <section>
                                <!-- <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                <label for="acceptTerms">I agree with the Terms and Conditions.</label> -->
                                <div>
                                    <p>Autorizar a ${last_name, userName}</p>
                                </div>
                            </section>
                        </div>
                    </form>
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
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">אזהרה</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body" id="alerta-user">
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">סגור</button>
          </div>
      </div>
  </div>
</div>
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
<script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
<script src="assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>

<script>
    // Basic Example with form
    //ID para categorizar items
    var taf_id;
    var user_id

    //Variables principales para guardar respuestas de las elecciones
    var masterSeleccion = null
    var telefonoSeleccion = null
    var llaveSeleccion = null


var form = $("#example-form");
 form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function(event, currentIndex, newIndex) {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function(event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function(event, currentIndex) {
        resultado();
    }
});
const card = document.getElementById('card_id');
const checkUser = document.getElementById('checkUser');
let userExists = 0;

function exchange() {
    const url = `https://pj-serverless-nschnitman.vercel.app/api/users/card/${card.value}`;
    fetch(url)
    .then((resp) => resp.json())
    .then(function(data) {
         return data.map(function(dat) {
             userExists = 1
        user_id = dat.id
        document.getElementById("name").placeholder = dat.name
        document.getElementById("surname").placeholder = dat.last_name
        document.getElementById("telefono").placeholder = dat.telefono
        document.getElementById("tafkid").placeholder = dat.tafkid_id
        taf_id = dat.tafkid_id
         })
    })  

    setTimeout(function() {
        if(userExists ===0){
            document.getElementById("alerta-user").innerHTML = "שם משתמש לא קיים"
            if (confirm( "העובד לא רשום. אם אתה רוצה להירשם אותו?")){
            top.location.href = "new-user.html"
            }
        }else{
            document.getElementById("alerta-user").innerHTML = "שם משתמש קיים"
        } 
    }, 1500);

}

function master(){
    const url_master = `https://pj-serverless-nschnitman.vercel.app/api/masterim/${taf_id}`;
    fetch(url_master)
    .then((resp) => resp.json())
    .then(function(data) {
        for (var i = 0; i < data.length; i++) {
            $("#master-select")
            .append('<option value="'+data[i].id + '">'+ data[i].name + '</option>');
        }
    })  
}
function telefon(){
    const url_telefono = `https://pj-serverless-nschnitman.vercel.app/api/telefonos/${taf_id}`;
    fetch(url_telefono)
    .then((resp) => resp.json())
    .then(function(data) {
    if(data.length == 0){
        $("#telefono-div")
            .append('אין טלפון לתפקיד הזה')
    }
    else{
        for (var i = 0; i < data.length; i++) {
            $("#telefono-div")
            .append('<div class="custom-control custom-radio"><input value="'+ data[i].id +'"type="radio" class="custom-control-input" id="TcustomControlValidation'+ i +'" name="Tradio-stacked" onclick="addT('+ i +')"><label class="custom-control-label" for="TcustomControlValidation'+ i +'">'+ data[i].name+ '</label></div>');
        }
    }})  
}
function llaves(){
    const url_llaves = `https://pj-serverless-nschnitman.vercel.app/api/llaves/${taf_id}`;
    fetch(url_llaves)
    .then((resp) => resp.json())
    .then(function(data) {
    if(data.length == 0){
        $("#llaves-div")
            .append('אין מפתחות לתפקיד הזה')
    }
    else{
        for (var i = 0; i < data.length; i++) {
            $("#llaves-div")
            .append('<div class="custom-control custom-radio"><input value="'+ data[i].id +'"type="radio" class="custom-control-input" id="LcustomControlValidation'+ i +'" name="Lradio-stacked" onclick="addL('+ i +')"><label class="custom-control-label" for="LcustomControlValidation'+ i +'">'+ data[i].name+ '</label></div>');
        }
    }})  
    
}

function addM(){
    var select = document.getElementById('master-select');
    masterSeleccion = select.options[select.selectedIndex].value;
}
function addT(i){
    telefonoSeleccion = ''
    telefonoSeleccion = document.getElementById('TcustomControlValidation'+i).value
}
function addL(i){
    llaveSeleccion = ''
    llaveSeleccion = document.getElementById('LcustomControlValidation'+i).value
}


function resultado(){
//Escribir codigo para conseguir el elemento elegido de master llaves y telefnonos, mostarrlos en una lista y acomodarlos con css. mostar solo 3, y pasapor por apis individuales y probar que funcionen, sino cambiar el docio de sql para que acepte multiples lineas, 
addM() 
//API -> Envio de datos al server. {Hold y Swaps}
    //type: {1 Master, 2 Llaves, 3 Telefonos}
    const AddMaster = {
        type: '1',
        user_id: user_id,
        item_id: masterSeleccion,
    }
    const AddLlaves = {
        type: '2',
        user_id: user_id,
        item_id: llaveSeleccion,
    }
    const AddTelefono = {
        type: '3',
        user_id: user_id,
        item_id: telefonoSeleccion,
    }
    const AddMaster2 = {
        type: '1',
        user_id: user_id,
        item_id: masterSeleccion,
        flow: "IN",
        signature: "Nico",
    }
    const AddLlaves2 = {
        type: '2',
        user_id: user_id,
        item_id: llaveSeleccion,
        flow: "IN",
        signature: "Nico",
    }
    const AddTelefono2 = {
        type: '3',
        user_id: user_id,
        item_id: telefonoSeleccion,
        flow: "IN",
        signature: "Nico",
    }
    var SendMaster = document.getElementById("check-master").checked
    var SendLlaves =  document.getElementById("check-llaves").checked
    var SendTelefono = document.getElementById("check-telefono").checked
    setTimeout(function() {
    if(SendMaster){
    fetch('https://pj-serverless-nschnitman.vercel.app/api/hold', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddMaster)
    }).then(respuesta => {
    })
    console.log(AddMaster2)
    fetch('https://pj-serverless-nschnitman.vercel.app/api/swaps', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddMaster2)
    }).then(respuesta => {
    })}},  500)
    
    setTimeout(function() {
    if(SendLlaves){
    fetch('https://pj-serverless-nschnitman.vercel.app/api/hold', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddLlaves)
    }).then(respuesta => {
    })
    fetch('https://pj-serverless-nschnitman.vercel.app/api/swaps', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddLlaves2)
    }).then(respuesta => {
    })}},500)

    setTimeout(function() {
    if(SendTelefono){
    fetch('https://pj-serverless-nschnitman.vercel.app/api/hold', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddTelefono)
    }).then(respuesta => {
    })
    fetch('https://pj-serverless-nschnitman.vercel.app/api/swaps', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddTelefono2)
    }).then(respuesta => {
    })}}, 500)

    //top.location.href = 'index.html'
}


checkUser.addEventListener('click', () => {
    exchange();
})

card.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    exchange();
  }
})

$(document).ready(function () {
    //Master
    $('#check-master').change(function () {
      $('#master-div').fadeToggle();
    });
    // Telefono
    $('#check-telefono').change(function () {
      $('#telefono-div').fadeToggle();
    });
    //Llaves
    $('#check-llaves').change(function () {
      $('#llaves-div').fadeToggle();
    });
});

</script>
</body>

</html>