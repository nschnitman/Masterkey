<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
    <meta charset="utf-8"> <base href="../" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Pj-MasterKey - Reportes</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<?include("../menu.php")?>
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
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                       <h5 class="card-title">Select Report</h5>
                            <button type="button" id="master-button" class="btn btn-outline-secondary">Masterim</button>
                            <button type="button" id="telefonos-button" class="btn btn-outline-secondary">Telefonos</button>
                            <button type="button" id="llaves-button" class="btn btn-outline-secondary">Llaves</button>
                       </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Reporte Iomi</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Hora IN</th>
                                                <th>Item</th>
                                                <th>Name</th>
                                                <th>Last Name</th>
                                                <th>Kabat</th>
                                                <th>Hora OUT</th>
                                                <th>Kabat</th>
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
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
    <script>
        /****************************************
         *       Report selector                *
         ****************************************/
        let ReportSelector = "1"
        document.getElementById("master-button").addEventListener("click", btnMaster);
        document.getElementById("telefonos-button").addEventListener("click", btnTelefonos);
        document.getElementById("llaves-button").addEventListener("click", btnLlaves);
        
        
        function btnMaster(){
            ReportSelector = "1"
            console.log("Cambio a Master")
           $('#zero_config').DataTable().ajax.url( 'https://pj-serverless-nschnitman.vercel.app/api/reportes/iomi/'+ReportSelector).load()
        }
        function btnTelefonos(){
            ReportSelector = "3"
            console.log("Cambio a Telefonos")
            $('#zero_config').DataTable().ajax.url( 'https://pj-serverless-nschnitman.vercel.app/api/reportes/iomi/'+ReportSelector).load()
        }
        function btnLlaves(){
            ReportSelector = "2"
            console.log("Cambio a Llaves")
            $('#zero_config').DataTable().ajax.url( 'https://pj-serverless-nschnitman.vercel.app/api/reportes/iomi/'+ReportSelector).load()
        }
        
        /****************************************
         *       Basic Table                   *
         ****************************************/
        
        $('#zero_config').DataTable( {
            ajax: {
              url: 'https://pj-serverless-nschnitman.vercel.app/api/reportes/iomi/'+ReportSelector,
             dataSrc: ''
            },
            responsive: true,
            columns: [ 
                        { data: 'Hora IN' },
                        { data: 'item' },
                        { data: 'name' },
                        { data: 'last_name' },
                        { data: 'kabat1' },
                        { data: 'Hora Out' },
                        { data: 'kabat2' }
                     ]
        } );
    </script>

</body>

</html>