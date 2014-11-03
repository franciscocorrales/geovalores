<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title?></title>
    <?php echo link_tag("css/reset.css");  ?>
    <?php echo link_tag("css/global.css");  ?>
    <?php // echo link_tag("css/template.css");  ?>
    <?php echo link_tag("css/template.css");  ?>
    <script type="text/javascript" src="script/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
    <script src=<?php echo base_url().'script/googleMaP.js'?> ></script>
	
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
		<!-- main nav -->
		<div id="mainnavigation">
			<div id="nav-gutter">
				<ul id="nav" class="mainmenu">
					<li class="mainmenu-item mainmenu-item-5346 active first"><a href="/"><span>Inicio</span></a></li>
					<li class="mainmenu-item mainmenu-item-5380  "><a href="/"><span>Quienes Somos</span></a></li>
					<li class="mainmenu-item mainmenu-item-5381  "><a href="/"><span>Comprar</span></a></li>
					<li class="mainmenu-item mainmenu-item-5441  "><a href="/"><span>Venta</span></a></li>
					<li class="mainmenu-item mainmenu-item-5382  last"><a href="/"><span>Contacto</span></a></li>
				</ul>
				<div style="clear: left"></div>
			</div>
		</div>
                <div id="responsive-nav-button" style="display: none">
			<div>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div id="responsive-navigation" style="display: none">
			<div class="padding">
				<ul id="responsive-nav" class="responsivemenu">
					<li class="responsivemenu-item responsivemenu-item-5346 active first"><a href="/"><span>Home</span></a></li>
					<li class="responsivemenu-item responsivemenu-item-5380  "><a href="/portfolio/"><span>Portfolio</span></a></li>
					<li class="responsivemenu-item responsivemenu-item-5381  "><a href="/packages/"><span>Packages</span></a></li>
					<li class="responsivemenu-item responsivemenu-item-5441  "><a href="/services/"><span>Services</span></a></li>
					<li class="responsivemenu-item responsivemenu-item-5357  "><a href="/about-us/"><span>About&nbsp;Us</span></a></li>
					<li class="responsivemenu-item responsivemenu-item-5382  last"><a href="/contact-us/"><span>Contact&nbsp;Us</span></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</div>