<? include('../header.php')?>
<base href="../" />
    <title>Pj-MasterKey - עובד חדש</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<? include('../menu.php')?>
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
                        <h4 class="page-title">עובד חדש</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">בית</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">עודים</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" id="newuser" action="/">
                                <div class="card-body">
                                    <h4 class="card-title">פרטים אישים</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">שם</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="תכתוב שם פרטי">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">שם משפחה</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="last_name" placeholder="תכתוב שם שפחה">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">טלפון</label>
                                        <div class="col-sm-9">
                                            <input dir="ltr" type="text"  class="form-control text-right phone-inputmask" id="telefono" placeholder="תכתוב מספר טלפון">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">תפקיד</label>
                                        <div class="col-sm-9">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" id="tafkid">
                                                <option value="">תבחר תפקיד...</option>
                                                <optgroup label="משק בית">
                                                    <option value="1">עובד משק</option>
                                                    <option value="2">מפקח</option>
                                                    <option value="3">HK</option>
                                                </optgroup>
                                                <optgroup label="אחזקה">
                                                    <option value="4">אחזקה</option>
                                                </optgroup>
                                                <optgroup label="מזומ״ש">
                                                    <option value="5">בר / רום סרוויס</option>
                                                    <option value="6">רכש</option>
                                                    <option value="8">קפטן</option>
                                                </optgroup>
                                                <optgroup label="קבלה">
                                                    <option value="7">בל בוי</option>
                                                    <option value="12">מנהל תורן</option>
                                                </optgroup>
                                                <optgroup label="ביטחון">
                                                    <option value="9">קבט</option>
                                                    <option value="10">טיים קיפר</option>
                                                </optgroup>
                                                <optgroup label="הנהלה">
                                                    <option value="11">מנהל תורן</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">מס׳ כרטיס</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="card_id" placeholder="תעביר כרטיס עובד">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit"  class="btn btn-primary">שמירה</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            
            
            
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
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        //***********************************//
        // API REST
        //***********************************//
        window.onload = () => {
            console.log('Script Cargado...')
            const newUser = document.getElementById('newuser')
            newUser.onsubmit = (e) => {
                e.preventDefault()
                card_id = document.getElementById('card_id').value
                fname = document.getElementById('fname').value
                last_name = document.getElementById('last_name').value
                telefono = document.getElementById('telefono').value
                tafkid = document.getElementById('tafkid').value
                
                if(tafkid >= 9){
                    type_obed_id = 2
                }else{
                    type_obed_id = 4
                }

                const userAdd = {
                    card_id: card_id,
                    name: fname,
                    last_name: last_name,
                    telefono: telefono,
                    type_obed_id: type_obed_id,
                    tafkid_id: tafkid
                }
                fetch('https://pj-serverless.vercel.app/api/users', {
                method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(userAdd)
                }).then(respuesta => {
                    alert("העובד נרשם בהצלחה.")
                    location.reload();
                })
            }
        }           
    </script>
</body>

</html>