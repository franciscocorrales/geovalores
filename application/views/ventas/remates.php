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
                        <li><input type="hidden" name="tipo_categoria" id="tipo_categoria" value="alquileres" ></li>
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
                        <li><label>Tipo Remate</label></li>
                        <li>
                            <select name="tipo-Terreno" id="tipo-Terreno">
                                <optgroup>
                                    <option value="casa">Casa</option>
                                    <option value="apartamento">Apartamentos</option>
                                    <option value="terreno">Terreno</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Número Expediente</label></li>
                        <li><input type="text" name="numero-expediente" id="numero-expediente" value="" required></li>
                        <li><label>Precio Remate</label></li>
                        <li><input type="text" name="precio-remate" id="precio-remate" value="" class="numbersOnly"></li>
                        <li><label>Dirección (Arrastrar el marcador para actualizar la posición)</label></li>
                        <li>
                            <div class="local-map">
                                <div id="google_map"></div>
                            </div>
                        </li>
                        <li>
                            <input type="text" name="lat" id="lat" value="" class="numbersOnly"/>
                            <input type="text" name="lng" id="lng" value="" class="numbersOnly"/>
                        </li>
                        <li><label>Tamaño Propiedad</label></li>
                        <li>
                            <input type="text" name="tamano-propiedad" id="tamano-propiedad" value="" class="numbersOnly"> 
                            <select name="tipe-tamano-terreno" id="tipe-tamano-terreno">
                                <optgroup>
                                    <option value="metro-cuadrado" selected>m²</option>
                                    <option value="pie">Pie</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Lugar del Remate</label></li>
                        <li><input type="text" name="lugar-remate" id="lugar-remate" value="" required></li>
                        <li><label>Fecha del Remate</label></li>
                        <li><input type="datetime" name="fecha-remate" id="fecha-remate" value="" required></li>
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