<section class="map" id="map">
		<div class="container">
			<div class="row">		
    <script>
      function initMap() {
        var uluru = {lat: 50.618865, lng: 26.253008};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFrb_jDfQY1P3MvsLJudSnytStGCiWlv0&callback=initMap">
    </script>
			</div>
		</div>
</section>
<footer>
	<div class="footer_container">
		<div class="footer-contacts">
			<p class="contacts__number" align="center">
			+38(098) 577 82 28
			</p>
			<p class="contacts__number" align="center">
			+38(095) 577 82 28
			</p>
			<p class="contacts__number" align="center">
			+38(073) 577 82 28
			</p>
			<p class="contacts__number" align="center">
			zechemodan@gmail.com
			</p>
		</div>
		<div class="footer-kasa">
			<p class="contacts__number" align="center">
			КВИТКОВА КАСА
			</p>
			<p class="contacts__number" align="center">
			м. Рівне, вул. Соборна 13
			</p>
		</div>
		<div class="footer-smm">
			<p class="smm__ico" align="center">
				<a href="https://www.facebook.com/zechemodan/"><img src="/pics/icons/face.png" height="30" width="30"></a>
			</p>
			<p class="smm__ico" align="center">
				<a href="https://vk.com/zechemodan"><img src="/pics/icons/vk.png" height="30" width="30"></a>
			</p>
			<p class="smm__ico" align="center">
				<a href="https://www.instagram.com/zechemodan/"><img src="/pics/icons/insta.png" height="30" width="30"></a>
			</p>
		</div>
	</div>
</footer>