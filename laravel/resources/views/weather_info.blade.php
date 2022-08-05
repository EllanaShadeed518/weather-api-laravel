<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>


<section class="vh-100">
    <div class="container py-5 h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4">





          <div class="card shadow-0 border">
            <div class="card-body p-4">

              <h4 class="mb-1 sfw-normal">CITY_NAME:{{$cuurent_weather['name']}}</h4>
              <p class="mb-2">MIN_TEMP: <strong>MIX_TEMP:{{$cuurent_weather['main']['temp_min']}}</strong></p>
              <p class="mb-2">MAX_TEMP: <strong>MAX_TEMP:{{$cuurent_weather['main']['temp_max']}}</strong></p>


              <div class=" ">
                <p class="mb-0 me-4">PRESSURE:{{$cuurent_weather['main']['pressure']}}</p>
                <p class="mb-0 me-4">HUMIDITY:{{$cuurent_weather['main']['humidity']}}</p>


            </div>

            <div class="d-flex flex-row align-items-center">
                <p class="mb-0 me-4">{{$cuurent_weather['weather'][0]['main']}}</p>
                <img class="fa-3x" src="http://openweathermap.org/img/wn/{{$cuurent_weather['weather'][0]['icon']}}@2x.png" >
              </div>
          </div>

        </div>
      </div>

    </div>
  </section>



</body>
</html>
