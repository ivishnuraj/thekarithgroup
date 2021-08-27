<div class="container-fluid">
<div id="map" style="min-height:100vh;width:95vw;margin: 0;margin-left:-15px;"></div>
<div id="indinformation"  class="wow fadeIn" data-wow-delay="0.5s">
	<div class="content">
			<div class="karith contact col-md-offset-7 wow fadeIn" data-wow-delay="0.2s">
				<div class="karithinfo ">
					<h4 class="wow fadeInLeft" data-wow-duration="2s"  data-wow-delay="1s"> Karith </h4>
					<h4 class="wow fadeInLeft" data-wow-duration="2s"  data-wow-delay="1.2s"> Design</h4>
					<h4 class="wow fadeInLeft" data-wow-duration="2s"  data-wow-delay="1.4s"> Build </h4>
					<h4 class="wow fadeInLeft" data-wow-duration="2s"  data-wow-delay="1.6s"> Private </h4>
					<h4 class="wow fadeInLeft" data-wow-duration="2s"  data-wow-delay="1.8s"> Limited </h4>
				</div>
			</div>
		<address class="wow fadeIn" data-wow-delay="2.5s">Karingattil Thekethil, Devaswom Lane B-5A, Kesavadasapuram, Pattom P.O., Thiruvananthapuram 695004, Kerala State, India</address>
		<address class="wow fadeIn" data-wow-delay="2.5s">0091 255 3342<br>0091 9946 699991</address>
		<address class="wow fadeIn" data-wow-delay="2.5s">hello@thekarithgroup.com</address>
	</div>
</div>


<script>

      function initMap() {
        var myLatLng = {lat: 8.532386, lng: 76.938662};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng,
          styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}],
        });
	var infowindow = new google.maps.InfoWindow();
	        var service = new google.maps.places.PlacesService(map);

	        service.getDetails({
	          placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
	        }, function(place, status) {
	          if (status === google.maps.places.PlacesServiceStatus.OK) {
	            var marker = new google.maps.Marker({
	              map: map,
	              position: place.geometry.location
	            });
	            google.maps.event.addListener(marker, 'click', function() {
	              infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
	                'Place ID: ' + place.place_id + '<br>' +
	                place.formatted_address + '</div>');
	              infowindow.open(map, this);
	            });
	          }
	        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Karith Design Build'
        });
      }
      
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxY2qZ03Dj9b8GNJLSPLj47cV69Q5mIEE&callback=initMap&libraries=places">
    </script>

</div>