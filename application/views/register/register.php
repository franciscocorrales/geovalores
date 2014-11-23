<?php include_once('./application/views/header.php') ;?>
<style>
    #content {
    background-color: #fff;
    border: 1px solid #c9c4c3;
    border-radius: 5px;
    box-shadow: 0 6px 10px -2px rgba(46, 45, 46, 1);
}

#siteframe {
    background: none repeat scroll 0 0 #f0f0f0;
    min-height: 480px;
}
.form-btn {
    margin-right: 29px;
}

.box-register {
    float: left;
    padding-left: 92px;
    padding-top: 31px;
}
</style>
<script src=<?php echo base_url().'script/register.js'?> ></script>
<div id="siteframe">
	<div id="content">
            <div class="content-padding">
                <form id="form-register">
                    <div class="content-Register">
                        <div class="box-register">
                            <ul>
                                <li><label>Nombre</label></li>
                                <li><input class="form-input" type="text" name="txt-nombre" id="txt-nombre" value="" required></li>
                                <li><label>Apellidos</label></li>
                                <li><input class="form-input" type="text" name="txt-apellidos" id="txt-apellidos" value="" required></li>
                                <li><label>Teléfono</label></li>
                                <li><input class="form-input" type="text" name="txt-telefono" id="txt-telefono" value="" required></li>
                                <li><label>Dirección</label></li>
                                <li><input class="form-input" type="text" name="txt-direccion" id="txt-direccion" value="" required></li>
                             </ul>
                        </div>
                        <div class="box-register" >
                        <ul>                           
                            <li><label>Correo</label></li>
                            <li><input class="form-input" type="email" name="txt-correo" id="txt-correo" value="" required></li>
                            <li><label>Contraseña</label></li>
                            <li><input class="form-input" type="password" name="txt-pass" id="txt-pass" value="" required></li>
                            <li><label>Confirmar Contraseña</label></li>
                            <li><input class="form-input" type="password" name="txt-confPass" id="txt-confPass" value="" required></li>
                            <li><label>Recibir Notificaciones</label></li>
                            <li>
                                <input type="radio" name="btn-notificacion" value="1" checked>Si
                                <input type="radio" name="btn-notificacion" value="0" >No
                            </li>
                            <li><input class="form-btn" type="button" value="Registrarse" id="btn-save" onclick="registerUser();"></li>
                            <li><a class="publicar-type" href="<?php echo base_url(); ?>index.php/Publicar/contrucciones" style="display: none">Siguiente</a></li>
                        </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

<?php include_once('./application/views/footer.php') ;?>



