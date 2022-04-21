<?include("../header.php")?>
<base href="../" />
    <title>Pj-MasterKey - Extras Reporte</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">
    <link href="dist/css/custom.css" rel="stylesheet">
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
                        <h4 class="page-title">אקסטרס</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">דף הבית</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">דו״ח אקסטרס</li>
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
                                <h5 class="card-title">רשימה אקסטרס</h5>
                                <div class="table-responsive">
                                    <table id="zero_config2" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>'מס</th>
                                                <th>מס׳ ת.ז</th>
                                                <th>חברה</th>
                                                <th>תפקיד</th>
                                                <th>שם</th>
                                                <th>שם משפחה</th>
                                                <th>שעה כניסה</th>
                                                <th>קב״ט חותם</th>
                                                <th>שעה יציאה</th>
                                                <th>קב״ט חותם</th>
                                                <th>סטטוס</th>
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
            <?include("../footer.php")?>
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
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config2').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    text: 'Print',
                    autoPrint: true,
                    exportOptions: {
                        columns: '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
                    },
                    customize: function (win) {
                        $(win.document.body).find('table').addClass('display').css('font-size', '9px');
                        $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                            $(this).css('background-color','#D0D0D0');
                        });
                        
                        $(win.document.body).find('h1').css('text-align','center');
                        var last = null;
                        var current = null;
                        var bod = [];
                        
                        var css = '@page { size: landscape; }',
                            head = win.document.head || win.document.getElementsByTagName('head')[0],
                            style = win.document.createElement('style');
                        
                        style.type = 'text/css';
                        style.media = 'print';
                        
                        if (style.styleSheet)
                        {
                          style.styleSheet.cssText = css;
                        }
                        else
                        {
                          style.appendChild(win.document.createTextNode(css));
                        }
                        
                        head.appendChild(style);
                    }
                }

            ],
            ajax: {
              url: 'https://pj-serverless.vercel.app/api/turnos_extras',
             dataSrc: ''
            },
            fields: [ {
                    label: 'שעה כניסה',
                    name:  'in',
                    type:  'datetime',
                    format: 'HH:mm',
                    fieldInfo: '24 hour clock format'
                }, {
                    label: 'שעה יציאה',
                    name:  'out',
                    type:  'datetime',
                    format: 'HH:mm:',
                    fieldInfo: '24 hour clock format '
                }
            ],
            columns: [ 
                        { data: 'id' },
                        { data: 'tz' },
                        { data: 'company' },
                        { data: 'tafkid' },
                        { data: 'name' },
                        { data: 'last_name' },
                        { data: 'in' },
                        { data: 'kabat_in' },
                        { data: 'out' },
                        { data: 'kabat_out' },
                        { data: 'status' },
                     ],
             columnDefs : [
             { targets : [2],
               render : function (data, type, row) {
                 switch(data) {
                    case 1 : return 'גולוורק (חלאד)'; 
                        break;
                    case 2 : return 'תיגבור (איברהים)'; 
                        break;
                    case 3 : return 'מרדי (מאהר)'; 
                        break;
                    case 4 : return 'ארקס (דיאה)'; 
                        break;
                    case 5 : return 'תת אלף (טארק)'; 
                        break;
                    default: return 'NULL';
                 }
                 }
             },
             { targets : [3],
                render : function (data, type, row) {
                  switch(data) {
                     case 1 : return  'מלצר'; 
                     break;
                     case 2 : return  'סטיוורד'; 
                     break;
                     case 3 : return 'חדרן'; 
                     break;
                     case 4 : return  'טבח'; 
                     break;
                     case 5 : return 'מחזנאי'; 
                     break;
                     default: return 'NULL';
                  }
              }
          },
          { targets : [-1],
                  render : function (data, type, row) {
                    switch(data) {
                        case 0 : return  'אושר'; 
                            break;
                        case 1 : return  'אסור'; 
                            break;
                       default: return 'NULL';
                    }
                }
            }
         ]
        } );
       
    </script>

</body>

</html>