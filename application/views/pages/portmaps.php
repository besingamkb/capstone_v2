

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?php echo base_url() ?>assets/images/customs2.jpg" class="img-responsive" style="width: 100%">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div style="margin-top: 20px;"></div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="archives-customs">
                        <h1>Port Maps</h1>
                        <hr>
                        <style>
                          #map_wrapper {
                                height: 400px;
                            }

                            #map_canvas {
                                width: 100%;
                                height: 150%;padding-bottom: 10px;
                            }
                        </style>
                    </div>
                    <div id="map_wrapper">
                        <div id="map_canvas" class="mapping"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <p class="lead"><strong>Office Hours</strong></p>
                            <p>Monday - Friday <span>8:00 am - 5:00 pm</span></p>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-facebook fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">20,586</div>
                                    <div>Like!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Like us on Facebook</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-twitter fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">15,005</div>
                                    <div>Followers!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Follow us on Twitter</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->


    </div>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script>    
 jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
       // styles: [{"featureType":"water","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"color":"#f2f2f2"}]},{"featureType":"road","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]}]
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        ["Port of Appari",18.36234, 121.62891],["Port of Davao",7.12278, 125.66221],["Port of Zamboanga",6.90253, 122.07694],["Port of San Fernando (La Union)",16.62454, 120.28295],["Port of Clark International Airport",15.17398, 120.54841],["Port of Subic",14.82595, 120.27273],["Port of Limay (Bataan)",14.51396, 120.61128],["Manila International Container Port",14.60527, 120.95279],["Port of Batangas",13.76043, 121.04419],["Port of Legazpi",13.14639, 123.75458],["Port of Iloilo",10.69864, 122.57597],["Port of Cebu",10.30788, 123.92094],["Port of Surigao",9.78172, 125.50029],["Port of Cagayan de Oro",8.49700, 124.66050],
    ];
                        
    // Info Window Content
    var infoWindowContent = [

['Port of Appari'],['Port of Davao'],['Port of Zamboanga'],['Port of San Fernando (La Union)'],['Port of Clark International Airport'],['Port of Subic'],['Port of Limay (Bataan)'],['Manila International Container Port'],['Port of Batangas'],['Port of Legazpi'],['Port of Iloilo'],['Port of Cebu'],['Port of Surigao'],['Port of Cagayan de Oro']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(5);
        google.maps.event.removeListener(boundsListener);
    });
    
}
    </script>