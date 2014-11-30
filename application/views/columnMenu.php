<style>
    .submenu-item a{
    float:left;
    margin:0 0 7px 20px;
    position:relative;
 
    font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size:0.75em;
    font-weight:bold;
    text-decoration:none;
 
    color:#33302f;
    text-shadow:0px 1px 0px rgba(255,255,255,.4);
 
    padding:0.417em 0.417em 0.417em 0.917em;
 
   
 
    -webkit-border-radius:0 0.25em 0.25em 0;
    -moz-border-radius:0 0.25em 0.25em 0;
    border-radius:0 0.25em 0.25em 0;
 
    background-image: -webkit-linear-gradient(top, #439a00, #439a00);
    background-image: -moz-linear-gradient(top, #439a00, #439a00);
    background-image: -o-linear-gradient(top, #439a00, #439a00);
    background-image: -ms-linear-gradient(top, #439a00, #439a00);
    background-image: linear-gradient(top, #439a00, #439a00);
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#feda71', EndColorStr='#feba47');
 
    -webkit-box-shadow:
        inset 0 1px 0 #faeaba,
        0 1px 1px rgba(0,0,0,.1);
    -moz-box-shadow:
        inset 0 1px 0 #faeaba,
        0 1px 1px rgba(0,0,0,.1);
    box-shadow:
        inset 0 1px 0 #faeaba,
        0 1px 1px rgba(0,0,0,.1);
 
    z-index:100;
}
    .submenu-item a:before {
    content:'';
 
    width:1.30em;
    height:1.358em;
 
    background-image: -webkit-linear-gradient(left top, #439a00, #439a00);
    background-image: -moz-linear-gradient(left top, #439a00, #439a00);
    background-image: -o-linear-gradient(left top, #439a00, #439a00);
    background-image: -ms-linear-gradient(left top, #439a00, #439a00);
    background-image: linear-gradient(left top, #439a00, #439a00);
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=1,StartColorStr='#feda71', EndColorStr='#feba47');
     
    position:absolute;
    left:-0.69em;
    top:.5em;
 
    -webkit-transform:rotate(45deg);
    -moz-transform:rotate(45deg);
    -o-transform:rotate(45deg);
    transform:rotate(45deg);
 
    
 
    -webkit-border-radius:0 0 0 0.25em;
    -moz-border-radius:0 0 0 0.25em;
    border-radius:0 0 0 0.25em;
 
    z-index:1;
}

.adm {
    background: none repeat scroll 0 0 #33302f;
    text-align: center;
}
.adm a .menuadmin{
    color: #439a00;
}
</style>

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