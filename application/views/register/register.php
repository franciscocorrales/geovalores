<?php include_once('./application/views/header_1.php') ;?>
<script src=<?php echo base_url().'script/register.js'?> ></script>
<div id="siteframe">
	<div id="content">
            <div class="content-padding">
                <form id="form-register">
                    <div class="content-Register">
                        <div class="box-register">
                            <ul>
                                <li><label>Nombre</label></li>
                                <li><input type="text" name="txt-nombre" id="txt-nombre" value="" required></li>
                                <li><label>Apellidos</label></li>
                                <li><input type="text" name="txt-apellidos" id="txt-apellidos" value="" required></li>
                                <li><label>Teléfono</label></li>
                                <li><input type="text" name="txt-telefono" id="txt-telefono" value="" required></li>
                                <li><label>Dirección</label></li>
                                <li><input type="text" name="txt-direccion" id="txt-direccion" value="" required></li>
                             </ul>
                        </div>
                        <div class="box-register" >
                        <ul>                           
                            <li><label>Correo</label></li>
                            <li><input type="email" name="txt-correo" id="txt-correo" value="" required></li>
                            <li><label>Contraseña</label></li>
                            <li><input type="password" name="txt-pass" id="txt-pass" value="" required></li>
                            <li><label>Confirmar Contraseña</label></li>
                            <li><input type="password" name="txt-confPass" id="txt-confPass" value="" required></li>
                            <li><label>Recivir Notificaciones</label></li>
                            <li>
                                <input type="radio" name="btn-notificacion" value="1" checked>Si
                                <input type="radio" name="btn-notificacion" value="0" >No
                            </li>
                            <li><input type="button" value="Registrarse" id="btn-save" onclick="registerUser();"</li>
                        </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

<?php include_once('./application/views/footer.php') ;?>



