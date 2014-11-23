<?php
$username = array('name' => 'username', 'placeholder' => 'Nombre de usuario');
$password = array('name' => 'password',	'placeholder' => 'Introduce tu password');
$submit = array('name' => 'submit', 'id' => 'loginboton', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
$form = array('id' => 'loginform');
?>
<?php include ("headeradmin.php") ;?>
<div id="siteframe">
	<div id="content">
            <div class="content-padding">
             <?php 
                            if($this->session->userdata('usuario')== TRUE){ ?>
                           
             <?php } else {?>
                
                    
                        <div id="login-content">
                          <?=form_open('/Login/new_user', $form)?>
                            <fieldset id="inputs">
                              <?=form_input($username)?><p><?=form_error('username')?>   
                              <?=form_password($password)?><p><?=form_error('password')?>
                            </fieldset>
                            <fieldset id="actions">
                              <?=form_submit($submit)?>
					
                              <label><input type="checkbox" checked="checked"> Keep me signed in</label>
                            </fieldset>
                          <?=form_close()?>
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
    margin: 85px 360px;
    width: 250px;
}
</style>

<?php include ("footer.php") ;?>