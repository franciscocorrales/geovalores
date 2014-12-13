<?php include ("header.php") ;?>

	<!-- content -->
<div id="siteframe">
	<div id="content">
		<div class="content-padding">
                    <div class="content-left">
                        <div class="padding-left">
                            <div class="nav-content-left">
                                <ul>
                                    <li class="mainmenu-itemvertical active"><a href="<?php echo base_url(); ?>index.php"><?php echo img('images/flechamenu.png');?> <span>Inicio</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="<?php echo base_url(); ?>index.php/Publicar/contrucciones"><?php echo img('images/flechamenu.png');?> <span>Contrucciones</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="<?php echo base_url(); ?>index.php/Publicar/terrenos"><?php echo img('images/flechamenu.png');?> <span>Terrenos</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="<?php echo base_url(); ?>index.php/Publicar/alquileres"><?php echo img('images/flechamenu.png');?> <span>Alquileres</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="<?php echo base_url(); ?>index.php/Publicar/remates"><?php echo img('images/flechamenu.png');?> <span>Remates</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="<?php echo base_url(); ?>index.php/Contacto"><?php echo img('images/flechamenu.png');?> <span>Contacto</span></a></li>
                                </ul>
                            </div>

                            <div class="moreNews">
                                <div class="titles">
                                    <h3>Destacadas</h3>
                                </div>
                               <?php
                               $i = 0;
                               $id = '';
                               $print = false;
                               $print_ob = false;
                               foreach ($publicaciones as $value){
								if($i < 5){
								?>    
                               
                                <div class="news">
                                  <?php if ($value['field_name'] == "observacion") {  $print_ob = true; ?>
                                    <div class="newContent">
                                      <p><?php echo $value['field_value']?></p>
                                    </div>
                                    <?php  } ?>
                                     <?php if ($print == false && $print_ob == true) { ?>
	                                  	<div class="newDate">
	                                        <h4><?php echo $value['date_publicacion']?></h4>
	                                    </div>
	                                    <div class="read-more">
	                                        <a href="<?php echo $value['idPublicacion']?>" ><span>leer Más</span></a>
	                                    </div>
                                    <?php $print = true;  } ?>
                                </div>
                               <?php 
                               		if($id !== $value['idPublicacion']){
                               			$print = false;
                               			$i++;
                               		}
                               		$id = $value['idPublicacion'];
                               		
								 } } ?>
                            </div>
                        </div>   
                    </div>
                    <div class="content-rigth">
                    <div class="form-search content-description">
                                <form id="formbuscar" action="" method="post">
                                     <h2>Busqueda</h2>
                                     <a id="mostrar">Avanzadas</a>
                                     <div class="ciudad">
                                            <label for="ciudad" >Ciudad</label>
                                            <input class="grandes" type="text" name="address" id="address" />
                                     </div> 
                                     <div class="precio">
                                            <label for="precio" >Precio</label>
                                            <input class="grandes" name="precio1" id="precio1" type="range"  min="50000" max="500000"  value="50000" onchange="rangevalue.value=value;spanvalue.value=value"/>
                                            <input type="hidden" id="rangevalue"/>
                                            <span id="spanvalue">50000</span>
                                     </div>  
                                     <div class="send">
                                         <input type="button" id="send" name="buscar" value="Buscar">
                                     </div>  
                                     <div id="cmenu">
                                     <label for="moneda" >Moneda</label>
                                     <input class="pequeñas" type="text" name="moneda" id="moneda" />
                                     <label for="tipo" >Tipo</label>
                                     <input class="pequeñas" type="text" name="tipo" id="tipo" />
                                     <a id="ocultar">X</a>
                                     </div>
                                </form>
                            </div>
                        <div id="google_map"></div>
                        
                    </div>
                        
                    </div>
	</div>
</div>
	<!-- end content -->	
<?php 
if($this->session->flashdata('usuario_incorrecto'))
{
?>
        <script> alert('<?=$this->session->flashdata('usuario_incorrecto')?>');</script>
<?php
}
?>

<?php include ("footer.php") ;?>

