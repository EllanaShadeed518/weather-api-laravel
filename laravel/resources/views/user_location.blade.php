<!DOCTYPE html>
<html>
<head>



<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <body>

        <p id="demo"></p>
        <h1 class="mb-1 sfw-normal">Click Button Here To Get Your Location</h1>
        <button class="btn btn-primary " onclick="getLocation()">Try It</button>
        <script>
            var x = document.getElementById("demo");
        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successFunction);
          } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
          }
        }

        function successFunction(position) {
          var lat = position.coords.latitude;
          var long = position.coords.longitude;
          var latlong = {"lat" : lat , "long" : long};
          var latlong_encoded = JSON.stringify(latlong);
          x.innerHTML = "Latitude: " + position.coords.latitude +
          "<br>Longitude: " + position.coords.longitude;
          $.ajax({
           url: 'http://localhost:8000/wethar_info',
           type: 'get',
           data: {
             lat: lat,
         long: long},
         cache: false,


         });

        };

        </script></body>
