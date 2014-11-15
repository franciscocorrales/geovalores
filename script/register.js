function registerUser(){
    $('input').removeClass('errorClas');
    var name = $('#txt-nombre').val();
    var apellidos = $('#txt-apellidos').val();
    var telefono = $('#txt-telefono').val();
    var direccion = $('#txt-direccion').val();
    var pass = $('#txt-pass').val();
    var confPass = $('#txt-confPass').val();
    var notificacion = $('#btn-notificacion').val();
    var correo =  $('#txt-correo').val();
    var error = false;
    
    if(name == ""){
        error = true;
        $('#txt-nombre').addClass('errorClas');
    }
    
    if(apellidos == ""){
        error = true;
        $('#txt-apellidos').addClass('errorClas');
    }
    
    if(telefono == ""){
        error = true;
        $('#txt-telefono').addClass('errorClas');
    }
    
    if(direccion == ""){
        error = true;
        $('#txt-direccion').addClass('errorClas');
    }
    
    if(correo == ""){
        error = true;
        $('#txt-correo').addClass('errorClas');
    }
    
     if((pass !== confPass) || (pass == "" || confPass == "") ){
        error = true;
        $('#txt-pass').addClass('errorClas');
        $('#txt-confPass').addClass('errorClas');
    }
    
    
    if(error == false){
         $.ajax({
            type:'POST',
            url:'http://geovalores.techusodev.com/index.php/Register/saveUser',
            data:{
                txtName:name,
                txtApellidos:apellidos,
                txtTelefono:telefono,
                txtDireccion:direccion,
                txtPass:pass,
                txtNotificacion:notificacion,
                txtCorreo:correo
            },
            success:function(data){
                console.log(data);
                if(data != null){
                    confirm("Se registro correctamente!!");
                }else{
                   confirm("No se registro correctamente!!");
                }
            },
            error:function(){
                console.log('error1');
            }
        });
    }
    
    
}
