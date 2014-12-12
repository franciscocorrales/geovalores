
$(document).ready(function() {
    $('#cmenu').hide();
   $("#mostrar").click(function(){
            $('#cmenu').show(3000);
            $('#cmenu').show("slow");
            $('.form-search.content-description').css("margin-bottom","25px", 'slow');
     });
    $("#ocultar").click(function(){
            $('#cmenu').hide(3000);
            $('#cmenu').hide("fast");
            $('.form-search.content-description').css("margin-bottom","20px", 'slow');
            
    
     });
$("#send").click(function()
    { 
      var markers = [];
    var googleMapOptions = 
      { 
        center: mapCenter, // map center
        zoom: 8, //zoom level, 0 = earth view to higher value
        maxZoom: 18,
        minZoom: 4,
        zoomControlOptions: {
        style: google.maps.ZoomControlStyle.SMALL //zoom control size
      },
        scaleControl: true, // enable scale control
        mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
      };
    
        map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);     
       function setAllMap(map) {
          for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
          }
        }
        function clearOverlays() {
          setAllMap(null);
        }
     clearOverlays();
        markers = [];
    var poblacion = $("#address").val();
    
    
   
       $.ajax({
        type: "post",
        url: "index.php/Inicio/busqueda",
        cache: false,               
        data: $('#formbuscar').serialize(),
        success: function(data1){                        
        try{        
            $(data1).find("marker").each(function () {
            var name    = $(this).attr('name');
            var address   = '<p>'+ $(this).attr('address') +'</p>';
            var type    = $(this).attr('type');
            var photo    = $(this).attr('photo');
            var point   = new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
            create_marker(point, name, address, false, false, false, "icons/"+ type +".png", photo);
        });


        }catch(e) {     
            alert('Exception while request..');
        }       
        },
        error: function(){                      
            alert('Error while request..');
        }
        });
    
  });

  var mapCenter = new google.maps.LatLng(9.633931465220899, -84.25418434999995); //Google map Coordinates
  var map;
  
  map_initialize(); // initialize google map
  
  //############### Google Map Initialize ##############
  function map_initialize()
  {
      var googleMapOptions = 
      { 
        center: mapCenter, // map center
        zoom: 8, //zoom level, 0 = earth view to higher value
        maxZoom: 18,
        minZoom: 4,
        zoomControlOptions: {
        style: google.maps.ZoomControlStyle.SMALL //zoom control size
      },
        scaleControl: true, // enable scale control
        mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
      };
    
        map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);     
       
      //Load Markers from the XML File, Check (map_process.php)
      $.get("index.php/Inicio/mapa", function (data) {
        $(data).find("marker").each(function () {
            var name    = $(this).attr('name');
            var address   = $(this).attr('address');
            var type    = $(this).attr('type');
            var photo    = $(this).attr('photo');
            var point   = new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
            create_marker(point, name, address, false, false, false, "icons/"+ type +".png", photo);
        });
      }); 
      
      
                    
  }


  function create_marker(MapPos, MapTitle, MapDesc,  InfoOpenDefault, DragAble, Removable, iconPath, imagen)
  {             
    
    //new marker
    var marker = new google.maps.Marker({
      position: MapPos,
      map: map,
      draggable:DragAble,
      animation: google.maps.Animation.DROP,
      title:MapTitle,
      icon: iconPath
    });
    var texto= MapDesc.slice(0,180);
    
    //Content structure of info Window for the Markers
    var contentString = $('<div class="marker-info-win">'+
    '<div class="marker-inner-win">'+
    '<h1 class="marker-heading">'+MapTitle+'</h1><span class="info-content"><p>'+
    texto+ 
    '</p><img src="files/'+imagen+'" alt=""><div class="read-more"><a href=""><span>leer Más</span></a></div></span>'+
    '</div></div>');  

    
    //Create an infoWindow
    var infowindow = new google.maps.InfoWindow();
    //set the content of infoWindow
    infowindow.setContent(contentString[0]);
    infowindow.close();

    //Find remove button in infoWindow
    
    
    if(typeof saveBtn !== 'undefined') //continue only when save button is present
    {
      //add click listner to save marker button
      google.maps.event.addDomListener(saveBtn, "click", function(event) {
        var mReplace = contentString.find('span.info-content'); //html to be replaced after success
        var mName = contentString.find('input.save-name')[0].value; //name input field value
        var mDesc  = contentString.find('textarea.save-desc')[0].value; //description input field value
        var mType = contentString.find('select.save-type')[0].value; //type of marker
        
        if(mName =='' || mDesc =='')
        {
          alert("Please enter Name and Description!");
        }else{
          save_marker(marker, mName, mDesc, mType, mReplace); //call save marker function
        }
      });
    }
    
    var openedInfoWindow = null;
    //add click listner to save marker button    
    google.maps.event.addListener(marker, 'click', function() {
	if (openedInfoWindow != null)
		openedInfoWindow.close();
	infowindow.open(map,marker);
	openedInfoWindow = infowindow;
	google.maps.event.addListener(infowindow, 'closeclick', function() {
		openedInfoWindow = null;
	 });
	google.maps.event.addListener(map, 'click', function() {
		infowindow.close();
	}) ;
});
      
    if(InfoOpenDefault) //whether info window should be open by default
    {
      infowindow.open(map,marker);
    }
  }

});