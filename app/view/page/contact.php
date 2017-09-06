

<section class="subbody">
<div class="container">
        <div class="row">
            <div class="service-title col-md-12 text-center">
       	         <h1>Contact Us</h1>
            </div>
        </div>
    </div>
	<br/>
	<div class="container">
	
<br/>
		<div class="col-md-12 wow fadeInLeft animated ">

			<div class="single_contact_info">
				<h1>두란노 교회</h1><br/>
				<p>duranno.church15@gmail.com</p>
			</div>
		</div>
		<div class="col-md-12  wow fadeInLeft animated">
			<form method="post" action="#">
				<div class="row contact-row">
					<div class="col-md-12">
						<input type="text" class="form-control" id="name"
							placeholder="Name"> <input type="email" class="form-control"
							id="email" placeholder="Email"> <input type="text"
							class="form-control" id="subject" placeholder="Subject">


					</div>
					<div class="col-md-12">
						<textarea class="form-control" id="message" rows="7" cols="10"
							placeholder="How can we help You?"></textarea>
						<br /> <input class="btn btn-default mail-send-btn form_submit"
							type="submit" id="submit" value="SEND MESSAGE" />
					</div>
				</div>
			</form>
		</div>
	</div>
	
</section>

</div>

</div>
<!-- /container -->


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