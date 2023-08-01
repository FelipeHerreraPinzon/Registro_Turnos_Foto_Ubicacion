function geoFindMe() {
    var output = document.getElementById("out");
  
    if (!navigator.geolocation){
    // output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
     swal("ESTE NAVEGADOR NO SOPORTA LA UBICACIÓN", "HAZ UNA CAPTURA DE PANTALLA DE ESTO Y LA ENVIAS... POR FAVOR", "error");
      return;
    }
  
    function success(position) {
      var longitude = document.getElementById("longitud"); 
      var latitude = document.getElementById("latitud"); 
       latitude.setAttribute("value", position.coords.latitude);
       longitude.setAttribute("value", position.coords.longitude);
       
      
      swal("UBICACIÓN REGISTRADA", "AHORA DEBES INGRESAR TU NOMBRE Y FOTO", "info");
      //output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';
      
      
    };
  
    function error() {
    // output.innerHTML = "Unable to retrieve your location";
     swal("ERROR AL OBTENER LA UBICACIÓN", "DEBES DARNOS LA AUTORIZACIÓN EN EL NAVEGADOR", "error");
    };
  
    //output.innerHTML = "<p>Locating…</p>";
  
    navigator.geolocation.getCurrentPosition(success, error);
  }

  
 