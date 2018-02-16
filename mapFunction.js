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
                    });
                  });
                }



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