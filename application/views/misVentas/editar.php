<?php include_once('/../headeradmin.php') ;?>
<script src=<?php echo base_url().'script/ventas.js'?> ></script>
<div id="siteframe">
    <div id="content">
        <div class="content-padding">
            <div class="title-page"><h1><?php echo $title_page ?></h1></div>
            <?php include_once('/../columnMenu.php') ;?>
            <div class="box-publicar" id="publi-detalles">
                <form name="info-venta" class="info-venta">
                <ul>
                <?php $tipoPublicacion = "";
                	$c = 0 ;
                	$map = true;
                	
                	 foreach ($publicacion as $value ){?>
                	
                	
                	<?php if (!empty($value['field_name'])) { ?>
                	 
                    	<?php if($value['field_name'] == "name"){ ?>
                    		<li><label>Titulo</label></li>
                        	<li><input type="text" name="name" id="name" value="<?= $value['field_value']?>" required></li>
                    	<?php } ?>
                        
                        <?php if($value['field_name'] == "tiempo"){ ?>
                    		<li><label>Tiempo de la Publicacion</label></li>
	                        <li>
	                            <select name="tiempo" id="tiempo">
	                                <optgroup>
	                                    <option value="1mes" <?php if($value['field_value']== "1mes") echo 'selected="selected"'; ?>>1 Mes</option>
	                                    <option value="2meses" <?php if($value['field_value']== "2meses") echo 'selected="selected"'; ?>>2 Meses</option>
	                                </optgroup>
	                            </select>
	                        </li>
                    	<?php } ?>
                         <?php if($value['field_name'] == "tipo-construccion"){ ?>
                    		<li><label>Tipo Construccion</label></li>
	                        <li>
	                            <select name="tipo-construccion" id="tipo-construccion">
	                                <optgroup>
	                                    <option value="Casa" <?php if($value['field_value']== "Casa") echo 'selected="selected"'; ?>>Casa</option>
	                                    <option value="Apartamento" <?php if($value['field_value']== "Apartamento") echo 'selected="selected"'; ?>>Apartamento</option>
	                                    <option value="Condonimio" <?php if($value['field_value']== "Condonimio") echo 'selected="selected"'; ?>>Condominio</option>
	                                    <option value="Oficina" <?php if($value['field_value']== "Oficina") echo 'selected="selected"'; ?>>Oficina</option>
	                                    <option value="Edificio" <?php if($value['field_value']== "Edificio") echo 'selected="selected"'; ?>>Edificio</option>
	                                    <option value="Industria" <?php if($value['field_value']== "Industria") echo 'selected="selected"'; ?>>Industria</option>
	                                    <option value="Bodega" <?php if($value['field_value']== "Bodega") echo 'selected="selected"'; ?>>Bodega</option>
	                                </optgroup>
	                            </select>
	                        </li>
						 <?php } ?>
                        
                        <?php if($value['field_name'] == "precio-dolar"){ ?>
                    		<li><label>Precio Dolares</label></li>
                        	<li><input type="text" name="precio-dolar" id="precio-dolar" value="<?= $value['field_value'] ?>"  class="numbersOnly"></li>
						 <?php } ?>
                        
                        <?php if($value['field_name'] == "precio-colones"){ ?>
                    		<li><label>Precio Colores</label></li>
                        	<li><input type="text" name="precio-colones" id="precio-colones" value="<?= $value['field_value'] ?>" class="numbersOnly" ></li>
                        	<li style="display: none;"><input type="text" name="precio-old" id="precio-remate-old" value="<?= $value['field_value']?>" class="numbersOnly"></li>
						 <?php } ?>
                         <?php if($value['field_name'] == "lat"){ ?>
                        	<?php if($map === true){ ?>
	                    		<li><label>Direccion (Arrastrar el marcador para actualizar la posición)</label></li>
		                        <li>
		                            <div class="local-map">
		                                <div id="google_map"></div>
		                            </div>
		                        </li>
	                        
						 	<?php $map = false; } ?>
						 	<li><label>Latitud</label></li>
                        	<li>
	                            <input type="text" name="lat" id="lat" value="<?= $value['field_value'] ?>" class="numbersOnly"/>
	                        </li>    
	                      <?php } ?>
	                     <?php if($value['field_name'] == "lng"){ ?>
	                     		<li><label>Longuitud</label></li>
	                     		<li>
	                            	<input type="text" name="lng" id="lng" value="<?= $value['field_value'] ?>" class="numbersOnly"/>
	                        </li>
	                      <?php } ?>
                        <?php if($value['field_name'] == "address"){ ?>
                    		<li><label>Direccion</label></li>
	                        <li><select name="address" id="address"  style="">
	                            <option value="San Jose" <?php if($value['field_value']== "San Jose") echo 'selected="selected"'; ?>>San José</option>
	                            <option value="Alajuela" <?php if($value['field_value']== "Alajuela") echo 'selected="selected"'; ?>>Alajuela</option>
	                            <option value="Cartago" <?php if($value['field_value']== "Cartago") echo 'selected="selected"'; ?>>Cartago</option>
	                            <option value="Guanacaste" <?php if($value['field_value']== "Guanacaste") echo 'selected="selected"'; ?>>Guanacaste</option>
	                            <option value="Heredia" <?php if($value['field_value']== "Heredia") echo 'selected="selected"'; ?>>Heredia</option>
	                            <option value="Puntarenas" <?php if($value['field_value']== "Puntarenas") echo 'selected="selected"'; ?>>Puntarenas</option>
	                            <option value="Limon" <?php if($value['field_value']== "Limon") echo 'selected="selected"'; ?>>Limón</option>
	                        </select></li>
						 <?php } ?>
                        
                        <?php if(($value['field_name'] == "tamano-terreno" || $value['field_name'] == "metro-cuadrado")){ ?>
                    		<li><label>Tamaño del Terreno</label></li>
	                        <li>
	                        	<?php if($value['field_name'] == "tamano-terreno" ){ ?>
	                            	<input type="text" name="tamano-terreno" id="tamano-terreno" value="<?= $value['field_value'] ?>" class="numbersOnly"> 
	                           	<?php } ?>
	                            <?php if($value['field_name'] == "tipe-tamano-terreno"){ ?>
		                            <select name="tipe-tamano-terreno" id="tipe-tamano-terreno">
		                                <optgroup>
		                                    <option value="metro-cuadrado" <?php if($value['field_value']== "metro-cuadrado") echo 'selected="selected"'; ?>>m²</option>
		                                    <option value="pie" <?php if($value['field_value']== "pie") echo 'selected="selected"'; ?>>Pie</option>
		                                </optgroup>
		                            </select>
		                        <?php } ?>
	                        </li>
						 <?php } ?>
                        <?php if($tipoPublicacion !=="alquileres"){?>
                        <?php if(($value['field_name'] == "tamano-contruccion" || $value['field_name'] == "metro-cuadrado")){ ?>
                    		<li><label>Tamaño Contruccion</label></li>
	                        <li>
	                        	<?php if($value['field_name'] == "tamano-contruccion" ){ ?>
	                            	<input type="text" name="tamano-contruccion" id="tamano-contruccion" value="<?= $value['field_value'] ?>" class="numbersOnly">
	                           	 <?php } ?>
	                            <?php if( $value['field_name'] == "metro-cuadrado"){ ?> 
		                            <select name="tipe-tamano-contruccion" id="tipe-tamano-contruccion">
		                                <optgroup>
		                                    <option value="metro-cuadrado" <?php if($value['field_value']== "metro-cuadrado") echo 'selected="selected"'; ?>>m²</option>
		                                    <option value="pie" <?php if($value['field_value']== "pie") echo 'selected="selected"'; ?>>Pie</option>
		                                </optgroup>
		                            </select>
		                        <?php } ?>
	                        </li>
						 <?php } ?>
						 <?php } ?>
                       	<?php if($tipoPublicacion !=="terreno" || $tipoPublicacion !=="alquileres"){?>
	                        <?php if($value['field_name'] == "edad-contruccion"){ ?>
	                    		<li><label>Edad De la Contruccion</label></li>
	                        	<li><input type="text" name="edad-contruccion" id="edad-contruccion" value="<?= $value['field_value'] ?>" class="numbersOnly" ></li>
							 <?php } ?>
                        <?php } ?>
                        <?php if($tipoPublicacion !=="terreno"){?>
                        <?php if($value['field_name'] == "tamano-frente"){ ?>
                    		<li><label>Tamaño del Frente</label></li>
                        	<li><input type="text" name="tamano-frente" id="tamano-frente" value="<?= $value['field_value'] ?>" required class="numbersOnly"></li>
						 <?php } ?>
						 <?php } ?>
                        <?php if($tipoPublicacion !=="terreno" ){?>
                        <?php if($value['field_name'] == "cantidad-pisos"){ ?>
                    		<li><label>Cantidad de Pisos</label></li>
	                        <li>
	                            <select name="cantidad-pisos" id="cantidad-pisos">
	                                <?php
	                                    for ($i=0; $i<=100; $i++)
	                                    {
	                                         if($i === 0){
	                                        ?>
	                                        <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        }else{
	                                            ?>
	                                            <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        }
	                                    }
	                                ?>
	                            </select>
	                        </li>
						 <?php } ?>
                        <?php } ?>
                        <?php if($tipoPublicacion !=="terreno"){?>
                        <?php if($value['field_name'] == "cantidad-cuartos"){ ?>
                    		<li><label>Cantidad Cuartos</label></li>
	                        <li>
	                            <select name="cantidad-cuartos" id="cantidad-cuartos">
	                                <?php
	                                    for ($i=0; $i<=50; $i++)
	                                    {
	                                         if($i === 0){
	                                        ?>
	                                        <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        }else{
	                                            ?>
	                                            <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?> ><?php echo $i;?></option>
	                                        <?php  
	                                        }
	                                    }
	                                ?>
	                            </select>
	                        </li>
						 <?php } ?>
                        <?php } ?>
                        <?php if($tipoPublicacion !=="terreno" || $tipoPublicacion !=="alquileres"){?>
                        <?php if($value['field_name'] == "closet"){ ?>
                    		<li><label>Closet</label></li>
	                        <li>
	                            <select name="closet" id="closet">
	                            <?php
	                                    for ($i=0; $i<=10; $i++)
	                                    {
	                                         if($i === 0){
	                                        ?>
	                                        <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        }else{
	                                            ?>
	                                            <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        }
	                                    }
	                                ?>
	                            </select>
	                        </li>
						 <?php } ?>
						 <?php }?>
                        <?php if($tipoPublicacion !=="terreno"){?>
                        <?php if(($value['field_name'] == "cantidad-banos" || $value['field_name'] == "tipo-bano")){ ?>
                    		<li><label>Baños</label></li>
	                        <li>
	                        	<?php if($value['field_name'] == "cantidad-banos"){ ?>
	                            <select name="cantidad-banos" id="cantidad-banos">
	                                <?php
	                                    for ($i=0; $i<=10; $i++)
	                                    {
	                                         if($i === 0){
	                                        ?>
	                                        <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        }else{
	                                            ?>
	                                            <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        }
	                                    }
	                                ?>
	                            </select>
	                            <?php } ?>
	                            <?php if($value['field_name'] == "tipo-bano"){ ?>
	                            <select name="tipo-bano" id="tipo-bano" >
	                                <option value="normal" <?php if($value['field_value']== "normal") echo 'selected="selected"'; ?>>Normal</option>
	                                <option value="tina" <?php if($value['field_value']== "tina") echo 'selected="selected"'; ?>>Tina</option>
	                                <option value="jaccussi" <?php if($value['field_value']== "jaccussi") echo 'selected="selected"'; ?>>Jaccussi</option>
	                            </select>
	                            <?php } ?>
	                        </li>
						 <?php } ?>
                        <?php }?>
                        <?php if($tipoPublicacion !=="terreno"){?>
                        <?php if($value['field_name'] == "cochera"){ ?>
                    		<li><label>Cochera</label></li>
                        	<li><input type="radio" name="cochera"  value="con-cochera" <?php if($value['field_value']== "con-cochera") echo 'checked="checked"'; ?>>Si <input type="radio" name="cochera" value="sin-cochera" <?php if($value['field_value']== "sin-cochera") echo 'checked="checked"'; ?>>No</li>
						 <?php } ?>
                        <?php }?>
                        <?php if($value['field_name'] == "cantidad-carros"){ ?>
                    		<li class="cant-carros"><label>Cantidad de Carros</label></li>
	                        <li class="cant-carros" >
	                            <select name="cantidad-carros" id="cantidad-carros">
	                                <?php
	                                    for ($i=0; $i<=10; $i++)
	                                    {
	                                        if($i === 0){
	                                        ?>
	                                        <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        }else{
	                                            ?>
	                                            <option value="<?php echo $i;?>" <?php if($value['field_value']== $i) echo 'selected="selected"'; ?>><?php echo $i;?></option>
	                                        <?php  
	                                        } 
	
	                                    }
	                                ?>
	                            </select>
	                        </li>
						 <?php } ?>
                        <?php if($tipoPublicacion !=="terreno" || $tipoPublicacion !=="alquileres"){?>
                        <?php if($value['field_name'] == "cuarto-lavado"){ ?>
                    		<li><label>Cuarto de Lavado</label></li>
	                        <li>
	                            <select name="cuarto-lavado" id="cuarto-lavado" >
	                                <option value="interior" <?php if($value['field_value']== "interior") echo 'selected="selected"'; ?>>Interior</option>
	                                <option value="exterior" <?php if($value['field_value']== "exterior") echo 'selected="selected"'; ?>>Exterior</option>
	                            </select>
	                        </li>
						 <?php } ?>
                        <?php } ?>
                        <?php if($tipoPublicacion !=="terreno" || $tipoPublicacion !=="alquileres"){?>
						<?php if($value['field_name'] == "porton-electrico"){ ?>
                    		<li><label>Porton Eléctrico</label></li>
	                        <li>
	                            <select name="porton-electrico" id="cuarto-lavado" >
	                                <option value="con-porton" <?php if($value['field_value']== "con-porton") echo 'selected="selected"'; ?>>Si</option>
	                                <option value="sin-porton" <?php if($value['field_value']== "sin-porton") echo 'selected="selected"'; ?>>No</option>
	                            </select>
	                        </li>
						 <?php } ?>
                        <?php } ?>
                        <?php if($tipoPublicacion !=="terreno" || $tipoPublicacion !=="alquileres"){?>
                        <?php if($value['field_name'] == "acondicionado"){ ?>
                    		<li><label>Aire Acondicionado</label></li>
	                        <li><select name="acondicionado" id="acondicionado" >
	                                <option value="con-aire" <?php if($value['field_value']== "con-aire") echo 'selected="selected"'; ?>>Si</option>
	                                <option value="sin-aire" <?php if($value['field_value']== "sin-aire") echo 'selected="selected"'; ?>>No</option>
	                            </select>
	                        </li>
						 <?php } ?>
                        <?php } ?>
                        <?php if($tipoPublicacion !=="terreno" || $tipoPublicacion !=="alquileres"){?>
                        <?php if($value['field_name'] == "jardin"){ ?>
                    		<li><label>Jardin</label></li>
	                        <li><select name="jardin" id="jardin" >
	                                <option value="con-jardin" <?php if($value['field_value']== "con-jardin") echo 'selected="selected"'; ?>>Si</option>
	                                <option value="sin-jardin" <?php if($value['field_value']== "sin-jardin") echo 'selected="selected"'; ?>>No</option>
	                            </select>
	                        </li>
						 <?php } ?>
						 <?php } ?>
						 <?php if($tipoPublicacion !=="terreno" || $tipoPublicacion !=="alquileres"){?>
						 <?php if($value['field_name'] == "bodega"){ ?>
                    		<li><label>Bodega</label></li>
	                        <li><select name="bodega" id="bodega" >
	                                <option value="exterior-bodega" <?php if($value['field_value']== "exterior-bodega") echo 'selected="selected"'; ?>>Exterior</option>
	                                <option value="interior-bodega" <?php if($value['field_value']== "interior-bodega") echo 'selected="selected"'; ?>>Interior</option>
	                            </select>
	                        </li>
						 <?php } ?>
                       	<?php } ?>
                       	
                     	<?php if($tipoPublicacion ==="terreno" || $tipoPublicacion !=="alquileres" ){?>
					 	<?php if($value['field_name'] == "topografia"){ ?>
                       	<li><label>Topografia</label></li>
                        <li> 
                            <select name="topografia" id="topografia">
                                <optgroup>
                                    <option value="plano" <?php if($value['field_value']== "plano") echo 'selected="selected"'; ?>>Plano</option>
                                    <option value="poco_inclinado" <?php if($value['field_value']== "poco_inclinado") echo 'selected="selected"'; ?>>Poco Inclinado</option>
                                    <option value="ondulado" <?php if($value['field_value']== "ondulado") echo 'selected="selected"'; ?>>Ondulado</option>
                                    <option value="fuertemente_ondulado" <?php if($value['']== "fuertemente_ondulado") echo 'selected="selected"'; ?>>Fuertemente Ondulado</option>
                                    <option value="quebrado" <?php if($value['field_value']== "quebrado") echo 'selected="selected"'; ?>>quebrado</option>
                                    <option value="turistica" <?php if($value['field_value']== "turistica") echo 'selected="selected"'; ?>>Turística</option>
                                    <option value="muy_quebrado" <?php if($value['field_value']== "muy_quebrado") echo 'selected="selected"'; ?>>Muy Quebrado</option>
                                </optgroup>
                            </select>
                        </li>
                       	<?php } ?>
                       	<?php } ?>
                       	
                        <?php if($value['field_name'] == "observacion"){ ?>
                    		<li><label>Observaciones</label></li>
	                        <li>
	                            <textarea rows="5" name="observacion" id="observacion"> <?=$value['field_value'] ?></textarea>
	                        </li>
						 <?php } ?>
                    <?php $c +=1; } ?>
                    		<?php if(!empty($value['tipo_categoria']) ){ ?>
                    		 <li><input type="text" name="tipo_categoria" id="tipo_categoria" value="<?= $value['tipo_categoria']?>" style="display: none;" ></li>
                    		 <li><input type="text" name="idPublicacion" id="idPublicacion" value="<?= $value['idPublicacion']?>" style="display: none;" ></li>
                    		  
                    	<?php  $tipoPublicacion = $value['tipo_categoria']; } ?>
					<?php }?>
                    </ul>
                </form>
                <div id="btn-save-info">
                    <input type="button" name="btnSave" value="Guardar" onclick="SaveInfoEditada();">
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('/../footer.php') ;?>