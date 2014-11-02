$(document).ready(function() {

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
            var address   = '<p>'+ $(this).attr('address') +'</p>';
            var type    = $(this).attr('type');
            var point   = new google.maps.LatLng(parseFloat($(this).attr('lat')),parseFloat($(this).attr('lng')));
            create_marker(point, name, address, false, false, false, "icons/"+ type +".png");
        });
      }); 
      
      
                    
  }
  function create_marker(MapPos, MapTitle, MapDesc,  InfoOpenDefault, DragAble, Removable, iconPath)
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
    
    //Content structure of info Window for the Markers
    var contentString = $('<div class="marker-info-win">'+
    '<div class="marker-inner-win"><span class="info-content">'+
    '<h1 class="marker-heading">'+MapTitle+'</h1>'+
    MapDesc+ 
    '</span>'+
    '</div></div>');  

    
    //Create an infoWindow
    var infowindow = new google.maps.InfoWindow();
    //set the content of infoWindow
    infowindow.setContent(contentString[0]);

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
    
    //add click listner to save marker button    
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker); // click on marker opens info window 
      });
      
    if(InfoOpenDefault) //whether info window should be open by default
    {
      infowindow.open(map,marker);
    }
  }

});