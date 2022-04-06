<? include('../header.php')?>
<base href="../" />
    <title>Pj-MasterKey - חלוקת דברים</title>
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
                        <h4 class="page-title">החזרת דברים</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">דף הבית</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">חילוק</li>
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
                                        <select id="master-select" name="master-select" class="select2 form-control custom-select" style="width: 70%; height:36px;" onchange="addM()">
                                            <option value="0">תבחור מאסטר</option>
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
                                    <div id="pre-validacion"></div>
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
    var fname 
    var last_name
    
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
        preValidacion();
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
    const url = `https://pj-serverless.vercel.app/api/users/card/${card.value}`;
    fetch(url)
    .then((resp) => resp.json())
    .then(function(data) {
         return data.map(function(dat) {
             userExists = 1
        user_id = dat.id
        taf_id = dat.tafkid_id
        fname = dat.name 
        last_name = dat.last_name
        document.getElementById("name").placeholder = dat.name
        document.getElementById("surname").placeholder = dat.last_name
        document.getElementById("telefono").placeholder = dat.telefono
        document.getElementById("tafkid").placeholder = dat.tafkid_id
         })
    })  

    setTimeout(function() {
        if(userExists ===0){
            document.getElementById("alerta-user").innerHTML = "שם משתמש לא קיים"
            if (confirm( "העובד לא רשום. אם אתה רוצה להירשם אותו?")){
            top.location.href = "modulos/new-user.php"
            }
        }else{
            document.getElementById("alerta-user").innerHTML = "שם משתמש קיים"
        } 
    }, 1500);

}

var masterSeleccionado
var masterFlag = 1
function master(){
    if (masterFlag == 1){
    const url_master = `https://pj-serverless.vercel.app/api/masterim/${taf_id}`;
    fetch(url_master)
    .then((resp) => resp.json())
    .then(function(data) {
        for (var i = 0; i < data.length; i++) {
            $("#master-select")
            .append('<option value="'+data[i].id + '">'+ data[i].name + '</option>');
        }
    })  
    masterFlag = 0
    }
}
var telefonoSeleccionado
var telefonFlag = 1
function telefon(){
    if (telefonFlag == 1){
    const url_telefono = `https://pj-serverless.vercel.app/api/telefonos/${taf_id}`;
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
            //telefonoSeleccionado  = data[i].name
        }
    }})  
    telefonFlag = 1
    }
}
var llavesSeleccionadas 
var llavesFlag = 1
function llaves(){
    if (llavesFlag == 1){
    const url_llaves = `https://pj-serverless.vercel.app/api/llaves/${taf_id}`;
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
            //llavesSeleccionadas = data[i].name
        }
    }})  
    llavesFlag = 0
    }
    
}

function addM(){
    //masterSeleccion = ''
    var select = document.getElementById('master-select');
    masterSeleccion = select.options[select.selectedIndex].value;
    masterSeleccionado = select.options[select.selectedIndex].label;
    if(masterSeleccion === null){
      document.getElementById("check-master").checked = false
    }
}
function addT(i){
    telefonoSeleccion = ''
    telefonoSeleccion = document.getElementById('TcustomControlValidation'+i).value
}
function addL(i){
    llaveSeleccion = ''
    llaveSeleccion = document.getElementById('LcustomControlValidation'+i).value
}

function preValidacion() {
  document.getElementById("pre-validacion").innerHTML =  "העובד " + "<strong>" + fname + " " + last_name + "</strong> " + "לוקח את הדברים הבאים: " + "<br />"
  if(document.getElementById("check-master").checked){
    document.getElementById("pre-validacion").innerHTML +=  "מאסטר: " + masterSeleccionado + "<br />"
  } 
  if (document.getElementById("check-llaves").checked){
    document.getElementById("pre-validacion").innerHTML +=  "מפתחות: " + llavesSeleccionadas + "<br />"
  } 
  if(document.getElementById("check-telefono").checked){
    document.getElementById("pre-validacion").innerHTML +=  "טלפון: " + telefonoSeleccionado +"<br />"
  } 
  
  // document.getElementById("pre-validacion").innerHTML = "אין בחירות. בבקשה תחור אחורה ותבחר מוצר לחילוף " 
  
}


function resultado(){
//Escribir codigo para conseguir el elemento elegido de master llaves y telefnonos, mostarrlos en una lista y acomodarlos con css. mostar solo 3, y pasapor por apis individuales y probar que funcionen, sino cambiar el docio de sql para que acepte multiples lineas, 
//addM() 
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
    fetch('https://pj-serverless.vercel.app/api/hold', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddMaster)
    }).then(respuesta => {
    })
    console.log(AddMaster2)
    fetch('https://pj-serverless.vercel.app/api/swaps', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddMaster2)
    }).then(respuesta => {
    })}},  1500)
    
    setTimeout(function() {
    if(SendLlaves){
    fetch('https://pj-serverless.vercel.app/api/hold', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddLlaves)
    }).then(respuesta => {
    })
    fetch('https://pj-serverless.vercel.app/api/swaps', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddLlaves2)
    }).then(respuesta => {
    })}},1500)

    setTimeout(function() {
    if(SendTelefono){
    fetch('https://pj-serverless.vercel.app/api/hold', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddTelefono)
    }).then(respuesta => {
    })
    fetch('https://pj-serverless.vercel.app/api/swaps', {
    method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(AddTelefono2)
    }).then(respuesta => {
    })}}, 1500)
    
    setTimeout(function(){
      alert("בוצע בהצלחה")
      top.location.href = 'modulos/reportes.php'        
    },3000)
    
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