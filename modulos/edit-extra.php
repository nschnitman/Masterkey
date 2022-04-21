<?include("../header.php")?>
<base href="../" />
    <title>Pj-MasterKey - Edit Extra</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
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
                                    <li class="breadcrumb-item active" aria-current="page">אקסטרס</li>
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
                                    <form id="updateProfile">
                                    <table class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                            <tr>
                                                <td width="40%">שם</td>
                                                <td width="60%">
                                                    <input type="text" id="name" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>שם משפחה</td>
                                                <td>
                                                    <input type="text" id="surname" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>טלפון</td>
                                                <td>
                                                    <input dir="ltr" type="text" id="telefono" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>חברה</td>
                                                <td>
                                                   <select name="jebra" id="jebra" class="select2 form-control custom-select" style="width: 70%; height:36px;">
                                                       <option>תבחר חברה</option>
                                                       <option value="Goldwork">גולוורק (חלאד)</option>
                                                       <option value="Tigbur">תיגבור (איברהים)</option>
                                                       <option value="Mardi">מרדי (מאהר)</option>
                                                       <option value="Arkas">ארקס (דיאה)</option>
                                                       <option value="Tet Alef">תת אלף (טארק)</option>
                                                   </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>תפקיד</td>
                                                <td>
                                                    <select name="tafkid" id="tafkid" class="select2 form-control custom-select" style="width: 70%; height:36px;">
                                                        <option>תבחר תפקיד</option>
                                                        <option value="Meltzar">מלצר</option>
                                                        <option value="Steward">סטיוורד</option>
                                                        <option value="Housekeeping">חדרן</option>
                                                        <option value="Tabaj">טבח</option>
                                                        <option value="Majzan">מחזנאי</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>מצב כניסה</td>
                                                <td>
                                                    <select name="status" id="status" class="select2 form-control custom-select" style="width: 70%; height:36px;">
                                                        <option value="0" class="success">אושר</option>
                                                        <option value="1" class="danger" >אסור</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        <button type="submit" class="btn btn-success" onclick="updateExtra();" >לעדכן</button>
                                    </form>
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
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        //https://pj-serverless.vercel.app/api/extras
        
        var extras_id
        var tz
        var rName
        var rSurname
        
        $( document ).ready(function() {
              const urlParams = new URLSearchParams(window.location.search);
               extras_id = urlParams.get('id')
              extraProfile();
        });
        
        // window.onsubmit = (e) => {
        //     e.preventDefault;
        //     updateExtra();
        // }
        
        function extraProfile() {
            const url = `https://pj-serverless.vercel.app/api/extras/${extras_id}`;
            fetch(url)
            .then((resp) => resp.json())
            .then(function(data) {
                 return data.map(function(dat) {
                jebra = dat.company
                tafkid = dat.tafkid
                name = dat.name 
                last_name = dat.last_name
                telefono = dat.telefono
                status = dat.status
                tz = dat.tz
                document.getElementById("name").placeholder = dat.name
                document.getElementById("surname").placeholder = dat.last_name
                document.getElementById("telefono").placeholder = dat.telefono
                document.getElementById("jebra").selectedIndex = dat.company
                document.getElementById("tafkid").selectedIndex = dat.tafkid
                document.getElementById("status").selectedIndex = dat.status
                 })
            })
            .catch(rejected => {
                location.reload();
            })
        };
        
        
        
        
        function updateExtra() {
            $("#updateProfile").submit(function(e) {
                e.preventDefault();
            });
            if (document.getElementById("name").value == ""){
                    rName = document.getElementById("name").placeholder
                }else {
                    rName = document.getElementById("name").value
            }
            
            
            if(document.getElementById("surname").value == ""){
                    rSurname =  document.getElementById("surname").placeholder
                }else {
                    rSurname =  document.getElementById("surname").value
            }
            
            if(document.getElementById("telefono").value == ""){
                    rTelefono =  document.getElementById("telefono").placeholder
                }else {
                    rTelefono =  document.getElementById("telefono").value
            }
            
            
            var perfilExtra = {
                company: document.getElementById("jebra").selectedIndex ,
                tafkid: document.getElementById("tafkid").selectedIndex ,
                name:  rName,
                last_name: rSurname,
                telefono: rTelefono,
                status: document.getElementById("status").selectedIndex,
                tz: tz,
            }
            // alert("jebra: "+ document.getElementById("jebra").selectedIndex)
            // alert("Name:" + rName)
            // alert("Last Name:" + document.getElementById("surname").value)
            // alert("Status: " + document.getElementById("status").selectedIndex)
            fetch(`https://pj-serverless.vercel.app/api/extras/${tz}`, {
            method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(perfilExtra)
            }).then(data => {
                alert("עודכן בהצלחה")
                window.location.href = 'modulos/extras.php'
            })
            .catch(rejected => {
                console.log(rejected);
            });
        }
    
        
        
                /**
                  Jebra
                    {value: "Goldwork", text: 'גולוורק (חלאד)'},
                    {value: "Tigbur", text: 'תיגבור (איברהים)'},
                    {value: "Mardi", text: 'מרדי (מאהר)'},
                    {value: "Arkas", text: 'ארקס (דיאה)'},
                    {value: "Tet Alef", text: 'תת אלף (טארק)'}
                  Tafkid:
                    {value: "Meltzar", text: 'מלצר'},
                    {value: "Steward", text: 'סטיוורד'},
                    {value: "Housekeeping", text: 'חדרן'},
                    {value: "Tabaj", text: 'טבח'},
                    {value: "Majzan", text: 'מחזנאי'}
                **/
    </script>

</body>

</html>