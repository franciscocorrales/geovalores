<?php include_once('./application/views/header.php') ;?>
<script src=<?php echo base_url().'script/register.js'?> ></script>
<div id="siteframe">
	<div id="content">
            <div class="content-padding">
                <form id="form-register">
                    <ul>
                        <li><label>Nombre</label></li>
                        <li><input type="text" name="txt-nombre" id="txt-nombre" value="" required></li>
                        <li><label>Apellidos</label></li>
                        <li><input type="text" name="txt-apellidos" id="txt-apellidos" value="" required></li>
                        <li><label>Teléfono</label></li>
                        <li><input type="text" name="txt-telefono" id="txt-telefono" value="" required></li>
                        <li><label>Dirección</label></li>
                        <li><input type="text" name="txt-direccion" id="txt-direccion" value="" required></li>
                        <li><label>Correo</label></li>
                        <li><input type="email" name="txt-correo" id="txt-correo" value="" required></li>
                        <li><label>Contraseña</label></li>
                        <li><input type="password" name="txt-pass" id="txt-pass" value="" required></li>
                        <li><label>Confirmar Contraseña</label></li>
                        <li><input type="password" name="txt-confPass" id="txt-confPass" value="" required></li>
                        <li><label>Recivir Notificaciones</label></li>
                        <li><input name="btn-notificacion" id="btn-notificacion" value="" ></li>
                        <li><input type="button" value="Registrarse" id="btn-save" onclick="registerUser();"</li>
                    </ul>
                </form>
            </div>
        </div>
</div>

<?php include_once('./application/views/footer.php') ;?>



