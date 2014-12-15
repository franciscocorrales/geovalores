
<?php
$username = array('name' => 'username', 'placeholder' => 'Nombre de usuario');
$password = array('name' => 'password',	'placeholder' => 'Introduce tu password');
$submit = array('name' => 'submit', 'id' => 'loginboton', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión', 'onclick' => "loginUser();");
$form = array('id' => 'loginform');
?>
<?php include ("headeradmin.php") ;?>
<style>
.content-padding {
    margin: 0 auto;
    width: 75%;
}
.bienvenida{
    font-size: 32px;
    line-height: 29px;
    margin-left: 30px;
    position: absolute;
    text-align: center;
    width: 700px;
}
</style>
<div id="siteframe">
	<div id="content">
            <div class="content-padding">
             <?php 
                            if($this->session->userdata('usuario')== TRUE){ ?>
                <h1> ¡Bienvenido a la comunidad Geovalores!</h1>
                <span class="bienvenida">Le invitamos a disfrutar de nuestros servicios en geolocalización de propiedades, navegue en nuestro mapa y 
                      encuentre oportunidades en una forma más ágil y sencilla.
                      Además mapee su anuncio en forma gratuita ahora!!!</span>

             <?php } else {?>
                
                    
                        <div id="login-content">
                            <h1>Inicio de Sesión</h1>
                          <?php echo form_open('/Login/new_user', $form)?>
                            <fieldset id="inputs">
                              <?php echo form_input($username)?><p><?=form_error('username')?>   
                              <?php echo form_password($password)?><p><?=form_error('password')?>
                            </fieldset>
                            <fieldset id="actions">
                              <?php echo  form_submit($submit)?>
					
                              <label></label>
                            </fieldset>
                          <?php echo form_close()?>
                        </div>                     
                      
             <?php } ?>
            </div>			
        </div>
</div>
<style>
    #siteframe {
    background: none repeat scroll 0 0 #f0f0f0;
    min-height: 450px;}
    .content-padding > #login-content {
    margin: 0 auto;
    width: 300px;
    
}
</style>

<?php include ("footer.php") ;?>