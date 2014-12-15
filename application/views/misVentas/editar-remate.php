<?php include_once('/../headeradmin.php') ;?>



<div id="siteframe">
    <div id="content">
        <div class="content-padding">
            <div class="title-page"><h1><?php echo $title_page ?></h1></div>
            <?php include_once('/../columnMenu.php') ;?>
            <div class="box-publicar" id="publi-detalles">
                <form name="info-venta" class="info-venta">
                    <ul>
                    	<?php $map = true;
                    	 foreach ($publicacion as $value ){?>
                    	 <?php if (!empty($value['field_name'])) { ?>
                        <?php if($value['field_name'] == "name"){ ?>
	                        <li><label>Titulo</label></li>
	                        <li><input type="text" name="name" id="name" value="<?= $value['field_value']?>" required></li>
                        <?php }?>
                        <?php if($value['field_name'] == "imagen1"){ 
                        $imagen1 = array(
                                'src' => 'files/'.$value['field_value'],
                                'alt' => 'Su imagen 1',
                                'class' => 'imagenes',

                                'title' => 'Su imagen 1',

                      );    
                        ?>
                    		<li><label>Imagen Principal</label></li>
                                <li><?php echo img($imagen1);?></li>
                    	<?php } ?>
                        <?php if($value['field_name'] == "imagen2"){ 
                        $imagen2 = array(
                                'src' => 'files/'.$value['field_value'],
                                'alt' => 'Su imagen 2',
                                'class' => 'imagenes',

                                'title' => 'Su imagen 2',

                      );    
                        ?>
                    		<li><label>Imagen</label></li>
                                <li><?php echo img($imagen2);?></li>
                    	<?php } ?>
                        <?php if($value['field_name'] == "imagen3"){ 
                        $imagen3 = array(
                                'src' => 'files/'.$value['field_value'],
                                'alt' => 'Su imagen 3',
                                'class' => 'imagenes',

                                'title' => 'Su imagen 3',

                      );    
                        ?>
                    		<li><label>Imagen </label></li>
                                <li><?php echo img($imagen3);?></li>
                    	<?php } ?> 
                        <?php if($value['field_name'] == "imagen4"){ 
                        $imagen4 = array(
                                'src' => 'files/'.$value['field_value'],
                                'alt' => 'Su imagen 4',
                                'class' => 'imagenes',

                                'title' => 'Su imagen 4',

                      );    
                        ?>
                    		<li><label>Imagen</label></li>
                                <li><?php echo img($imagen4);?></li>
                    	<?php } ?>
                        <?php if($value['field_name'] == "imagen5"){ 
                        $imagen5 = array(
                                'src' => 'files/'.$value['field_value'],
                                'alt' => 'Su imagen 5',
                                'class' => 'imagenes',

                                'title' => 'Su imagen 5',

                      );    
                        ?>
                    		<li><label>Imagen</label></li>
                                <li><?php echo img($imagen5);?></li>
                    	<?php } ?>
                        <?php if($value['field_name'] == "tiempo"){ ?>
	                         <li><label>Tiempo de la Publicacion</label></li>
	                        <li>
	                            <select name="tiempo" id="tiempo">
	                                <optgroup>
	                                    <option value="1mes">1 Mes</option>
	                                    <option value="2meses">2 Meses</option>
	                                </optgroup>
	                            </select>
	                        </li>
                        <?php }?>
                        <?php if($value['field_name'] == "tipo-Terreno"){ ?>
	                        <li><label>Tipo Remate</label></li>
	                        <li>
	                            <select name="tipo-Terreno" id="tipo-Terreno">
	                                <optgroup>
	                                    <option value="casa" <?php if($value['field_value']== "casa") echo 'selected="selected"';?> >Casa</option>
	                                    <option value="apartamento"<?php if($value['field_value']== "Casa") echo 'selected="selected"'; ?>>Apartamentos</option>
	                                    <option value="terreno" <?php if($value['field_value']== "Casa") echo 'selected="selected"'; ?>>Terreno</option>
	                                </optgroup>
	                            </select>
	                        </li>
                        <?php }?>
                        <?php if($value['field_name'] == "numero-expediente"){ ?>
	                        <li><label>Número Expediente</label></li>
	                        <li><input type="text" name="numero-expediente" id="numero-expediente" value="<?= $value['field_value']?>" required></li>
                        <?php }?>
                        <?php if($value['field_name'] == "precio-remate"){ ?>
	                        <li><label>Precio Remate</label></li>
	                        <li><input type="text" name="precio-remate" id="precio-remate" value="<?= $value['field_value']?>" class="numbersOnly"></li>
	                        <li style="display: none;"><input type="text" name="precio-old" id="precio-remate-old" value="<?= $value['field_value']?>" class="numbersOnly"></li>	                        
                        <?php }?>
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
                        <?php }?>
                        <?php if($value['field_name'] == "tamano-propiedad" || $value['field_name'] == "tipe-tamano-terreno"){ ?>
	                        
	                        <li>
	                        	<?php if($value['field_name'] == "tamano-propiedad" ){ ?>
	                        		<li><label>Tamaño Propiedad</label></li>
	                            	<input type="text" name="tamano-propiedad" id="tamano-propiedad" value="<?= $value['field_value'] ?>" class="numbersOnly">
	                            <?php }?>
	                            <?php if( $value['field_name'] == "tipe-tamano-terreno"){ ?> 
		                            <select name="tipe-tamano-terreno" id="tipe-tamano-terreno">
		                                <optgroup>
		                                    <option value="metro-cuadrado" selected>m²</option>
		                                    <option value="pie">Pie</option>
		                                </optgroup>
		                            </select>
	                            <?php }?>
	                        </li>
                        <?php }?>
                        <?php if($value['field_name'] == "lugar-remate"){ ?>
	                        <li><label>Lugar del Remate</label></li>
	                        <li><input type="text" name="lugar-remate" id="lugar-remate" value="<?= $value['field_value']?>" required></li>
	                    <?php }?>
                        <?php if($value['field_name'] == "fecha-remate"){ ?>
	                        <li><label>Fecha del Remate</label></li>
	                        <li><input type="datetime" name="fecha-remate" id="fecha-remate" value="<?= $value['field_value']?>" required></li>
	                    <?php }?>
                        <?php if($value['field_name'] == "observacion"){ ?>
	                        <li><label>Observaciones</label></li>
	                        <li>
	                            <textarea rows="5" name="observacion" id="observacion"> <?= $value['field_value']?></textarea>
	                        </li>
                        <?php }
                        	}
                        ?>
                        <?php if(!empty($value['tipo_categoria']) ){ ?>
                    		 <li><input type="text" name="tipo_categoria" id="tipo_categoria" value="<?= $value['tipo_categoria']?>" style="display: none;" ></li>
                    		 <li><input type="text" name="idPublicacion" id="idPublicacion" value="<?= $value['idPublicacion']?>" style="display: none;" ></li>
                    		  
                    	<?php }?>
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