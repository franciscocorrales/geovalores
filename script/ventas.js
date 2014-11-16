

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