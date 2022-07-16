<html>
	<head>
		
	</head>
	
	<body>
		
		<div id="hour">
		<button id="hora">Hora</button>
		<button id="fecha">Fecha</button>
		<button id="mix">Mix</button>
	</body>
	<script>
	var timestamp = new Date();
	const buttonHora = document.getElementById('hora');
	const buttonFecha = document.getElementById('fecha');
	const buttonMix = document.getElementById('mix');
		function addZero(i) {
		  if (i < 10) {i = "0" + i}
		  return i;
		}
		
		function preEnvio(){
		  alert(addZero(timestamp.getHours()) + ":" + addZero(timestamp.getMinutes()));
		  document.getElementById("hour").innerHTML = addZero(timestamp.getHours()) + ":" + addZero(timestamp.getMinutes());
		}
		
		function fecha(){
			alert(timestamp.getDate());
		}
		
		function horayfecha(){
			
			alert(timestamp.getDate() + "/" + (timestamp.getMonth() + 1) + "/" + timestamp.getFullYear() + "  " + addZero(timestamp.getHours()) + ":" + addZero(timestamp.getMinutes()));
		}
		buttonHora.addEventListener('click', () => {
			preEnvio();
		})
		
		buttonFecha.addEventListener('click', () => {
			fecha();
		})
		
		buttonMix.addEventListener('click', ()=> {
			horayfecha();
			
		})
	</script>
	
</html>