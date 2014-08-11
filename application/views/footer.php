
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/components/underscore/underscore-min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/components/jstimezonedetect/jstz.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/calendar.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/apps.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/cal_app.js"></script>
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

</body>

</html>

