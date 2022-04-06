<? include('../header.php')?>
<base href="../" />
    <title>Pj-MasterKey - החזרת דברים</title>
    <!-- Custom CSS -->
    <link href="assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="dist/css/style-rtl.min.css" rel="stylesheet">

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
                                    <li class="breadcrumb-item active" aria-current="page">החזרה</li>
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
                            <div id="div-general">
                                <h3>החזרה של:</h3>
                                <div style="column-width: 33%;" id="master-div">
                                    <input type="checkbox" id="check-master" disabled>
                                    <label class="col-md-3">מאסטר</label>
                                </div>
                                <div style="column-width: 33%;" id="telefono-div">
                                    <input type="checkbox" id="check-telefono" disabled>
                                    <label class="col-md-3">טלפון</label>
                                </div>
                                <div style="column-width: 33%;" id="llaves-div">
                                    <input type="checkbox" id="check-llaves" disabled>
                                    <label class="col-md-3">מפתחות</label>
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
    var user_id;
    var fname 
    var last_name
    

    //Variables principales para guardar respuestas de las elecciones
    var masterSeleccion = null
    var telefonoSeleccion = null
    var llaveSeleccion = null
    var masterItemId
    var telefonoItemId
    var llavesItemId


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
.then(function() {
        if(userExists ===0){
            document.getElementById("alerta-user").innerHTML = "שם משתמש לא קיים"
            if (confirm( "העובד לא רשום. אם אתה רוצה להירשם אותו?")){
            top.location.href = "modulos/new-user.php"
            }
        }else{
            document.getElementById("alerta-user").innerHTML = "שם משתמש קיים"
        } 
    })

    setTimeout(function(){combinado()}, 3000);

}




// Usar la misma funcion de hold para traer toda la data en un solo fetch y dentro de un for segun un switch case elegir 1 2 o 3 y mostrar la funcion actual. 
function combinado(){
    const url_master = `https://pj-serverless.vercel.app/api/hold/${user_id}`;
    fetch(url_master)
    .then((resp) => resp.json())
    .then(function(data) {
        if (data == ''){
            $('#div-general')
                     .append('<div style="column-width: 33%;">')
                     .append('<h4>אין תוצאות</h4>')
                     .append('</div>')
                document.getElementById('master-div').style.display = 'none';
                document.getElementById('llaves-div').style.display = 'none';
                document.getElementById('telefono-div').style.display = 'none';

        }else{
        for (var i = 0; i < data.length; i++) {
            switch(data[i].type) {
                case "1":
                    document.getElementById("check-master").value= data[i].id
                    document.getElementById("check-master").disabled = false
                    masterItemId = data[i].item_id
                    break;
                case "2":
                    document.getElementById("check-llaves").value= data[i].id
                    document.getElementById("check-llaves").disabled= false
                    llavesItemId = data[i].item_id
                    break;
                case "3": 
                    document.getElementById("check-telefono").value= data[i].id
                    document.getElementById("check-telefono").disabled= false
                    telefonoItemId = data[i].item_id
                    break;
                default:
                    break;
            }
        }}
    })  
}

function addM(){
    masterSeleccion = ''
    masterSeleccion = document.getElementById('check-master').value
    console.log(masterSeleccion)
}
function addT(){
    telefonoSeleccion = ''
    telefonoSeleccion = document.getElementById('check-telefono').value
    console.log(telefonoSeleccion)
}
function addL(){
    llaveSeleccion = ''
    llaveSeleccion = document.getElementById('check-llaves').value
    console.log(llaveSeleccion)
}

function preValidacion() {
    fullselection = document.getElementById("check-master").checked && document.getElementById("check-llaves").checked && document.getElementById("check-telefono").checked
  document.getElementById("pre-validacion").innerHTML =  "העובד " + "<strong>" + fname + " " + last_name + "</strong> "+ "מחזיר את הדברים הבאים: " + "<br />"
  if(document.getElementById("check-master").checked){
    document.getElementById("pre-validacion").innerHTML +=  "מאסטר"+ "<br />"
  } 
  if (document.getElementById("check-llaves").checked){
    document.getElementById("pre-validacion").innerHTML +=  "מפתחות" + "<br />"
  }  
 if(document.getElementById("check-telefono").checked){
    document.getElementById("pre-validacion").innerHTML +=  "טלפון" +"<br />"
  } 
  
  //  document.getElementById("pre-validacion").innerHTML = "אין בחירות. בבקשה תחור אחורה ותבחר מוצר לחילוף " 
  
}


function resultado(){
var SendMaster = false
var SendLlaves =  false
var SendTelefono = false
addM() 
addL()
addT()
//API -> Envio de datos al server. {Elimina Hold y añade Swaps}
    //type: {1 Master, 2 Llaves, 3 Telefonos}
    const AddMaster = {
        id: masterSeleccion,
    }
    const AddLlaves = {
        id: llaveSeleccion,
    }
    const AddTelefono = {
        id: telefonoSeleccion,
    }
    const AddMaster2 = {
        type: '1',
        user_id: user_id,
        item_id: masterItemId,
        flow: "OUT",
        signature: "Nico",
    }
    const AddLlaves2 = {
        type: '2',
        user_id: user_id,
        item_id: llavesItemId,
        flow: "OUT",
        signature: "Nico",
    }
    const AddTelefono2 = {
        type: '3',
        user_id: user_id,
        item_id: telefonoItemId,
        flow: "OUT",
        signature: "Nico",
    }
    SendMaster = document.getElementById("check-master").checked
    SendLlaves =  document.getElementById("check-llaves").checked
    SendTelefono = document.getElementById("check-telefono").checked
    setTimeout(function() {
    if(SendMaster){
    fetch('https://pj-serverless.vercel.app/api/hold/'+masterSeleccion, {
    method: 'DELETE',
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
    })}},  500)
    
    setTimeout(function() {
    if(SendLlaves){
    fetch('https://pj-serverless.vercel.app/api/hold/'+llaveSeleccion, {
    method: 'DELETE',
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
    })}},500)

    setTimeout(function() {
    if(SendTelefono){
    fetch('https://pj-serverless.vercel.app/api/hold/'+telefonoSeleccion, {
    method: 'DELETE',
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
    })}}, 500)
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
});

</script>
</body>

</html>