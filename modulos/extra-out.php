<? include('../header.php')?>
<base href="../" />
    <title>Pj-MasterKey - החתמה אקסטרס</title>
    <!-- Custom CSS -->
    <link href="assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">
    <link href="dist/css/exchange.css" rel="stylesheet">

</head>

<? include('../menu.php')?>
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
   $( document ).ready(function() {
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

$( document ).ready(function() {
      const urlParams = new URLSearchParams(window.location.search);
       extras_id = urlParams.get('id')
      if(extras_id != "") {teudatzeut.value = extras_id}
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
        document.getElementById("name").placeholder = dat.name
        document.getElementById("surname").placeholder = dat.last_name
        document.getElementById("company").placeholder = dat.company
        document.getElementById("tafkid").placeholder = dat.tafkid
         })
    }).then( () => {
      if(userExists === 0){
          document.getElementById("alerta-user").innerHTML = "שם משתמש לא קיים"
          if (confirm( "העובד אקסטרה לא רשום. אם אתה רוצה להירשם אותו, צריך לצלם ת.ז עם הנייד!")){
          }
      }else{
          document.getElementById("alerta-user").innerHTML = "שם משתמש קיים"
      } 
      
    })

}
function addZero(i) {
  if (i < 10) {i = "0" + i}
  return i;
}

function preEnvio(){
  document.getElementById("hourEntry").innerHTML = addZero(timestamp.getHours()) + ":" + addZero(timestamp.getMinutes());
}

function resultado(){
    const extraOut = {
        kabat_out: kabat
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