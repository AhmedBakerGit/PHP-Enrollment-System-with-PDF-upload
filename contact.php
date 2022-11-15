 <!-- Map Column -->
            <div class="col-md-8">
 School Location
                <!-- Embedded Google Map -->
                <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d832.6664395203994!2d122.06485959202733!3d6.9083639583864205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3250418b171c00db%3A0xc02da8c5df5b3174!2sPilar%20College%20of%20Zamboanga%20City%2C%20Inc."></iframe> -->
           <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
           <div style="overflow:hidden;height:400px;width:100%;"><div id="gmap_canvas" style="height:100%;width:400px;">
           <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">embed google map</a>
           </div>
           <script type="text/javascript">
            function init_map(){var myOptions = {zoom:19,center:new google.maps.LatLng(6.9083832,122.0643079),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.9083832,122.0643079)});infowindow = new google.maps.InfoWindow({content:"<b>Pilar College Zamboanga City, Inc.</b><br/>R. T. Lim Boulevard, Zamboanga City" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    Pilar College Zamboanga City 
                <br>R. T. Lim Boulevard, Zamboanga City Philippines<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>: (062) 991-5410</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="mailto:name@example.com">communications@pczc.edu.ph</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 8:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

 