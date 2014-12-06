 $(document).ready(function() {
    
 $('#login-trigger').click(function(){
	
	$('#precio1').change(function() {
		var val = $(this).val();
            
       
        $('#spanvalue').text(val);});
	
        });
         $('#login-trigger').click(function(){
            $(this).next('#login-content').slideToggle();
            $(this).toggleClass('active');          

            if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
              else $(this).find('span').html('&#x25BC;')
            })
       
    
});
function loginUser(){
    $('input').removeClass('errorClas');
    var name = $('#username').val();
   
    var pass = $('#password').val();
   
    var error = false;
    
    if(name == ""){
        error = true;
        $('#username').addClass('errorClas');
    }
    
    if(pass == ""){
        error = true;
        $('#password').addClass('errorClas');
    }
    
    
    
    if(error == false){
        var url = $(location).attr('href');  
         $.ajax({
            type:'POST',
            url: 'index.php/Login/new_user',
            data:{
                username:name,
                password:pass
            },
            success:function(data){
                if(data !== null || !emtpy(data)){
                    alert("Inicio sesion correctamente!!");
                    window.location.href = "index.php/Login/adminuser";
                }else{
                   alert("No Inicio sesion correctamente!!");
                }
            },
            error:function(){
                console.log('error1');
            }
        });
    }
    
    
}

