function registerUser(){
    $('input').removeClass('errorClas');
    var name = $('#txt-nombre').val();
    var apellidos = $('#txt-apellidos').val();
    var telefono = $('#txt-telefono').val();
    var direccion = $('#txt-direccion').val();
    var pass = $('#txt-pass').val();
    var confPass = $('#txt-confPass').val();
    var notificacion =  $('input:radio[name=btn-notificacion]:checked').val();
    var correo =  $('#txt-correo').val();
    var marcado = $('#leido').is(':checked');
    var error = false;
    
    if (marcado == false){
        alert('Debe aceptar la politica de privacidad');
        return false;
    }
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
        var url = $(location).attr('href');  
         $.ajax({
            type:'POST',
            url: '../Register/saveUser',
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
                if(data !== null){
                    alert("Se registro correctamente!!");
                    window.location.href = "index.php/Login/adminuser";
                }else{
                   alert("No se registro correctamente!!");
                }
            },
            error:function(){
                console.log('error1');
            }
        });
    }
    
    
}
