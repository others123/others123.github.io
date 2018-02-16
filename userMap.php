<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>CBHSMS</title>
        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style5.css">
        <link rel="stylesheet" href="assets/css/myStyle.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                   <!-- 	<input type="text" name="mySearchBox" class="sideSearch"> --> <h3 class="sideHeader"> CBHSMS<button class="w3-button  w3-xlarge" onclick="w3_open()" style="margin: -5px 0 0 -5px;">&#9776;</button></h3>
                    	<hr class="hrDivider">
                    	<div class="myInfo">
                      <span class="myLoc" id="sideLoc">Soldier Hills Subd. III</span>
                      <br>
                    	<span class="myAdd" id="sideAdd">Narra Ave, Barangay 182, Caloocan City North, Philippines</span>
                    	<br>
                    	<br>
                    	<span class="mySickTitle">Dengue</span>
                    	<br>
                    	<span class="myResident">No. of Resident : <span style="font-weight: 600;">3600</span></span>
                    	<br>
                    	<span class="myResident">No. of Case : <span style="font-weight: 600;">200</span></span>
                    	</div>
                    	<hr>
                    	   <div class="sideLegend" style="width: 115%; margin: 20px 0 0 -20px; padding: 0 20px; height: 400px">
                    	   <br>
                    	<br>
                    

                      <img src="assets/images/virus.png" class="w3-circle w3-blue w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                      <span id="sickName">Malaria</span> 
                     <img src="assets/images/virus.png" class="w3-circle w3-teal w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                      <span id="sickName">Dengue</span>
                    <img src="assets/images/virus.png" class="w3-circle w3-dark-gray w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                    <span id="sickName">Tuberculosis</span>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                      <img src="assets/images/virus.png" class="w3-circle w3-blue-gray w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                     <span id="sickName">Asthma</span>
       
                      <img src="assets/images/virus.png" class="w3-circle w3-cyan w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                     <span id="sickName">Influenza</span>

                      <img src="assets/images/virus.png" class="w3-circle w3-light-blue w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                     <span id="sickName">Pneumonia</span>
                  	<br>
                    <br>
                    <br>
                    <br>
                    <br>
                      <img src="assets/images/virus.png" class="w3-circle w3-light-green w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                   <span id="sickName">Rabiess</span>
                    <img src="assets/images/virus.png" class="w3-circle w3-brown w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                   <span id="sickName">Diabetes</span>
                    <img src="assets/images/virus.png" class="w3-circle w3-orange w3-card-4" id="sickLegend" width="5%" style="padding: 20px; ">
                   <span id="sickName">Typhoid</span>
                </div>
                </div>
                <br>
                  <!-- Search by Place ex. brgy 180  -->
                
        <!-- End of Search by Date -->
            </nav>
            <!-- End of Nav -->

            <!-- Sidebar -->
                      <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5; font-family: 'Century Gothic'; letter-spacing: 2px;" id="mySidebar">
                        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">&times;</button>
                        <hr>
                        <a href="#" class="w3-bar-item w3-button"><img src="assets/images/white_marker.png" width="18%"> Home </a>
                        <hr>
                        <br>
                        <a href="#" class="w3-bar-item w3-button"><img src="assets/images/mind_map.png" width="18%"> About Us </a>
                        <hr>
                        <br>
                        <a href="#" class="w3-bar-item w3-button"><img src="assets/images/contacts.png" width="18%"> Sign In</a>
                        <hr>
                        <br>
                        <a href="#" class="w3-bar-item w3-button"><img src="assets/images/white_login.png" width="18%"> Sign Up</a>
                        <hr>
                        <br>

                      </div>
                      <!-- Page Content -->
                      <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
                   <div>
                </div>

      <!-- Google Map  -->
      <div id="map" style="height: 800px; width: 104%; margin: 0 0 0 0"></div>

       <!-- Google API KEY -->
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMksDohgCB5T1nwcDQOTBjXh3U3-6uvDc&libraries=places&callback=initAutocomplete"
       async defer></script>
        <!-- JS Scripts -->
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/myJS.js"></script>
        <script> 
       // Script for Marker based on Database
         var customLabel = {
                restaurant: {
                  label: 'x'
                },
                bar: {
                  label: 'x'
                }
              };
        function initAutocomplete() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 14.7566, lng: 121.0450},
            zoom: 14,
            mapTypeId: 'roadmap'
          });

        
          // Create the search box and link it to the UI element.
          var input = document.getElementById('pac-input');
          var searchBox = new google.maps.places.SearchBox(input);
          map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

          // Bias the SearchBox results towards current map's viewport.
          map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
          });

          var markers = [];
          // Listen for the event fired when the user selects a prediction and retrieve
          // more details for that place.
          searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
              return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
              marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
              if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
              }
              var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
              };

              // Create a marker for each place.
              markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
              }));

              if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
              } else {
                bounds.extend(place.geometry.location);
              }
            });
            map.fitBounds(bounds);
          });


                var infoWindow = new google.maps.InfoWindow;

                  // Change this depending on the name of your PHP or XML file
                  downloadUrl('function.php', function(data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName('marker');
                    Array.prototype.forEach.call(markers, function(markerElem) {
                      var id = markerElem.getAttribute('id');
                      var name = markerElem.getAttribute('name');
                      var address = markerElem.getAttribute('address');
                      var type = markerElem.getAttribute('type');
                      var point = new google.maps.LatLng(
                          parseFloat(markerElem.getAttribute('lat')),
                          parseFloat(markerElem.getAttribute('lng')));

                      var infowincontent = document.createElement('div');
                      var strong = document.createElement('strong');
                      strong.textContent = name
                      infowincontent.appendChild(strong);
                      infowincontent.appendChild(document.createElement('br'));

                      var text = document.createElement('text');
                      text.textContent = address
                      infowincontent.appendChild(text);

                        // For Malaria Marker 
                      // To Customize icons for Malaria
                      var malariaIcon =  {
                        strokeColor: '#2196F3',
                        strokeOpacity: 0.8,
                        fillColor: '#2196F3',
                        fillOpacity: 0.35,
                        path: google.maps.SymbolPath.CIRCLE,
                        scale: 5
                      }
                        // To Customize icons for Dengue 
                       var DengueIcon =  {
                        strokeColor: '#009688',
                        strokeOpacity: 0.8,
                        fillColor: '#009688',
                        fillOpacity: 0.35,
                        path: google.maps.SymbolPath.CIRCLE,
                        scale: 5
                      }

                        // To Customize icons for Stroke
                       var StrokeIcon =  {
                        strokeColor: '#8BC34A',
                        strokeOpacity: 0.8,
                        fillColor: '#8BC34A',
                        fillOpacity: 0.35,
                        path: google.maps.SymbolPath.CIRCLE,
                        scale: 5
                      }

                      // Marker for Malaria 
                      DiseasesMarker({
                        coords:{lat: 14.768680, lng: 121.076950},
                        // For Icon Image
                        iconImage: malariaIcon,
                        content: '<strong> Malaria </strong> <br> <small> # of cases : 100</small>'
                    });
                      DiseasesMarker({
                        coords:{lat: 14.777100, lng: 121.044108},
                        iconImage: malariaIcon,
                        content : '<strong> Malaria </strong> <br> <small> # of cases : 188</small>'
                      });

                       DiseasesMarker({
                        coords:{lat: 14.772591, lng: 121.069299},
                        iconImage: malariaIcon,
                        content : '<strong> Malaria </strong> <br> <small> # of cases : 288</small>'
                      });

                        DiseasesMarker({
                        coords:{lat: 14.771920, lng: 121.055928},
                        iconImage: malariaIcon,
                        content : '<strong> Malaria </strong> <br> <small> # of cases : 88</small>'
                      });

                        DiseasesMarker({
                        coords:{lat: 14.749040, lng: 121.052577},
                        iconImage: malariaIcon,
                        content : '<strong> Malaria </strong> <br> <small> # of cases : 100</small>'
                      });
                        //--------------------------------------------------------- End of Marker for Malaria ---------------------------

                        // Marker for Dengue 
                      DiseasesMarker({
                        coords:{lat: 14.768680, lng: 121.078950},
                        // For Icon Image
                        iconImage: DengueIcon,
                        content: '<strong> Dengue </strong> <br> <small> # of cases : 200</small>'
                    });
                      DiseasesMarker({
                        coords:{lat: 14.777100, lng: 121.042108},
                        iconImage: DengueIcon,
                        content : '<strong> Dengue </strong> <br> <small> # of cases : 188</small>'
                      });

                       DiseasesMarker({
                        coords:{lat: 14.772591, lng: 121.069999},
                        iconImage: DengueIcon,
                        content : '<strong> Dengue </strong> <br> <small> # of cases : 288</small>'
                      });

                        DiseasesMarker({
                        coords:{lat: 14.771920, lng: 121.057618},
                        iconImage: DengueIcon,
                        content : '<strong> Dengue </strong> <br> <small> # of cases : 1008</small>'
                      });

                        DiseasesMarker({
                        coords:{lat: 14.749040, lng: 121.050299},
                        iconImage: DengueIcon,
                        content : '<strong> Dengue </strong> <br> <small> # of cases : 1008</small>'
                      });
                       //--------------------------------------------------------- End of Marker for Dengue  ---------------------------

                           // Marker for Stroke
                         DiseasesMarker({
                           coords:{lat: 14.756010, lng: 121.044167},
                           // For Icon Image
                           iconImage: StrokeIcon,
                           content: '<strong> Stroke </strong> <br> <small> # of cases : 88</small>'
                       });
                         DiseasesMarker({
                           coords:{lat:14.752460, lng: 121.017963},
                           iconImage: StrokeIcon,
                           content : '<strong> Stroke </strong> <br> <small> # of cases : 71</small>'
                         });

                          DiseasesMarker({
                           coords:{lat: 14.772591, lng: 121.0670001},
                           iconImage: StrokeIcon,
                           content : '<strong> Stroke </strong> <br> <small> # of cases : 45</small>'
                         });

                           DiseasesMarker({
                           coords:{lat: 14.771920, lng: 121.057618},
                           iconImage: StrokeIcon,
                           content : '<strong> Stroke </strong> <br> <small> # of cases : 55</small>'
                         });

                           DiseasesMarker({
                           coords:{lat: 14.749040, lng: 121.050299},
                           iconImage: StrokeIcon,
                           content : '<strong> Stroke </strong> <br> <small> # of cases : 191</small>'
                         });
                          //--------------------------------------------------------- End of Marker for Dengue  ---------------------------

                      // Function for Diseases 
                      function DiseasesMarker(props) {
                        var mymarker = new google.maps.Marker({
                          position: props.coords,
                          map: map,
                          // icon: props.iconImage
                        }); 
                        // Check for Custom icon
                        if (props.iconImage) {
                          // Set icon image
                          mymarker.setIcon(props.iconImage);
                        }
                        // Check Content 
                      if (props.content) {
                     var DiseasesInfoWindow = new google.maps.InfoWindow({
                      content: props.content
                      });

                       mymarker.addListener('click', function() {
                        DiseasesInfoWindow.open(map, mymarker);
                      });
                        }
                      }
                      
                      var icon = customLabel[type] || {};
                      var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        label: icon.label
                      });
                      marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                        document.getElementById('sideLoc').innerHTML = name;
                        document.getElementById('sideAdd').innerHTML = address;
                      });



              function downloadUrl(url, callback) {
                var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;

                request.onreadystatechange = function() {
                  if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                  }
                };

                request.open('GET', url, true);
                request.send(null);
              }

              function doNothing() {}


              function w3_open() {
                    document.getElementById("mySidebar").style.display = "block";
                    document.getElementById("myOverlay").style.display = "block";
                }
                function w3_close() {
                    document.getElementById("mySidebar").style.display = "none";
                    document.getElementById("myOverlay").style.display = "none";
                }
        </script> 
    
    
    </body>
</html>
