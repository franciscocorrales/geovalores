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
    
    var dondeestoy = $('#dondeestoy').val();
   
    var error = false;
    
    if(name == ""){
        error = true;
        $('#username').addClass('errorClas');
    }
    
    if(pass == ""){
        error = true;
        $('#password').addClass('errorClas');
    }
    var url;
    var url2;
    if(dondeestoy == 'Inicio'){
        url = 'index.php/Login/new_user';
        url2 = "index.php/Login/adminuser";
    }
    else if (dondeestoy == 'register' || dondeestoy == 'Quienes Somos' )
    {
        url = '../Login/new_user';
        url2 = "../Login/adminuser";
    }
    else if (dondeestoy != 'register' || dondeestoy != 'Inicio')
    {
        url = './Login/new_user';
        url2 = "./Login/adminuser";
    }
    
    
    if(error == false){
        
         $.ajax({
            type:'POST',
            url : url,
            
            data:{
                username:name,
                password:pass
            },
            success:function(data){
                if(data !== null || !emtpy(data)){
                    
                    window.location.href = url2;
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

