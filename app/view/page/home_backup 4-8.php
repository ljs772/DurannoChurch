
<script>
$(document).ready(function() {

	  $('#slider').nivoSlider({
		   // effect: 'random',                 // Specify sets like: 'fold,fade,sliceDown' 
		   // slices: 15,                       // For slice animations 
		   // boxCols: 8,                       // For box animations 
		   // boxRows: 4,                       // For box animations 
		 //   animSpeed: 500,                   // Slide transition speed 
		    pauseTime: 3000               // How long each slide will show 
		   // startSlide: 0,                    // Set starting Slide (0 index) 
		   // directionNav: true,               // Next & Prev navigation 
		   // controlNav: true,                 // 1,2,3... navigation 
		    //controlNavThumbs: false,          // Use thumbnails for Control Nav 
		  //  pauseOnHover: true,               // Stop animation while hovering 
		  //  manualAdvance: false,             // Force manual transitions 
		    //prevText: 'Prev',                 // Prev directionNav text 
		    //nextText: 'Next'                 // Next directionNav text 
		   // randomStart: false,               // Start on a random slide 
		  //  beforeChange: function(){},       // Triggers before a slide transition 
		   // afterChange: function(){},        // Triggers after a slide transition 
		  //  slideshowEnd: function(){},       // Triggers after all slides have been shown 
		  //  lastSlide: function(){},          // Triggers when last slide is shown 
		   // afterLoad: function(){}           // Triggers when slider has loaded 
		  
		  });
});
</script>	
	<section id="ads">
		<div id="wrapper">
			<div class="slider-wrapper theme-default">
			<div class="container ">

		<div class="col-md-12">
				<div id="slider" class="nivoSlide containerr">
				
					<img src="duranno/ads/week.jpg" data-thumb="duranno/ads/week.jpg" alt="" data-transition="slideInLeft" /> 					
					<img src="duranno/ads/wed.jpg" data-thumb="duranno/ads/wed.jpg" alt="" data-transition="slideInLeft" />					
					<img src="duranno/ads/friday.jpg" data-thumb="duranno/ads/friday.jpg" alt="" data-transition="slideInLeft" /> 					
			
			</div></div></div>
			</div>
		</div>
	</section>

	
	
	<div class="container home_body ">
	<div style="display:none;">이강화목사가 담임으로 시무하며, 건강한 믿음의 공동체를 지향하는 그리스도안에서의 가족 같은 교회입니다.</div>
		<div class="ads_text">말씀의 은혜와 성령의 운행하심이 있는 두란노 교회에 오신것을 환영합니다.</div>
		
		<div class="col-md-12 m_home_div"></div>
		
		
		<div class="col-md-12 col-lg-12">
			
			<br/>
			<div class=" col-md-12 col-lg-12 m-padding0 video-background">
				<section  id="video">   
					<div  class="col-md-3 col-lg-3 home_video m-padding0">					 
		           			<?php	if ($pastorVideo['id']!= "" ) {
							?>
							
							<a href="subpage/video_pastor"><img src="http://img.youtube.com/vi/<?=$pastorVideo['path_img']?>/0.jpg"></a>
							
												
						<!-- 	<iframe src="<?//$pastorVideo['path'] ?>?enablejsapi=1" frameborder="0" allowfullscreen id="pastor_video_iframe"></iframe> -->
								<?php 
							
						}?>
		           	</div>
		           	<div class="col-md-3 col-lg-3 home_video_text" id="home_video_text_big">
							<h1>주일설교</h1>
							<p><?=$pastorVideo['speech_date']?></p>							
							<p><?=$pastorVideo['title']?></p>
							<h4>이강화 담임목사</h4>
							<h4>토론토 두란노 교회</h4>
							</div>		
		           	   <div class="col-md-3 col-lg-3 home_video_text" id="home_video_text_small">
							<h1>주일설교 (<?=$pastorVideo['speech_date']?>) </h1>														
							<p><?=$pastorVideo['title']?> / 이강화 담임목사   토론토 두란노 교회</p>
							
							</div>	
	              	<div  class="col-md-6 col-lg-6  home_evening  m-padding0">       
	              		
	              		
	              		<img src="images/main/evening1.png" />  
	              		<div class="home_evening_text">
	              		<h1>매일저녁기도회</h1><h4>월~금 (Pm 8-10)</h4><br/>
							<p>도심속 기도원 같은곳</p>							
							<p>저녁마다 기도의 시간이 있습니다.</p>
							</div> 
	              	</div> 
	              	
				</section>
			</div> 
		</div>
				
		<div class="col-md-12 m_home_div"></div>
		
		 <div class="col-md-12 ">
		
		
				<div  class="col-md-6 col-lg-6  home_early  m-padding0">       
	              		
	              		
	              		<img src="images/main/early.png" />  
	              		<div class="home_early_text">
	              		<h1 class="home_early_text1">응답받는 새벽기도회</h1><h4 class="home_early_text2">화~토 (6am)</h4><br/>
							<p class="home_early_text3">매일성경 QT스케쥴과 함께</p>							
							<p class="home_early_text3">말씀 강해와 기도의 시간이 있습니다.</p>
							<h4 class="home_early_text4"><a href="http://su.or.kr/03bible/daily/qtView.do?qtType=QT1" target="_blank">su.or.kr</a></h4>
							</div> 
	              	</div> 
	              		<div  class="col-md-3 m-padding0">
							<section  id="small-ad"  class=" m-padding0">     
		      	      			<div  class="home-location-big col-md-12 m-padding0">
		      	      
		      	      				<div><h2>오시는길</h2></div>
	              					<img src="images/main/location_small.jpg" />   
	              					<div><h4>89 Finch W, North York, ON M2N2H6</h4></div>
	              		
	              				</div>
	              			<div  class="home-location-small col-md-12 m-padding0">
		      	      
		      	      				<div><h1>오시는길</h1></div>	              					
	              					<div><h4>89 Finch W, North York, ON M2N2H6</h4></div>
	              		
	              				</div>
		        			</section>
			</div>
				<div  class="col-md-3 m-padding0">
							<section  id="small-ad"  class=" m-padding0">     
		      	    
	              				<div  class="col-md-12 m-padding0 home-counsel-big"> 	
	              					<h1>신앙 상담</h1>              		 			
	              		 			<h4><b>신앙 생활</b>을 하다가</h4>
	              		  				<h4><b>성경</b>을 읽다가</h4>
	              		 				<h5>궁금한 점이 있으시면 질문해 주세요.</h5> 
	              		  					담임목사 : 이강화<br/>
	              		  				<h4>647-980-5791</h4>
	              		  				<h4>kanghwa73@gmail.com</h4>
	              		  				              			
	              		 		</div>
	              		 			<div class="col-md-12 m-padding0 home-counsel-small"> 	
	              					<h1>신앙 상담</h1>  
	              					담임목사 : 이강화<br/>
	              		  			<h4>647-980-5791 / kanghwa73@gmail.com</h4>
	              		  				              			
	              		 		</div>
		        			</section>
					</div>
	</div>
		<div class="col-md-12 m_home_div"></div>
		
		<div class="col-md-12">
			<div class="col-md-6 m-padding0">
				<section  id="memberNews">
					<div  class="col-md-12 home-box2">
						<div class="news-title"><span>교우 소식</span><i class="material-icons m-padding0">more</i></div>
	                   	<div class="text-center">
	       
	<?php            
	        	// `id`, `title`, `planed_date`,`div`, `description`
	foreach($member_news as $member_new){ ?>
	           				<label class="col-md-6  home-news text-left"><b><?= $member_new['title']?></b></label>
	          				<label class="col-md-6  home-news  text-left"> <?= $member_new['planed_date']?></label>
	 <?php } ?>          
	            		</div>
					</div>
				</section>
			</div>
			<div class="col-md-6 m-padding0">
				<section  id="durannoNews" >
					<div  class="col-md-12 home-box2">
						<div class="news-title ">두란노 소식<i class="material-icons">more</i></div>
	                    <div class="text-center">
	       
	<?php            
	        	// `id`, `title`, `planed_date`,`div`, `description`
	foreach($news as $new){ ?>
	           				<label class="col-md-6  home-news  text-left"><b><?= $new['title']?></b></label>
	           				<label class="col-md-6  home-news  text-left"> <?= $new['planed_date']?></label>
	<?php } ?>       
	             		</div>           
					</div>
				</section>
			</div>
		</div>		
		
		<div class="col-md-12 m_home_div"></div>
		
		<div  class="col-md-12 ">
			<div  class="col-md-6 m-padding0">
				<section  id="photo ">     
		        	<div  class="col-md-12  ">
		         		<div  class="photo-title"> 
		         			<span  class="title_left">사진첩 </span>
		         			<span  class="title_right"> <i class="material-icons">more</i></span>
		         		</div>
		<?php            
		foreach($gallery as $data){
		?>
		           		<div class="col-md-6 text-center" onclick="f_galleryList('f_galleryDetail<?=$data['id']?>')">
		  				<form id="f_galleryDetail<?=$data['id']?>" action="subpage/galleryDetail" method="post">         		
		           			<img class="home-img-small" src = "/<?= $data['file_path']?><?= $data['file_name']?>"><br/>
							<?= $data['title']?>
							<input type="hidden" name="id" value="<?=$data['id']?>"/>
							</form>
		              	</div>
		<?php  } ?>            
		            </div>
				</section>
			</div>
			<div  class="col-md-6 m-padding0">
				<section  id="schedule">     
		        <div class="col-md-12 ">
		        <div  class="photo-title m-padding0"> 
		         			<span  class="title_left">예배안내</span>
		         			<span  class="title_right"> <i class="material-icons">time</i></span>
		         		</div>
							<div class="col-md-12 m-padding0">
								<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12  text-left  m-padding0" id="">
									<div class="col-xs-7 col-sm-6  col-md-7 m-box1-left m-padding0"><h4>주일예배</h4> </div>
									<div class="col-xs-5 col-sm-6  col-md-5 m-box1-right m-padding0"><h4>주일  2pm</h4></div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12   text-left  m-padding0" id="">
									<div class="col-xs-7 col-sm-6 col-md-7 m-box1-left m-padding0"><h4>주일어린이예배</h4></div>
									<div
										class="col-xs-5 col-sm-6 col-md-5 m-box1-right m-padding0"><h4 >주일 12pm</h4></div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12   text-left m-padding0 " id="">
									<div class="col-xs-7 col-sm-6 col-md-7 m-box1-left m-padding0"><h4>수요예배(성경공부)</h4></div>
									<div
										class="col-xs-5 col-sm-6 col-md-5 m-box1-right m-padding0"><h4>수 8pm</h4></div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12   text-left m-padding0" id="">
									<div class="col-xs-7 col-sm-6 col-md-7 m-box1-left m-padding0"><h4>금요예배(기도)</h4></div>
									<div
										class="col-xs-5 col-sm-6 col-md-5 m-box1-right m-padding0"><h4>금 8pm</h4></div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12   text-left m-padding0" id="">
									<div class="col-xs-7 col-sm-6 col-md-7 m-box1-left m-padding0"><h4>새벽기도</h4></div>
									<div
										class="col-xs-5 col-sm-6 col-md-5 m-box1-right m-padding0"><h4>화~토 6am</h4></div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12   text-left !m-box1 m-padding0" id="">
									<div class="col-xs-7 col-sm-6 col-md-7 m-box1-left m-padding0"><h4>매일저녁 기도회</h4></div>
									<div	class="col-xs-5 col-sm-6 col-md-5 m-box1-right m-padding0"><h4>매일 8pm</h4></div>
								</div>
							</div>
						</div>        
				</section>
			</div>
			
			
			
		
		</div>
<div style="display:none;">이강화목사가 담임으로 시무하며, 건강한 믿음의 공동체를 지향하는 그리스도안에서의 가족 같은 교회입니다.</div>
</div>

<script>

$("#home_video_text_big").click(function(){
	location.href = "subpage/video_pastor";
});
$("#home_video_text_small").click(function(){
	location.href = "subpage/video_pastor";
});
function f_galleryList(data){	
	
	$('#'+data).submit();	
}

</script>