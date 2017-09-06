
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


<section id="ads" class="col-md-12">

<div id="wrapper">
<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">
 <img src="duranno/ads/ads1.png" data-thumb="duranno/ads/ads1.png" alt="" data-transition="slideInLeft" /> 

<img src="duranno/ads/ads2.png" data-thumb="duranno/ads/ads2.png" alt="" data-transition="slideInLeft" />

<img src="duranno/ads/ads1.png" data-thumb="duranno/ads/ads1.png" alt="" data-transition="slideInLeft" /> 
<img src="duranno/ads/ads2.png" data-thumb="duranno/ads/ads2.png" alt="" data-transition="slideInLeft" /> </div>
<div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
</div>

</div>

<div class="ads_text">말씀의 은혜와 성령의 운행하심이 있는 두란노 교회에 오신것을 환영합니다.</div>
</section>

<section  id="video">
<div class="container">
       
        <div  class="col-md-12 home-box1 ">
           <div class="video-title ">주일 설교 영상</div>
           <div class="text-center">
             <div  class="col-md-8  ">
           	<iframe class = "home-video" src="<?= $pastorVideo['path']?>" frameborder="0" allowfullscreen></iframe>
                       </div> </div>
                         <div  class="col-md-4  ">
                          <div>
             하나님 중심의 신앙 <창세기 37:6-9, 창세기 41:14-16><br/>
             요셉의 꿈은 하나님으로부터 왔습니다. 이걸 모르는 사라은 없을 것입니다.
            
             
             </div>
            </div>  
           
          
             </div>        
            </div>
           

</section>


<section  id="news">

<div class=" container ">
<div  class="col-md-6 home-box1">
<div class="news-title ">두란노 소식</div>
      
           <!--  <div class="col-md-6 text-center home-new">
           <label class='home-new-date'>
           <b></b>
          
           </label>
        	 <label  class='home-new-title'>          
          
           </label>
            
         
            </div>
            
             -->
             <div class="text-center">
       
           <?php            
        	// `id`, `title`, `planed_date`,`div`, `description`
           foreach($news as $new){ ?>
           <label class="col-md-6  home-news"><b><?= $new['title']?></b>
          </label><label class="col-md-6  home-news"> <?= $new['planed_date']?></label>
           <?php } ?>
           
       
             </div>
          
            </div>

<div  class="col-md-6 home-box1">
<div class="news-title  ">교우 소식</div>
      
           <!--  <div class="col-md-6 text-center home-new">
           <label class='home-new-date'>
           <b></b>
          
           </label>
        	 <label  class='home-new-title'>          
          
           </label>
            
         
            </div>
            
             -->
             <div class="text-center">
       
           <?php            
        	// `id`, `title`, `planed_date`,`div`, `description`
           foreach($member_news as $member_new){ ?>
           <label class="col-md-6  home-news"><b><?= $member_new['title']?></b>
          </label><label class="col-md-6  home-news"> <?= $member_new['planed_date']?></label>
           <?php } ?>
           
       
          
  
            </div>
            </div>
</div>
</section>
<section  id="photo" class="">
<div class="container">

      
       
        <div  class="col-md-12 home-box1 ">
         <div  class="photo-title"> <span  class="title_left">사진첩 </span><span  class="title_right"> <img src = "/images/icon/more.png"></span></div>
        <div class=""> </div>
            <div class="col-md-6 text-center">
            
            
             <img class="home-img-big" src = "/<?= $gallery[0]['path']?>/<?= $gallery[0]['name']?>">
            
            </div>
            
            <div class="col-md-6 text-center">
          <?php            
        	// `id`, `title`, `planed_date`,`div`, `description`
        	$count=0;
           foreach($gallery as $data){
           	if($count >0){
           	?>
           
           <img class="home-img-small" src = "/<?= $data['path']?>/<?= $data['name']?>">
              
           <?php 
           	}
           $count++;
           } ?>
            
            </div>
           </div>
            </div>
          

</section>
<section class="contact" id="contact">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="wow fadeInUp animated">
                    <h1>GET IN TOUCH</h1>
                    <br>
                </div>
            </div>
        </div>
   
        <div class="row ">
       <div class="col-md-12 text-center">
            <div class=" wow fadeInLeft animated ">
               
                <div class="single_contact_info">
                    <h2>Duranno</h2>
                    <p>duranno.church15@gmail.com</p>                    
                </div>
            </div>
            <div class=" wow fadeInRight animated ">
                <form method="post" action="#">
                    <div class="row contact-row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                           
                            
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" id="message" rows="7" cols="10" placeholder="How can we help You?"></textarea>
                            <br/>
                           <input class="btn btn-default mail-send-btn form_submit" type="submit" id="submit" value="SEND MESSAGE" /> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        
    </div>
</section>


	<script>
	

	$("#submit").click(function(e){
	    e.preventDefault();
	    
	    var allData ={"subject":$("#subject").val(),"name":$("#name").val(),"email":$("#email").val(),"message":$("#message").val()};
	    var url =  "home/sendMail";
	    //window.open("/worker/ordersHistory");
	    $(function(){
	      $.ajax({
	        url: url,
	        type: 'POST',
	        data: allData,
	        dataType: "json",
	        success: function(oData) {
	          
	        	if(oData.errormsg != null){
	                alert('failed: ' + oData.errormsg);
	            }else{
	            	alert(oData.results);
	            	$("#subject").val('');
	             	$("#name").val('');
	             	$("#email").val('');
	             	$("#message").val('');
	            }
	        }
	      });
	    });
	   
	
});
	</script>