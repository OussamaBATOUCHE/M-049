<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>
        <script type="text/javascript" src="js/connexion.js"></script>
        <script type="text/javascript" src="js/add.js"></script>

        <script type="text/javascript">
            // var piligrim = addPiligrim( "ALG-169696550" , "/" , "BATOUCHE-Oussama" , "Male" , "ossama12batouhe@gmail.com" , "ALGERIA" , "Arabic" , "+213553839577")
            // var hID = addHospital('Jeddah',13,25)
            // var medic_staf_ID = addMedicalStaff("karim","karim@gmail.com", "2351hds#kng" , 0553839577 , "Arabic" , "major_1" ,hID)
            // addSOS( piligrim , 12 , 34 , 5 )

        </script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #map {
               height: 500px;
               width: 500px;
               border: red 1px solid;
             }
             #map-search{
               font-size: 20px;
               padding: 2%;
               margin: 2%;
             }
             #SOS{
               font-size: 56px;
                color: red;
                margin: 1%;
             }
             #SOS:hover{
               font-size: 56px;
                color: white;
                background-color: red;
             }
        </style>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2g5ixHpW2l8FA8H-X6ouaUV4Xk_YneM8&callback=initMap&libraries=places"
          type="text/javascript">
          console.log('hello')
        </script>
    </head>
    <body>

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Settings
                </div>

                <div class="links">

                </div>
                <h2>You are : <p id="user_id"></p> </h2>
                <input id="map-search" type="text" name="" value="" size="50" required>
                <div id="map"></div>
                <select class="form-control" name="risk_level" style="font-size:25px;" required>
                  <option value="">Risk Level</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                  <option value="">5</option>
                </select>
                <br>
                <button id="SOS" onclick="sos()">S.O.S</button>
                <script>
                var map, infoWindow,marker;
                function initMap() {
                  map = new google.maps.Map(document.getElementById('map'));

                  infoWindow = new google.maps.InfoWindow;




                  // Try HTML5 geolocation.
                  if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                      var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                      };
                       marker = new google.maps.Marker({
                        position:pos,
                        map:map,
                        draggable: true
                      })
                      // marker.setPosition(pos);
                      map.setCenter(pos);
                      map.setZoom(15);
                    }, function() {
                      handleLocationError(true, infoWindow, map.getCenter());
                    });
                  } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                  }

                  var searchBox = new google.maps.places.SearchBox(document.getElementById('map-search'))

                  google.maps.event.addListener(searchBox,'places_changed',function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i,p;
                    console.log("hello"+places[0].geometry.location);
                    bounds.extend(places[0].geometry.location);
                    marker.setPosition(places[0].geometry.location);
                    map.fitBounds(bounds);
                    map.setZoom(15);
                  })
                }



                function username(){
                  document.getElementById("user_id").innerHTML = "Salim ABID"
                }
                username();


                function sos(){
                  var piligrim = addPiligrim( "ALG-169696550 - - TEST" , "/" , "BATOUCHE-Oussama" , "Male" , "ossama12batouhe@gmail.com" , "ALGERIA" , "Arabic" , "+213553839577")
                  addSOS( piligrim , 12 , 34 , 5 )
                }


              </script>
            </div>
        </div>
    </body>
</html>
