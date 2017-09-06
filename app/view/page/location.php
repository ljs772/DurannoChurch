<section class="subbody">
	<div class="container">
        <div class="row">
            <div class="service-title col-md-12 text-center">
       	         <h1>오시는 길</h1>
            </div>
        </div>
    </div>
	<br/>
	<div class="container">
		<div class="content">
			<div class="col-md-12 m-padding20">
				<div class="text-center">
					<div  class="location col-md-12 ">
						<img src="/images/page/location.jpg"/>
					</div>					
					<div  class="location col-md-12 ">
						<img src="/images/page/location_1.jpg"/><img src="/images/page/location_2.jpg"/>
					</div>
					<div  class="location col-md-12 ">
						<img src="/images/page/location_3.jpg"/><img src="/images/page/location_4.jpg"/>
					</div>
				</div>
			</div>
			<div class="text-left m-padding20" >
				<span  class="col-md-2 m-box1-left m-padding10">입구</span>	<span class="col-md-10 m-box1-left m-padding10">큰길(Finch Ave W)쪽 정문으로 들어와주세요. 주차장쪽 뒷문은 출입구가 아닙니다.</span>			
				<span  class="col-md-2 m-box1-left m-padding10">대중교통</span>	<span class="col-md-10 m-box1-left m-padding10">15번 타고오시요</span>			
				<span class="col-md-2 m-box1-left m-padding10">자가</span> <span class="col-md-10 m-box1-left m-padding10">89 Finch Ave W로 오시면 코너스톤 북스토어(Finch선상 South방향 쪽에 있음)</span>
				<span class="col-md-2 m-box1-left m-padding10">주차안내</span> <span class="col-md-10 m-box1-left m-padding10"> 건물 뒤편에 주차장이 마련되어 있습니다. 
자리가 없는 경우, 주말에는 건물뒤편 Talbot Rd선상에 무료 Street파킹이 가능합니다
(단, 소방밸브주의). 그래도 없는 경우는, Finch W로 한 블럭 더 가시면 Community센터 
뒤편 무료주차장이 있는데 이를 활용해주시기 바랍니다.</span>	
			</div>
			<div class="col-md-12 m-padding20"><h1>Map</h1></div>
			<div class="col-md-12 m-padding20">			
				<div class="text-center" style="width: 100%; height: 350px;">
					<div id="map" style="height: 100%"></div>
					<div id="directions-panel"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>

                                                initMap();
                                                function initMap() {
                                                	  var customMapType = new google.maps.StyledMapType([
                                                	      {
                                                	        stylers: [
                                                	          {hue: '#ffffee'},
                                                	          {visibility: 'simplified'},
                                                	          {gamma: 0.5},
                                                	          {weight: 0.5}
                                                	        ]
                                                	      },
                                                	      {
                                                	        elementType: 'labels',
                                                	        stylers: [{visibility: 'on'}]
                                                	      },
                                                	      {
                                                	        featureType: 'water',
                                                	        stylers: [{color: '#ffffee'}]
                                                	      }
                                                	    ], {
                                                	      name: 'Custom Style'
                                                	  });
                                                	  var customMapTypeId = 'custom_style';

                                                	  var map = new google.maps.Map(document.getElementById('map'), {
                                                	    zoom: 17,
                                                	    center: {lat: 43.777857, lng: -79.423081},  // Brooklyn.
                                                	    mapTypeControlOptions: {
                                                	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
                                                	    }
                                                	  });

                                                	  map.mapTypes.set(customMapTypeId, customMapType);
                                                	  map.setMapTypeId(customMapTypeId);


                                                	  marker = new google.maps.Marker({
                                                		    map: map,
                                                		    draggable: true,
                                                		    animation: google.maps.Animation.DROP,
                                                		    position: {lat: 43.777857, lng: -79.423081}
                                                		  });
                                                		  marker.addListener('click', toggleBounce);

                                                	  
                                                	}
                                                function toggleBounce() {
                                                	  if (marker.getAnimation() !== null) {
                                                	    marker.setAnimation(null);
                                                	  } else {
                                                	    marker.setAnimation(google.maps.Animation.BOUNCE);
                                                	  }
                                                	}
                                                	

</script>

<script async defer
	src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyAtb0KSz8xJ4MvqJusjgUpJLaJn8AEjiC4&callback=initMap"></script>
