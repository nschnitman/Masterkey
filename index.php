<? include('header.php')?>
    <title>Pj-MasterKey - Dashboard</title>
    <!-- Custom CSS -->
    <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">
    <link href="dist/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<? include('menu.php')?>
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
                        <h4 class="page-title">לוח מחוונים</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">דף הבית</a></li>
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
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center" data-toggle="modal" data-target="#Modal1">
                                <h1 class="font-light text-white"><i class="mdi mdi-clipboard-outline"></i></h1>
                                <h6 class="text-white">חילוף</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <a href="modulos/reportes.php">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-file-multiple"></i></h1>
                                <h6 class="text-white">דוחות</h6>
                            </div>
                            </a>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-archive"></i></h1>
                                <h6 class="text-white">אבידות</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                        <a href="modulos/users.php">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-convert"></i></h1>
                                <h6 class="text-white">עובדים</h6>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                         <!-- Card  -- Latest exchanges-->
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">החלפות אחרונות</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><i class="fas fa-credit-card w-50px m-t-5"></i></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium float-left">James Anderson</h6>
                                        <span class="text-muted float-right">April 14, 2016</span> 
                                        <br/>
                                        <span class="m-b-15 d-block float-left">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><i class="fas fa-key w-50px m-t-5"></i></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium float-left">Felipe Montenegro</h6>
                                        <span class="text-muted float-right">May 15, 2016</span> 
                                        <br/>
                                        <span class="m-b-15 d-block float-left">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><i class="fas fa-mobile-alt w-50px m-t-5"></i></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium float-left">Agustin Rivera</h6>
                                        <span class="text-muted float-right">July 04, 2016</span> 
                                        <br/>
                                        <span class="m-b-15 d-block float-left">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Card -- mesimot-->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">משימות</h4>
                                <div class="todo-widget scrollable" style="height:450px;">
                                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label todo-label" for="customCheck">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> <span class="badge badge-pill badge-danger float-right">Today</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40" src="assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label todo-label" for="customCheck1">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span><span class="badge badge-pill badge-primary float-right">1 week </span>
                                                </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label todo-label" for="customCheck2">
                                                    <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40" src="assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label todo-label" for="customCheck3">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing </span> <span class="badge badge-pill badge-warning float-right">2 weeks</span>
                                                </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label todo-label" for="customCheck4">
                                                    <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40" src="assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <!-- card -- progress box -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">התקדמות בשטח</h4>
                                <div class="m-t-20">
                                    <div class="d-flex no-block align-items-center">
                                        <span id="MasterUse"></span>
                                        <div class="ml-auto">
                                            <span id="MasterTotal"></span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div id="master-bar"class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex no-block align-items-center m-t-25">
                                        <span id="TelefonoUse"></span>
                                        <div class="ml-auto">
                                            <span id="TelefonoTotal"></span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div id="telefono-bar" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex no-block align-items-center m-t-25">
                                        <span id="LlavesUse"></span>
                                        <div class="ml-auto">
                                            <span id="LlavesTotal"></span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div id="llave-bar" class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex no-block align-items-center m-t-25">
                                        <span id="ActiveUsers"></span>
                                        <div class="ml-auto">
                                            <span id="TotalUsers"></span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div id="user-bar" class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 20%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card new -- avidot-->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">אבידות אחרונות</h4>
                            </div>
                            <ul class="list-style-none">
                                <li class="d-flex no-block card-body">
                                    <i class="fa fa-check-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                        <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">20</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fas fa-credit-card w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">Congratulation Maruti, Happy Birthday</a>
                                        <span class="text-muted">many many happy returns of the day</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">11</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-plus w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                                        <span class="text-muted">But already everything was solved. It will ...</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">19</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-leaf w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">Envato approved Maruti Admin template</a>
                                        <span class="text-muted">i am very happy to approved by TF</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">20</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-question-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0"> I am alwayse here if you have any question</a>
                                        <span class="text-muted">we glad that you choose our template</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">15</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
            <?include('footer.php')?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
        <div class="modal-dialog" role="document ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">חילוף</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true ">&times;</span>
                    </button>
                </div>
                <div class="modal-body frow">
                    <div class="col col2">
                        <a href="modulos/exchange-in.php" style="padding-right: 30%;">
                            <h2 class="badge badge-pill badge-success">חילוף כניסה</h2>
                        </a>
                    </div>
                    <div class="col col2">
                        <a href="modulos/exchange-out.php" style="padding-right: 30%;">
                            <h2 class="badge badge-pill badge-danger">חילוף יציאה</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="dist/js/jquery-ui.min.js"></script>
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
    <script src="dist/js/login.js"></script>
    <!-- this page js -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script>
        $( document ).ready(function() {
            user_id = localStorage.getItem('user_id');
            //sessionActive();
            progress();
        });
        
        var Masterim_total
        var Masterim_rest 
        var Telefonos_total
        var Telefonos_rest 
        var Llaves_total
        var Llaves_rest 
        var TotalUsers 
        var ActiveUsers
        
        
        function progress(){
            const url_master = `https://pj-serverless.vercel.app/api/reportes/progress`;
            fetch(url_master)
            .then((resp) => resp.json())
            .then(function(data) {
                 Masterim_total = data[0].Masterim_total
                 Masterim_rest = data[0].Masterim_rest
                 Telefonos_total = data[0].Telefonos_total
                 Telefonos_rest = data[0].Telefonos_rest
                 Llaves_total = data[0].Llaves_total
                 Llaves_rest = data[0].Llaves_rest
                 TotalUsers = data[0].TotalUsers
                 ActiveUsers = data[0].ActiveUsers
            })
            .then(function() {
                let Masterim = (100 / Masterim_total) * Masterim_rest
                let Telefonos = (100 / Telefonos_total) * Telefonos_rest
                let Llaves = (100 / Llaves_total) * Llaves_rest
                let Users = (100 / TotalUsers) * ActiveUsers
                
                document.getElementById('MasterUse').innerHTML = "מאסטרים בטיים קיפר: " + Masterim_rest
                document.getElementById('MasterTotal').innerHTML = Masterim_total
                document.getElementById('TelefonoUse').innerHTML = "טלפונים בטיים קיפר: " + Telefonos_rest
                document.getElementById('TelefonoTotal').innerHTML = Telefonos_total
                document.getElementById('LlavesUse').innerHTML = "מפתחות בטיים קיפר: " + Llaves_rest
                document.getElementById('LlavesTotal').innerHTML = Llaves_total
                document.getElementById('TotalUsers').innerHTML = TotalUsers
                document.getElementById('ActiveUsers').innerHTML = "עובדים בשטח: " + ActiveUsers
                
                $('#master-bar').attr('aria-valuenow', Masterim).css('width', Masterim+'%');
                $('#telefono-bar').attr('aria-valuenow', Telefonos).css('width', Telefonos+'%');
                $('#llave-bar').attr('aria-valuenow', Llaves).css('width', Llaves+'%');
                $('#user-bar').attr('aria-valuenow', Users).css('width', Users+'%');
            })
           
        
        }
        
            

    </script>


</body>

</html>