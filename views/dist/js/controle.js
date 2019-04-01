
function controlFirstName(champ){

    if(champ.value == ""){
        
        document.getElementById("fisrtNameAlert").innerHTML = "entrez un nom";
        champ.style.border = "1px solid red";
        return false;

    }else{
        document.getElementById("fisrtNameAlert").innerHTML = "";
        champ.style.border = "";
        return true;

    }

}


function controlLastName(champ){
    if(champ.value == ""){
        
        document.getElementById("lastNameAlert").innerHTML = "entrez un prenom";
        champ.style.border = "1px solid red";
        return false;
    }else{
        document.getElementById("lastNameAlert").innerHTML = "";
        champ.style.border = "";
        return true;
    }
}

function controleCodePostale(champ){

    var regex =  /^[0-9]*$/;
    if(champ.value == "" || !regex.test(champ.value)){
        document.getElementById("codePostaleAlert").innerHTML = "entrez un code postale";
        champ.style.border = "1px solid red";
        return false;
    }else{
        document.getElementById("codePostaleAlert").innerHTML = "";
        champ.style.border = "";
        return true;

    }
}

function controleTelephone(champ){
    var regex =  /^[0-9]*$/;
        if(champ.value == ""){
            document.getElementById("phoneAlert").innerHTML = "entrez le numero de telephone";
            champ.style.border = "1px solid red";
        }
        else if(!regex.test(champ.value)){
            
            document.getElementById("phoneAlert").innerHTML = "entrez un numero de telephone valide";
            champ.style.border = "1px solid red";
            return false;
        }else{
            document.getElementById("phoneAlert").innerHTML = "";
            champ.style.border = "";
            return true;
        }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
    document.getElementById("emailAlert").innerHTML = "entrez une adresse email valide";        
    champ.style.border = "1px solid red";
      return false;
   }
   else
   {
    document.getElementById("emailAlert").innerHTML = "";        
    champ.style.border = "";
      return true;
   }
}





function submit(){
    var nom = controlFirstName(document.getElementById("firstName"));
    var prenom = controlLastName(document.getElementById("lastName"));
    var code = controleCodePostale(document.getElementById("postalCode"));
    var telephone = controleTelephone(document.getElementById("phoneNumber"));
    var email = verifMail(document.getElementById("emailAddress"));
    if(nom && prenom  && code && telephone && email){
        
        alert("Next");
    }

}


var oneMarker =false;

function initMap(){
    // Map options
    var options = {
      zoom:16,
      center:{lat:36.837344,lng: 10.165881}
    }

    // New map
    var map = new google.maps.Map(document.getElementById('map'), options);

    var myLatlng = new google.maps.LatLng(36.837344, 10.165881);


    
    var marker = new google.maps.Marker({


        position: myLatlng,

        map: map,

        title: "Animalia",
        
    animation: google.maps.Animation.DROP,
      icon :'http://maps.google.com/mapfiles/kml/pal3/icon18.png'

    });


    google.maps.event.addListener(map, 'click', function(event){
        // Add marker
          if(!(oneMarker)){
        addMarker({coords:event.latLng});
        
        console.log(event.latLng.lat());

        console.log(event.latLng.lng());
        
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
        geocodeLatLng(geocoder, infowindow,event.latLng.lat(),event.latLng.lng());
          }
      });



      



      function addMarker(props){
        var marker = new google.maps.Marker({
            draggable: true,
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
          
        }
        oneMarker=true;

        
   
      google.maps.event.addListener(marker, 'dragend', function (event) {

        console.log(event.latLng.lat());

        console.log(event.latLng.lng());
        
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
        geocodeLatLng(geocoder, infowindow,event.latLng.lat(),event.latLng.lng());
        

        
      });

      
    }
    function geocodeLatLng(geocoder, infowindow,latt,lngg) {
        var latlng = {lat: latt, lng:lngg};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
                document.getElementById("Address").value= results[0].formatted_address;
              console.log(results[0].formatted_address);
              infowindow.setContent(results[0].formatted_address);
              
    function callback(response, status) {
        if (status == 'OK') {
              var origins = response.originAddresses;
              var destinations = response.destinationAddresses;

          for (var i = 0; i < origins.length; i++) {
            var results = response.rows[i].elements;
            for (var j = 0; j < results.length; j++) {
              var element = results[j];
              var distance = element.distance.text;
              var duration = element.duration.text;
              var from = origins[i];
              var to = destinations[j];
              var prix = element.distance.value *0.002 ;
              document.getElementById("prixLivraison").innerHTML = "prix de livraison : " + Math.round(prix)+" DT";
          }
        }
        }
    }
        var service = new google.maps.DistanceMatrixService();

        var from = new google.maps.LatLng(36.837344, 10.165881);
        var dest = new google.maps.LatLng(latt, lngg);
        service.getDistanceMatrix(
            {
                origins: [from],
                destinations: [dest],
                travelMode: 'DRIVING'
            }, callback);

            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }





    }

    