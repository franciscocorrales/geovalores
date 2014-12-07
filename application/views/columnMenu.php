<div class="box-publicar" id="publi-categorias">
    <div class="navigation-colunm">
        <div class="nav-gutter-colunm">
            <ul id="nav-colum">
                <li class="mainmenu-item active first adm">
                    <a href="/categories"><span class="menuadmin">Categorias</span></a>
                    <ul class="submenu-colunm">
                        <li class="submenu-item"><a href="<?php echo base_url(); ?>index.php/Publicar/contrucciones"><span>Contrucciones</span></a></li>
                        <li class="submenu-item"><a href="<?php echo base_url(); ?>index.php/Publicar/terrenos"><span>Terrenos</span></a></li>
                        <li class="submenu-item"><a href="<?php echo base_url(); ?>index.php/Publicar/alquileres"><span>Alquileres</span></a></li>
                        <li class="submenu-item"><a href="<?php echo base_url(); ?>index.php/Publicar/remates"><span>Remates</span></a></li>
                    </ul>
                </li>
                
                 <li class="mainmenu-item last adm">
                    <a href="<?php echo base_url(); ?>index.php/Publicadas/publicacion"><span class="menuadmin">Mis Puplicaciones</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php echo link_tag("css/column_menu.css");  ?>
<script>

     $("ul#nav-colum .mainmenu-item").hover(function(){
        $(".submenu-colunm").css('display','block');
        $(".last").css({ 'margin-top': '145px' });  
        
      }); 
      
     $(".submenu-colunm").mouseout (function() {
	 $(".submenu-colunm").css('display','none');
         $(".last").css({ 'margin-top': '0px' }); 
     });


</script>