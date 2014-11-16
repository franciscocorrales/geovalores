<?php include ("header.php") ;?>

	<!-- content -->
<div id="siteframe">
	<div id="content">
		<div class="content-padding">
                    <div class="content-left">
                        <div class="padding-left">
                            <div class="nav-content-left">
                                <ul>
                                    <li class="mainmenu-itemvertical active"><a href="/"><?php echo img('images/flechamenu.png');?> <span>Inicio</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="/"><?php echo img('images/flechamenu.png');?> <span>Quienes Somos</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="/"><?php echo img('images/flechamenu.png');?> <span>Comprar</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="/"><?php echo img('images/flechamenu.png');?> <span>Venta</span></a></li>
                                    <li class="mainmenu-itemvertical"><a href="index.php/Contacto"><?php echo img('images/flechamenu.png');?> <span>Contacto</span></a></li>
                                </ul>
                            </div>

                            <div class="moreNews">
                                <div class="titles">
                                    <h3>Noticias y Eventos</h3>
                                </div>
                                <div class="news">
                                   <div class="newDate">
                                        <h4>21/6/2014</h4>
                                    </div>
                                    <div class="newContent">
                                        <p>En primer lugar En esta publicidad es la necesidad de cualquier organización</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="" ><span>leer Más</span></a>
                                    </div>
                                </div>
                                <div class="news">
                                   <div class="newDate">
                                        <h4>21/6/2014</h4>
                                    </div>
                                    <div class="newContent">
                                        <p>En primer lugar En esta publicidad es la necesidad de cualquier organización</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="" ><span>leer Más</span></a>
                                    </div>
                                </div>
                                <div class="news">
                                   <div class="newDate">
                                        <h4>21/6/2014</h4>
                                    </div>
                                    <div class="newContent">
                                        <p>En primer lugar En esta publicidad es la necesidad de cualquier organización</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="" ><span>leer Más</span></a>
                                    </div>
                                </div>
                                <div class="news">
                                   <div class="newDate">
                                        <h4>21/6/2014</h4>
                                    </div>
                                    <div class="newContent">
                                        <p>En primer lugar En esta publicidad es la necesidad de cualquier organización</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="" ><span>leer Más</span></a>
                                    </div>
                                </div>
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
                        <div class="content-search">
                            <div class="stand-out content-description">
                                <div class="titles">
                                    <h3>Casas Destacadas</h3>
                                </div>
                                <div class='stand-house'>
                                    <?php echo img('images/house.png');?>
                                </div>
                                <div class="description-house">
                                    <p>En primer lugar En esta publicidad es la necesidad de cualquier organización a la fama de su empresa en el mundo. Nuestro Café es en esta época. En esta publicidad es la necesidad.... </p>
                                </div>
                                <div class="read-more">
                                    <a href="" ><span>leer Más</span></a>
                                </div>
                            </div>
                            
                        </div>        
                    </div>
                        
                    </div>
	</div>
</div>
	<!-- end content -->	


<?php include ("footer.php") ;?>

