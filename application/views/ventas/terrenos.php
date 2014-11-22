<?php include '/../headeradmin.php';?>
<script src=<?php echo base_url().'script/ventas.js'?> ></script>

<div id="siteframe">
    <div id="content">
        <div class="content-padding">
            <div class="title-page"><h1><?php echo $title_page ?></h1></div>
            <?php include '/../columnMenu.php' ;?>
            <div class="box-publicar" id="publi-detalles">
                <form name="info-venta" class="info-venta">
                    <ul>
                        <li><input type="hidden" name="tipo_categoria" id="tipo_categoria" value="terreno" ></li>
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
                        <li><label>Tipo Terreno</label></li>
                        <li>
                            <select name="tipo-Terreno" id="tipo-Terreno">
                                <optgroup>
                                    <option value="Urbano">urbano</option>
                                    <option value="agricola">Agricola</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="condominio">Condominio</option>
                                    <option value="quinta">Quinta</option>
                                    <option value="turistica">Turística</option>
                                    <option value="forestal">Forestal</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Precio Dolares</label></li>
                        <li><input type="text" name="precio-dolar" id="precio-dolar" value="" required></li>
                        <li><label>Precio Colores</label></li>
                        <li><input type="text" name="precio-colones" id="precio-colones" value="" ></li>
                        <li><label>Direccion</label></li>
                        <li>
                            <div class="local-map">
                                <div id="google_map"></div>
                            </div>
                        </li>
                        <li><label>Tamaño del Terreno</label></li>
                        <li>
                            <input type="text" name="tamano-terreno" id="tamano-terreno" value="" required> 
                            <select name="tipe-tamano-terreno" id="tipe-tamano-terreno">
                                <optgroup>
                                    <option value="metro-cuadrado" selected>m²</option>
                                    <option value="pie">Pie</option>
                                </optgroup>
                            </select>
                        </li>
                        <li><label>Tamaño del Frente</label></li>
                        <li><input type="text" name="tamano-frente" id="tamano-frente" value="" required></li>
                        <li><label>Topografia</label></li>
                        <li> 
                            <select name="topografia" id="topografia">
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

<?php include '/../footer.php' ;?>