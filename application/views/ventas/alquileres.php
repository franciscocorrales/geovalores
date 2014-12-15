<?php include_once('/../headeradmin.php') ;?>
<script src=<?php echo base_url().'script/ventas.js'?> ></script>
<style>
    #siteframe {
    min-height: 1140px;
}
</style>

<div id="siteframe">
    <div id="content">
        <div class="content-padding">
            <div class="title-page"><h1><?php echo $title_page ?></h1></div>
            <?php include_once('/../columnMenu.php') ;?>
            <div class="box-publicar" id="publi-detalles">
                <form name="info-venta" class="info-venta">
                    <ul>
                        <li><input type="hidden" name="tipo_categoria" id="tipo_categoria" value="alquileres" ></li>
                        <li><label>Titulo</label></li>
                        <li><input type="text" name="name" id="name" value="" required></li>
                        <li><label>Fotos</label></li>
                        <li>
                            <input class="custom-file-input" id="userfile" type="file" name="userfile[]" multiple/>
                        </li>
                         <li><label>Tiempo de la Publicacion</label></li>
                        <li>
                            <select name="tiempo" id="tiempo">
                                <optgroup>
                                    <option value="1mes">1 Mes</option>
                                    <option value="2meses">2 Meses</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Tipo Alquiler</label></li>
                        <li>
                            <select name="tipo-Terreno" id="tipo-Terreno">
                                <optgroup>
                                    <option value="Casa">Casa</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Condominio">Condominio</option>
                                    <option value="Oficina_local">Oficina Local</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Edificio">edificio</option>
                                    <option value="Industria">industria</option>
                                    <option value="Cochera">Cochera</option>
                                    <option value="Bodega">Bodega</option>
                                    <option value="Terreno">terreno</option>
                                    <option value="Quinta">Quinta</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Direccion (Arrastrar el marcador para actualizar la posiciónArrastrar el marcador para actualizar la posición)</label></li>
                        <li>
                            <div class="local-map">
                                <div id="google_map"></div>
                            </div>
                          
                        </li>
                        <li>
                            <input type="text" name="lat" id="lat" value="" class="numbersOnly"/>
                            <input type="text" name="lng" id="lng" value="" class="numbersOnly"/>
                        </li>
                        <li><label>Precio Dolares</label></li>
                        <li><input type="text" name="precio-dolar" id="precio-dolar" value="" class="numbersOnly"></li>
                        <li><label>Precio Colores</label></li>
                        <li><input type="text" name="precio-colones" id="precio-colones" value="" class="numbersOnly" ></li>
                        <li><label>Direccion</label></li>
                        <li><select name="address" id="address" value="" required style="">
                            <option value="San Jose">San José</option>
                            <option value="Alajuela">Alajuela</option>
                            <option value="Cartago">Cartago</option>
                            <option value="Guanacaste">Guanacaste</option>
                            <option value="Heredia">Heredia</option>
                            <option value="Puntarenas">Puntarenas</option>
                            <option value="Limon">Limón</option>
                        </select></li>
                        <li><label>Tamaño del Terreno</label></li>
                        <li>
                            <input type="text" name="tamano-terreno" id="tamano-terreno" value="" class="numbersOnly"> 
                            <select name="tipe-tamano-terreno" id="tipe-tamano-terreno">
                                <optgroup>
                                    <option value="metro-cuadrado" selected>m²</option>
                                    <option value="pie">Pie</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Tamaño del Frente</label></li>
                        <li><input type="text" name="tamano-frente" id="tamano-frente" value="" class="numbersOnly"></li>
                        <li><label>Cantidad Cuartos</label></li>
                        <li>
                            <select name="cantidad-cuartos" id="cantidad-cuartos">
                                <?php
                                    for ($i=0; $i<=50; $i++)
                                    {
                                         if($i === 0){
                                        ?>
                                        <option value="<?php echo $i;?>" selected="selected"><?php echo $i;?></option>
                                        <?php  
                                        }else{
                                            ?>
                                            <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                        <?php  
                                        }
                                    }
                                ?>
                            </select>
                        </li>
                        <li><label>Baños</label></li>
                        <li>
                            <select name="cantidad-banos" id="cantidad-banos">
                                <?php
                                    for ($i=0; $i<=10; $i++)
                                    {
                                         if($i === 0){
                                        ?>
                                        <option value="<?php echo $i;?>" selected="selected"><?php echo $i;?></option>
                                        <?php  
                                        }else{
                                            ?>
                                            <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                        <?php  
                                        }
                                    }
                                ?>
                            </select>
                            <select name="tipo-bano" id="tipo-bano" >
                                <option value="normal" selected>Normal</option>
                                <option value="tina">Tina</option>
                                <option value="jaccussi">Jaccussi</option>
                            </select>
                        </li>
                        <li><label>Cantidad Pisos</label></li>
                        <li>
                            <select name="cantidad-pisos" id="cantidad-pisos">
                                <?php
                                    for ($i=0; $i<=50; $i++)
                                    {
                                         if($i === 0){
                                        ?>
                                        <option value="<?php echo $i;?>" selected="selected"><?php echo $i;?></option>
                                        <?php  
                                        }else{
                                            ?>
                                            <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                        <?php  
                                        }
                                    }
                                ?>
                            </select>
                        </li>
                        <li><label>Cochera</label></li>
                        <li><input type="radio" name="cochera"  value="con-cochera">Si <input type="radio" name="cochera" value="sin-cochera">No</li>
                        <li class="cant-carros" style="display: none;"><label>Cantidad de Carros</label></li>
                        <li class="cant-carros" style="display: none;">
                            <select name="cantidad-carros" id="cantidad-carros">
                                <?php
                                    for ($i=0; $i<=10; $i++)
                                    {
                                        if($i === 0){
                                        ?>
                                        <option value="<?php echo $i;?>" selected="selected"><?php echo $i;?></option>
                                        <?php  
                                        }else{
                                            ?>
                                            <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                        <?php  
                                        }

                                    }
                                ?>
                            </select>
                        </li>
                        <li><label>Observaciones</label></li>
                        <li>
                            <textarea rows="5" name="observacion" id="observacion"> </textarea>
                        </li>
                    </ul>
                    <div id="btn-save-info">
                    <input type="submit" name="submit" value="Guardar" id="submit" />
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<?php include_once('/../footer.php') ;?>