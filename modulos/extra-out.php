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
    <title>Pj-MasterKey - החתמה אקסטרס</title>
    <!-- Custom CSS -->
    <link href="assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">
    <link href="dist/css/exchange.css" rel="stylesheet">

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
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">יציאה אקסטרס</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">דף הבית</a></li>
                                    <li class="breadcrumb-item"><a href="modulos/extras.php">אקסטרס</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">יציאה</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">יציאה</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="#" class="m-t-40">
                            <div>
                                <h3>חשבון</h3>
                                <section>
                                    <label for="userName">מספר תודעת זהות *</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-human"></i></span>
                                        </div>
                                        <input id="teudatzeut" name="teudatzeut" type="text" class="required form-control" aria-describedby="basic-addon1">
                                    </div>
                                    <button type="button" id="checkUser" class="btn btn-warning margin-5 text-white" data-toggle="modal" data-target="#Modal2" style="margin-top: 20px;">בדיקה</button>
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
                                    <label for="company">חברה</label>
                                    <input id="company" name="company" type="text" class="form-control" disabled>
                                    <p>לצפייה בלבד</p>
                                </section>
                                <h3>סיום</h3>
                                <section>
                                    <!-- <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">-->
                                    <label for="hour">שעה יציאה:</label>
                                    <div>
                                        <div id="hourEntry"></div>
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
        var kabat
        $(document).ready(function() {
            kabat = localStorage.getItem('user_id');
        });
        var timestamp = new Date()
        //ID para categorizar items
        var turno_id
        var fname
        var last_name
        var status

        var form = $("#example-form");
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                preEnvio();
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
        const teudatzeut = document.getElementById('teudatzeut');
        const checkUser = document.getElementById('checkUser');
        let userExists = 0;

        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            extras_id = urlParams.get('id')
            if (extras_id != "") {
                teudatzeut.value = extras_id
            }
        });


        function exchange() {
            const url = `https://pj-serverless.vercel.app/api/turnos_extras/${teudatzeut.value}`;
            fetch(url)
                .then((resp) => resp.json())
                .then(function(data) {
                    return data.map(function(dat) {
                        userExists = 1
                        turno_id = dat.id
                        tafkid = dat.tafkid
                        company = dat.company
                        fname = dat.name
                        last_name = dat.last_name
                        status = dat.status
                        let scompany
                        let stafkid
                        switch (company) {
                            case 1:
                                scompany = 'גולוורק (חלאד)';
                                break;
                            case 2:
                                scompany = 'תיגבור (איברהים)';
                                break;
                            case 3:
                                scompany = 'מרדי (מאהר)';
                                break;
                            case 4:
                                scompany = 'ארקס (דיאה)';
                                break;
                            case 5:
                                scompany = 'תת אלף (טארק)';
                                break;
                            default:
                                scompany = 'NULL';
                        }
                        switch (tafkid) {
                            case 1:
                                stafkid = 'מלצר';
                                break;
                            case 2:
                                stafkid = 'סטיוורד';
                                break;
                            case 3:
                                stafkid = 'חדרן';
                                break;
                            case 4:
                                stafkid = 'טבח';
                                break;
                            case 5:
                                stafkid = 'מחזנאי';
                                break;
                            default:
                                stafkid = 'NULL';
                        }
                        document.getElementById("name").placeholder = dat.name
                        document.getElementById("surname").placeholder = dat.last_name
                        document.getElementById("company").placeholder = scompany
                        document.getElementById("tafkid").placeholder = stafkid


                    })
                }).then(() => {
                    if (userExists === 0) {
                        document.getElementById("alerta-user").innerHTML = "שם משתמש לא קיים"
                        if (confirm("העובד אקסטרה לא רשום. אם אתה רוצה להירשם אותו, צריך לצלם ת.ז עם הנייד!")) {}
                    } else {
                        document.getElementById("alerta-user").innerHTML = "שם משתמש קיים"
                    }

                })

        }

        function addZero(i) {
            if (i < 10) {
                i = "0" + i
            }
            return i;
        }

        function preEnvio() {
            document.getElementById("hourEntry").innerHTML = timestamp.getDate() + "/" + (timestamp.getMonth() + 1) + "/" + timestamp.getFullYear() + "  " + addZero(timestamp.getHours()) + ":" + addZero(timestamp.getMinutes());
        }

        function resultado() {
            const extraOut = {
                kabat_out: kabat,
                hora_out: document.getElementById("hourEntry")
            }
            fetch(`https://pj-serverless.vercel.app/api/turnos_extras/${turno_id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(extraOut)
            }).then(respuesta => {
                alert("בוצע בהצלחה")
                top.location.href = 'modulos/extras-reporte.php'
            }).catch(rejected => {
                console.log(rejected);
            });



        }


        checkUser.addEventListener('click', () => {
            exchange();
        })

        teudatzeut.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                exchange();
            }
        })
    </script>
</body>

</html>