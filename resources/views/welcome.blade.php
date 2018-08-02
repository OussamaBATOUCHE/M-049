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
                <select id="risk_level" class="form-control" name="risk_level" style="font-size:25px;" required>
                  <option value="" disabled selected>Risk Level</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <br>
                <button id="SOS" onclick="sos()">S.O.S</button>
                <button id="SOS" onclick="readSos()">read data</button>
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
                    console.log("-- "+places[0].geometry.location);
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
                  var piligrim = addPiligrim( "ALG-169692345 - - TEST - 2" , "/" , "BATOUCHE-Oussama" , "Male" , "ossama12batouhe@gmail.com" , "ALGERIA" , "Arabic" , "+213553839577" , 67)
                  var lat = marker.getPosition().lat();
                  var lng = marker.getPosition().lng();
                  addSOS( piligrim , lat , lng , document.getElementById('risk_level').options[document.getElementById('risk_level').selectedIndex].value )
                }



                function readSOS(){
                  console.log("_>");
                  var t=0;
                  var dbRefObject = firebase.database().ref('sos/').orderByChild("okOrNot").equalTo(0);
                  dbRefObject.on('value', function(snapshot) {
                  snapshot.forEach(function(childSnapshot) {
                    //var childKey = childSnapshot.key;
                    //var childData = snapshot.val().title;
                  //  console.log("---- "+childSnapshot.val().risq_level);
                    t++;
                  console.log(t);
                    console.log(childSnapshot.val().risq_level);
                    //li.id  = snap.key
                  });
                });
                console.log(t);
                }



              </script>
            </div>
        </div>
    </body>
</html>
