<?php include '/../headeradmin.php';?>


<div id="siteframe">
    <div id="content">
        <div class="content-padding">
            <div class="title-page"><h1><?php echo $title_page ?></h1></div>
            <?php include '/../columnMenu.php' ;?>
           <div class="box-publicar" id="publi-detalles">
            
                <form enctype="multipart/form-data" name="info-venta" class="info-venta">
                    <ul>
                        <li><input type="hidden" name="tipo_categoria" id="tipo_categoria" value="terreno" ></li>
                        <li><label>Titulo</label></li>
                        <li><input class="form-input" type="text" name="name" id="name" value="" required></li>
                        <li><label>Fotos</label></li>
                        <li>
                            <input class="custom-file-input" id="userfile" type="file" name="userfile[]" multiple/>
                        </li>
                        
                         <li><label>Tiempo de la Publicacion</label></li>
                        <li>
                            <select class="form-input" name="tiempo" id="tiempo">
                                <optgroup>
                                    <option value="1mes">1 Mes</option>
                                    <option value="2meses">2 Meses</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Tipo Terreno</label></li>
                        <li>
                            <select class="form-input" name="tipo-Terreno" id="tipo-Terreno">
                                <optgroup>
                                    <option value="Urbano">Urbano</option>
                                    <option value="Agricola">Agricola</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Condominio">Condominio</option>
                                    <option value="Quinta">Quinta</option>
                                    <option value="Turistica">Turística</option>
                                    <option value="Forestal">Forestal</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Precio</label></li>
                        
                        <li>
                            <select class="form-input" name="moneda" id="moneda">
                                <optgroup>
                                    <option value="colones">₡</option>
                                    <option value="dolares">$</option>
                                </optgroup>
                            </select>
                            <input type="text" name="precio-dolar" id="precio-dolar" value="" class="form-input numbersOnly"><input type="text" name="precio-colones" id="precio-colones" value="" class="form-input numbersOnly" ></li>
                        <li><label>Direccion (Arrastrar el marcador para actualizar la posición)</label></li>
                        <li>
                            <div class="local-map">
                                <div id="google_map"></div>
                            </div>
                        </li>
                        <li>
                            <input type="text" name="lat" id="lat" value="" class="form-input numbersOnly"/>
                            <input type="text" name="lng" id="lng" value="" class="numbersOnly form-input"/>
                        </li>
                        <li><label>Direccion</label></li>
                        <li><select class="form-input" name="address" id="address" value="" required style="">
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
                            <input type="text" name="tamano-terreno" id="tamano-terreno" value="" class="numbersOnly form-input"> 
                            <select class="form-input" name="tipe-tamano-terreno" id="tipe-tamano-terreno">
                                <optgroup>
                                    <option value="metro-cuadrado" selected>m²</option>
                                    <option value="pie">Pie</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Tamaño del Frente</label></li>
                        <li><input type="text" name="tamano-frente" id="tamano-frente" value="" class="numbersOnly form-input"></li>
                        <li><label>Topografia</label></li>
                        <li> 
                            <select class="form-input" name="topografia" id="topografia">
                                <optgroup>
                                    <option value="plano">Plano</option>
                                    <option value="poco_inclinado">Poco Inclinado</option>
                                    <option value="ondulado">Ondulado</option>
                                    <option value="fuertemente_ondulado">Fuertemente Ondulado</option>
                                    <option value="quebrado">quebrado</option>
                                    <option value="turistica">Turística</option>
                                    <option value="muy_quebrado">Muy Quebrado</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Observaciones</label></li>
                        <li>
                            <textarea class="form-input" rows="5" name="observacion" id="observacion"> </textarea>
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

<?php include '/../footer.php' ;?>