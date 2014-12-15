 $(document).ready(function() {
 $('#precio-dolar').hide();
  $('.info-venta').submit(function(e) {
		e.preventDefault();
                 var $fileUpload = $("input[type='file']");
                 if (parseInt($fileUpload.get(0).files.length)== 0){
                     alert("Tiene que subir por menos una imagen");
                     return false;
                 }
                if (parseInt($fileUpload.get(0).files.length)>5){
                 alert("Sólo se puede cargar un máximo de 5 archivos");
                 return false;
                }
                
		$.ajaxFileUpload({
			url 			:'../Publicar/guardarimagenes', 
			secureuri		:false,
			fileElementId	:'userfile',
			dataType		: 'json',
			data			: {
				'title'				: $('#title').val()
			},
			success	: function (msj, status)
			{
				SaveInfo();
			}
		});
		return false;
	});
     
 $("input[name=cochera]:radio").change(function(){
	 var value = $(this).val();
	 if(value == 'con-cochera')
	 {
		 $('.cant-carros').show();
	 }
	 else
	 {
		 $('.cant-carros').hide();
	 }
	});
 $("#moneda").change(function(){
	 var value = $(this).val();
	 if(value == 'colones')
	 {
		 $('#precio-colones').show();
	 
		 $('#precio-dolar').hide();
	 }
         if(value == 'dolares')
	 {
		 $('#precio-dolar').show();
	 
		 $('#precio-colones').hide();
	 }
	});
 
 $('.numbersOnly').keyup(function () { 
	    this.value = this.value.replace(/[^0-9\.]/g,'');
	});
 
 });

     
 
function SaveInfo()
{
    var data =  $( ".info-venta" ).serializeArray();
    
    var titulo = $('#titulo').val();
   
    var edadContruccion =  $('#edad-contruccion').val();
    var tamanoFrente = $('#tamano-frente').val();  
    var precioRemate = $('#precio-remate').val(); 
    var tamanoTerreno = $('#tamano-terreno').val();
    var error = false;
    
    if(titulo == ""){
        error = true;
        $('#titulo').addClass('errorClas');
    }
    
   
    
    if(tamanoTerreno == ""){
        error = true;
        $('#tamano-terreno').addClass('errorClas');
    }
    
    if(precioRemate == ""){
        error = true;
        $('##precio-remate').addClass('errorClas');
    }
    
   
    
    if(edadContruccion == ""){
        error = true;
        $('#edad-contruccion').addClass('errorClas');
    }
    
    if(tamanoFrente == ""){
        error = true;
        $('#tamano-frente').addClass('errorClas');
    }

    if( error !== true){
	 $.ajax({
	            type:'POST',
	            url: '../Publicar/saveInfo',
	            data:{
	                data:data
	            },
	            success:function(data){
	                if(data !== null){
	                    alert("Se registro correctamente!!");
	                    window.location.href = "../Publicadas/editar/"+data;
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






function SaveInfoEditada()
{
    var data =  $( ".info-venta" ).serializeArray();
    var idPublicacion = $('#idPublicacion').val();
    var titulo = $('#titulo').val();
   
    var edadContruccion =  $('#edad-contruccion').val();
    var tamanoFrente = $('#tamano-frente').val();  
    var precioRemate = $('#precio-remate').val(); 
    var tamanoTerreno = $('#tamano-terreno').val();
    var error = false;
    
    if(titulo == ""){
        error = true;
        $('#titulo').addClass('errorClas');
    }
    
   
    
    if(tamanoTerreno == ""){
        error = true;
        $('#tamano-terreno').addClass('errorClas');
    }
    
    if(precioRemate == ""){
        error = true;
        $('##precio-remate').addClass('errorClas');
    }
    
    
    
    if(edadContruccion == ""){
        error = true;
        $('#edad-contruccion').addClass('errorClas');
    }
    
    if(tamanoFrente == ""){
        error = true;
        $('#tamano-frente').addClass('errorClas');
    }

    if( error !== true){
	    $.ajax({
	            type:'POST',
	            url: '../../Publicadas/saveInfoEditada',
	            data:{
	            	idPublicacion:idPublicacion,
	                data:data
	            },
	            success:function(data){
	                if(data !== null){
	                    alert("Se Actualizo correctamente!!");
	                    $(".publicar-type").show();
	                }else{
	                   alert("No se Actualizo correctamente!!");
	                }
	            },
	            error:function(){
	                console.log('error1');
	            }
	        });
    }
}