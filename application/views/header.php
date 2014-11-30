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
    <?php echo link_tag("css/template.css");  ?>
    <script type="text/javascript" src="<?php echo base_url().'script/jquery-1.10.2.min.js' ?>"></script>
    <script src=<?php echo base_url().'script/login.js'?> ></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src=<?php echo base_url().'script/googleMaP.js'?> ></script>
    
    <script type="text/javascript">
	$(document).ready(
	function () {
	$('#precio1').change(function() {
		var val = $(this).val();
            
       
        $('#spanvalue').text(val);});
	}
	);
	</script>
        
        <style>
            #login .inicida{
                color: #444;
                display: inline-block;
                font-weight: bold;
                height: 25px;
                line-height: 25px;
                padding: 0 8px;
                text-decoration: none;
                text-shadow: 0 1px 0 #fff;
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


$username = array('name' => 'username', 'placeholder' => 'Nombre de usuario');
$password = array('name' => 'password',	'placeholder' => 'Introduce tu password');
$submit = array('name' => 'submit', 'id' => 'loginboton', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
$form = array('id' => 'loginform');
?>
<div id="headerframe">
	<div id="header">
            <nav>
                    <ul>
                      <?php if ($this->session->userdata('usuario_id')) {?>
                        <li id="login"> <span class="inicida"> En la sesion de  <a href="<?php echo base_url(); ?>index.php/Login/adminuser"?><?=$this->session->userdata('usuario_name');?> </a></span> </li> 
                        <li id="signup"><?=anchor(base_url().'index.php/Login/logout', 'Cerrar sesión'); ?></li>
                      <?php } else { ?>
                      <li id="login">
                        <a id="login-trigger" href="#">
                          Inicio de sesion<span>▼</span>
                        </a>
                        <div id="login-content">
                          <?=form_open('/Login/new_user', $form)?>
                            <fieldset id="inputs">
                              <?=form_input($username)?><p><?=form_error('username')?>   
                              <?=form_password($password)?><p><?=form_error('password')?>
                            </fieldset>
                            <fieldset id="actions">
                              <?=form_submit($submit)?>
					
                              <label><input type="checkbox" checked="checked"> Keep me signed in</label>
                            </fieldset>
                          <?=form_close()?>
                        </div>                     
                      </li>
                      <li id="signup">
                        <a href="<?php echo base_url(); ?>index.php/Register/register">Registacion</a>
                      </li>
                      <?php } ?>
                    </ul>
                  </nav>
		<div id="header-logo">
			<a href="<?php echo base_url(); ?>index.php"><?php echo img($logo);?></a>
                </div>
		<!-- main nav -->
		<div id="mainnavigation">
			<div id="nav-gutter">
				<ul id="nav" class="mainmenu">
					<li class="mainmenu-item mainmenu-item-5346 active first"><a href="<?php echo base_url(); ?>index.php"><span>Inicio</span></a></li>
					<li class="mainmenu-item mainmenu-item-5380  "><a href="<?php echo base_url(); ?>index.php/Quienessomos/quienessomos"><span>Quienes Somos</span></a></li>
					<li class="mainmenu-item mainmenu-item-5381  "><a href="/"><span>Comprar</span></a></li>
					<li class="mainmenu-item mainmenu-item-5441  "><a href="/"><span>Venta</span></a></li>
					<li class="mainmenu-item mainmenu-item-5382  last"><a href="<?php echo base_url(); ?>index.php/Contacto"><span>Contacto</span></a></li>
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
                <?php if ($this->session->userdata('usuario_id')) {?>
		<a class="publicar" href="<?php echo base_url(); ?>index.php/Publicar/publicar">Publica su Anuncio gratis</a>
                <?php } else { ?>
                <a class="publicar" href="<?php echo base_url(); ?>index.php/Register/register">Publica su Anuncio gratis</a>
                <?php } ?>
	</div>
</div>