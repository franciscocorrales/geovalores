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
                        <li><input type="hidden" name="tipo_categoria" id="tipo_categoria" value="construcciones" ></li>
                        <li><label>Titulo</label></li>
                        <li><input type="text" name="titulo" id="titulo" value="" required></li>
                         <li><label>Tiempo de la Publicacion</label></li>
                        <li>
                            <select name="tiempo" id="tiempo">
                                <optgroup>
                                    <option value="1mes">1 Mes</option>
                                    <option value="2meses">2 Meses</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Tipo Construccion</label></li>
                        <li>
                            <select name="tipo-construccion" id="tipo-construccion">
                                <optgroup>
                                    <option value="casa">Casa</option>
                                    <option value="apartamento">Apartamento</option>
                                    <option value="condonimio">Condominio</option>
                                    <option value="oficina">Oficina</option>
                                    <option value="deificio">Edificio</option>
                                    <option value="industria">Industria</option>
                                    <option value="bodega">Bodega</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Precio Dolares</label></li>
                        <li><input type="text" name="precio-dolar" id="precio-dolar" value=""  class="numbersOnly"></li>
                        <li><label>Precio Colores</label></li>
                        <li><input type="text" name="precio-colones" id="precio-colones" value="" class="numbersOnly" ></li>
                        <li><label>Direccion</label></li>
                        <li>
                            <div class="local-map">
                                <div id="google_map"></div>
                            </div>
                        </li>
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
                        <li><label>Tamaño Contruccion</label></li>
                        <li>
                            <input type="text" name="tamano-contruccion" id="tamano-contruccion" value="" class="numbersOnly"> 
                            <select name="tipe-tamano-contruccion" id="tipe-tamano-contruccion">
                                <optgroup>
                                    <option value="metro-cuadrado" selected>m²</option>
                                    <option value="pie">Pie</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Edad De la Contruccion</label></li>
                        <li><input type="text" name="edad-contruccion" id="edad-contruccion" value="" class="numbersOnly" ></li>
                        <li><label>Tamaño del Frente</label></li>
                        <li><input type="text" name="tamano-frente" id="tamano-frente" value="" required class="numbersOnly"></li>
                        <li><label>Cantidad de Pisos</label></li>
                        <li>
                            <select name="cantidad-pisos" id="cantidad-pisos">
                                <?php
                                    for ($i=0; $i<=100; $i++)
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
                        <li><label>Closet</label></li>
                        <li>
                            <select name="closet" id="closet">
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
                        <li><label>Cochera</label></li>
                        <li><input type="radio" name="cochera"  value="con-cochera">Si <input type="radio" name="cochera" value="sin-cochera" checked="checked">No</li>
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
                        <li><label>Cuarto de Lavado</label></li>
                        <li>
                            <select name="cuarto-lavado" id="cuarto-lavado" >
                                <option value="interior" selected>Interior</option>
                                <option value="exterior">Exterior</option>
                            </select>
                        </li>

                        <li><label>Porton Eléctrico</label></li>
                        <li>
                            <select name="porton-electrico" id="cuarto-lavado" >
                                <option value="con-porton" selected>Si</option>
                                <option value="sin-porton">No</option>
                            </select>
                        </li>
                        <li><label>Aire Acondicionado</label></li>
                        <li><select name="acondicionado" id="acondicionado" >
                                <option value="con-aire" selected>Si</option>
                                <option value="sin-aire">No</option>
                            </select>
                        </li>
                        <li><label>Bodega</label></li>
                        <li><select name="bodega" id="bodega" >
                                <option value="exterior-bodega" selected>Exterior</option>
                                <option value="interior-bodega">Interior</option>
                            </select>
                        </li>
                        <li><label>Jardin</label></li>
                        <li><select name="jardin" id="jardin" >
                                <option value="con-jardin" selected>Si</option>
                                <option value="sin-jardin">No</option>
                            </select>
                        </li>
                        <li><label>Observaciones</label></li>
                        <li>
                            <textarea rows="5" name="observacion" id="observacion"> </textarea>
                        </li>
                    </ul>
                </form>
                <div id="btn-save-info">
                    <input type="button" name="btnSave" value="Guardar" onclick="SaveInfo();">
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('/../footer.php') ;?>