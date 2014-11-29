<div class="box-publicar" id="publi-categorias">
    <div class="navigation-colunm">
        <div class="nav-gutter-colunm">
            <ul id="nav-colum">
                <li class="mainmenu-item active first">
                    <a href="/categorias/"><span>Categorias</span></a>
                    <ul class="submenu-colunm">
                        <li class="submenu-item"><a href="<?php echo base_url(); ?>index.php/Publicar/contrucciones"><span>Contrucciones</span></a></li>
                        <li class="submenu-item"><a href="<?php echo base_url(); ?>index.php/Publicar/terrenos"><span>Terrenos</span></a></li>
                        <li class="submenu-item"><a href="<?php echo base_url(); ?>index.php/Publicar/alquileres"><span>Alquileres</span></a></li>
                        <li class="submenu-item"><a href="<?php echo base_url(); ?>index.php/Publicar/remates"><span>Remates</span></a></li>
                    </ul>
                </li>
                
                 <li class="mainmenu-item">
                    <a href="<?php echo base_url(); ?>index.php/Publicadas/publicacion"><span>Mis Puplicaciones</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>

     $("ul#nav-colum .mainmenu-item").hover(function(){
        $(this).find('ul').show();
      }); 
      
     $(".submenu-colunm").mouseout (function() {
	 $(".submenu-colunm").css('display','none');
     });


</script>