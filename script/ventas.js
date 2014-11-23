 $(document).ready(function() {
    
	$('#precio-dolar').change(function(){
	  var precio = 532; 
	  var resultado = $('#precio-dolar').val() * precio;
	  $('#precio-colones').val(resultado);
	});
	
	$('#precio-colones').change(function(){
	  var precio = 532;
	  var resultado = $('#precio-colones').val() / precio;
	  $('#precio-dolar').val(resultado);
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
 
 
 $('.numbersOnly').keyup(function () { 
	    this.value = this.value.replace(/[^0-9\.]/g,'');
	});
 
 });

function SaveInfo()
{
    var data =  $( ".info-venta" ).serializeArray();
    var titulo = $('#titulo').val();
    var precioDolares = $('#precio-dolar').val();
    var precioColones =  $('#precio-colones').val();
    var edadContruccion =  $('#edad-contruccion').val();
    var tamanoFrente = $('#tamano-frente').val();  
    var precioRemate = $('#precio-remate').val(); 
    var tamanoTerreno = $('#tamano-terreno').val();
    var error = false;
    
    if(titulo == ""){
        error = true;
        $('#titulo').addClass('errorClas');
    }
    
    if(precioDolares == ""){
        error = true;
        $('#precio-dolar').addClass('errorClas');
    }
    
    if(tamanoTerreno == ""){
        error = true;
        $('#tamano-terreno').addClass('errorClas');
    }
    
    if(precioRemate == ""){
        error = true;
        $('##precio-remate').addClass('errorClas');
    }
    
    if(precioColones == ""){
        error = true;
        $('#precio-colones').addClass('errorClas');
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
	                    confirm("Se registro correctamente!!");
	                    $(".publicar-type").show();
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