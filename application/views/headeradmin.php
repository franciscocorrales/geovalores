<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <?php echo link_tag("css/reset.css");  ?>
    <?php echo link_tag("css/global.css");  ?>
    <?php echo link_tag("css/bootstrap.css");  ?>
    <?php echo link_tag("css/template.css");  ?>
    <script type="text/javascript" src="<?php echo base_url().'script/jquery-1.10.2.min.js' ?>"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
     <script type='text/javascript'>
            var map = null;
var infoWindow = null;
 
function openInfoWindow(marker) {
    var markerLatLng = marker.getPosition();
    infoWindow.setContent([
        '<strong>La posicion del marcador es:</strong><br/>',
        markerLatLng.lat(),
        ', ',
        markerLatLng.lng(),
        '<br/>Arrástrame para actualizar la posición.'
    ].join(''));
    $('#lng').val(markerLatLng.lng());
    $('#lat').val(markerLatLng.lat());
    infoWindow.open(map, marker);
}
 
function initialize() {
    var myLatlng = new google.maps.LatLng(9.633931465220899, -84.25418434999995);
    var myOptions = {
      zoom: 8,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
 
    map = new google.maps.Map($("#google_map").get(0), myOptions);
 
    infoWindow = new google.maps.InfoWindow();
 
    var marker = new google.maps.Marker({
        position: myLatlng,
        draggable: true,
        map: map,
        title:"Ejemplo marcador arrastrable"
    });
        google.maps.event.addListener(marker, 'dragend', function(){ openInfoWindow(marker); });
	google.maps.event.addListener(marker, 'click', function(){ openInfoWindow(marker); });
}
 
$(document).ready(function() {
    initialize();
    
});        </script>
	
<style>
    #header > .bienvenido > h1 {
    font-size: 20px;
    line-height: 20px;
}
#header > .bienvenido {
    float: right;
}
#header > .bienvenido > a{
    color: #ffffff;
}
</style>
</head>
<body>

<?php 
$logo = array(
          'src' => 'images/logo.png',
          'alt' => 'Logo de GeoValores',
          'class' => 'logo',
          
          'title' => 'Logo de GeoValores',
          
);

?>
<div id="headerframe">
	<div id="header">
            
		<div id="header-logo">
			<a href="/"><?php echo img($logo);?></a>
                </div>
            <div class="bienvenido">
                   <?php 
                            if($this->session->userdata('usuario')== TRUE){ ?>
                                
				<h1 style="text-align: center">Bienvenido de nuevo <?=$this->session->userdata('perfil')?></h1>
                            <?=anchor(base_url().'index.php/Login/logout', 'Cerrar sesión'); }?>
            </div>
            
            <!-- main nav -->
		<div id="mainnavigation">
			<div id="nav-gutter">
				<ul id="nav" class="mainmenu">
					<li class="mainmenu-item mainmenu-item-5346 active first"><a href="<?php echo base_url(); ?>index.php/Login/adminuser"><span>Inicio</span></a></li>
					
					<li class="mainmenu-item mainmenu-item-5381  "><a href="<?php echo base_url(); ?>/index.php/"><span>Ver Mis Publicacion</span></a></li>
					<li class="mainmenu-item mainmenu-item-5441  "><a href="<?php echo base_url(); ?>index.php/Publicar/publicar"><span>Publicar</span></a></li>
					
				</ul>
				<div style="clear: left"></div>
			</div>
		</div>
		
	</div>
</div>