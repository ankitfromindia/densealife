<?php
echo $content;
?>

    <!-- Maps Management -->
<?php if (0 && $event->show_map): ?>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&language=<?php echo $this->current_user->lang; ?>'></script>
        <script type='text/javascript'>
            $(document).ready(function()
            {
                function centerMap(lat, lng)
                {
                    var latlng = new google.maps.LatLng(lat, lng);
                    var map = new google.maps.Map(canvas.get(0),
                            {
                                zoom: 14,
                                center: latlng,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                mapTypeControl: true,
                                mapTypeControlOptions:
                                        {
                                            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                                        },
                                navigationControl: true,
                                navigationControlOptions:
                                        {
                                            style: google.maps.NavigationControlStyle.SMALL
                                        },
                                streetViewControl: true
                            });

                    var marker = new google.maps.Marker(
                            {
                                map: map,
                                position: latlng
                            });
                }

                function geocodePlace(place)
                {
                    geocoder.geocode(
                            {
                                address: place
                            }, function(results, status)
                    {
                        if (status == google.maps.GeocoderStatus.OK)
                        {
                            latlng = results[0].geometry.location;
                            centerMap(latlng.lat(), latlng.lng());
                        }
                    });
                }

                function refreshMap()
                {
    <?php if ( isset($event->pos_lat) && isset($event->pos_lng) ): ?>
                        // Automatic mode
                        var lat = "<?php echo $event->pos_lat; ?>";
                        var lng = "<?php echo $event->pos_lng; ?>";
                        centerMap(lat, lng);
    <?php else : ?>
                        // Latitude/Longitude mode
                        var place = "<?php echo $event->place; ?>";
                        geocodePlace(place);
    <?php endif; ?>
                }

                var canvas = $('div#map_canvas');
                canvas.css('width', '{{ settings:events_map_width }}');
                canvas.css('height', '{{ settings:events_map_height }}');
                var geocoder = new google.maps.Geocoder();
                refreshMap();
            });
        </script>
    <?php endif; ?>
