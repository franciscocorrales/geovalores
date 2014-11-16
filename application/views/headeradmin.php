<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <?php echo link_tag("css/reset.css");  ?>
    <?php echo link_tag("css/global.css");  ?>
    <?php // echo link_tag("css/template.css");  ?>
    <?php echo link_tag("css/template.css");  ?>
    <script type="text/javascript" src="<?php echo base_url().'script/jquery-1.10.2.min.js' ?>"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
	

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
            <div>
                   <?php 
                            if($this->session->flashdata('usuario')== TRUE){ ?>
                                
				<h1 style="text-align: center">Bienvenido de nuevo <?=$this->session->userdata('perfil')?></h1>
                            <?=anchor(base_url().'index.php/Login/logout_ci', 'Cerrar sesión'); }?>
            </div>
		
	</div>
</div>