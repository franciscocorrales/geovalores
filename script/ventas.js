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
});

function SaveInfo()
{
    var data =  $( ".info-venta" ).serializeArray();
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