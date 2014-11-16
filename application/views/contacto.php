<?php include ("header.php") ;?>
<style>
    #siteframe {
    background: none repeat scroll 0 0 #f0f0f0;
    height: 410px;
}

label {
    color: #444;
    font-size: 15px;
    margin-bottom: 20px;
}

</style>
	<!-- content -->
<div id="siteframe">
	<div id="content">
            <div class="content-padding">
            

            <?php  
              $attributes = array('id' => 'form_email');

               if($msg===NULL){

             echo form_open('Contacto', $attributes);

                   $name = array('name'=>'name', 'id'=>'name','placeholder'=>'Nombre','value'=>set_value('name'), 'size'=> '35', 'class' => 'form-input',);
                   $phone = array('name'=>'phone', 'id'=>'phone','placeholder'=>'Teléfono','value'=>set_value('phone'), 'size'=> '35', 'class' => 'form-input',);
                   $address = array('name'=>'address','id'=>'address','placeholder'=>'Ciudad','value'=>set_value('address'), 'size'=> '35', 'class' => 'form-input',);
                   $email = array('name'=>'email', 'id'=>'email','placeholder'=>'Email', 'value'=>set_value('email'), 'size'=> '35', 'class' => 'form-input',);  
                   $message =array('name'=>'message', 'cols'=>'50', 'id'=>'message','placeholder'=>'Mensaje...','value'=>set_value('message'), 'class' => 'form-input',);
             ?> 
                  <div class="column">
                    <div><?php echo form_label('Nombre');?></div>
                    <div><?php echo form_input($name);?></div> 
                    <div><?php echo form_label('Teléfono');?></div>   
                    <div><?php echo form_input($phone);?></div> 
                    <div><?php echo form_label('Ciudad');?></div>  
                    <div><?php echo form_input($address);?></div> 
                    <div><?php echo form_label('Email');?></div> 
                    <div><?php echo form_input($email);?></div>
                  </div>
                  <div class="column">
                    <div><?php echo form_label('Mensaje');?></div>
                    <div><?php echo form_textarea($message)?></div>     
                  </div>
            <div>
                    <?php echo form_submit('submit', 'Enviar', 'class = form-btn' );?>  
            </div> 
            <?php echo form_close();?>  

             <?php }else
                       { echo anchor('Contacto','Enviar otro mensaje').br(2); 
                   }
             ?>
            <?php if(validation_errors()){ ?>
	
                    <div id="error"><?php echo validation_errors();?></div>

            <?php  } // fin del if que evalua los errores del formulario ?>
            </div>
	</div>
</div>
	<!-- end content -->	


<?php include ("footer.php") ;?>
