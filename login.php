<!DOCTYPE html>
<html dir="ltr">

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
    <title>Pj-MasterKey - Login</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="assets/images/keycard.png" height="150px" alt="logo" /></span>
                        <h3 class="login-text">Pj-MasterKey / WepAPP</h3>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" id="loginform">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" id="card_id" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
                                    <button class="btn-lg btn-success" type="button" style="margin-left: 20px;" onclick="login()">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/session-timer.js"></script>
    <script src="dist/js/login.js"></script>
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login
    // ============================================================== 
    var card_id = document.getElementById('card_id')
    card_id.addEventListener("keydown", function(event) {
    if (event.keyCode == 13) {
      event.preventDefault()
      console.log("enter pressed")
      //alert("enter pressed!")
      login() 
    }});

    function login(){
        //data-toggle="modal" data-target="#Modal2"
        //Chequear si el usuario existe y es de bitajon. Sino rechazar
        //https://pj-serverless-nschnitman.vercel.app/api/users/login/
        var userExists = 0;
        card_id = document.getElementById('card_id')
        const url = `https://pj-serverless-nschnitman.vercel.app/api/users/login/${card_id.value}`;
        fetch(url)
        .then((resp) => resp.json())
        .then(function(data) {
            if (data.length != 1){userExists = 1 
              console.log("Exist!!!!")}
            
            var user_id = data[0].id
            localStorage.setItem('user_id', user_id)
            var name = data[0].name
            console.log("name:" + name)
            localStorage.setItem('name', name)
            var last_name = data[0].last_name
            localStorage.setItem('last_name', last_name)
        })
        setTimeout(function () {
          if(userExists === 0){
            alert("שם משתמש לא קיים")
          }else{
                top.location.href = "index.php"
          }
        },2000)
    };
    </script>

</body>

</html>