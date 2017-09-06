
<section class="subbody">
<div class="container">
        <div class="row">
            <div class="service-title col-md-12 text-center">
                    <h1>온라인 헌금</h1>
                   
            </div>
        </div>
    </div>
	<br/>
	<div class="container">
		<div class="content">

			<div class="donation text-left col-md-3">
				<img src="../images/page/donation.png" alt="">
			</div>
			<div class="text-left col-md-9">
				고린도 후서 9장 6~7절<br /> (고후 9:6) 이것이 곧 적게 심는 자는 적게 거두고 많이 심는 자는 많이 거둔다
				하는 말이로다 <br /> (고후 9:7) 각각 그 마음에 정한 대로 할 것이요 인색함으로나 억지로 하지 말지니 하나님은
				즐겨 내는 자를 사랑하시느니라<br />
			</div>



			<div class="text-left m-padding20">
				<span class="col-xs-12 col-sm-12 col-lg-12 m-box1-left m-padding10 "><br />
				<b>* 온라인헌금 KEB Hana Bank Canada 043 2020 15732 예금주: Duranno Church</b></span>
				<span class="col-xs-12 col-sm-12 col-lg-12 m-box1-left m-padding10">드린
					예물이 좋은 땅에 심어진 씨앗처럼 복음의 열매를 맺는 일에 귀하게 쓰여지길 바랍니다.</span>





			</div>

			<div class="text-left m-padding20">
				<br /> <span class="col-md-12 m-box1-left m-padding10"> 드린 예물과 함께 전달
					했으면 하는 메세지를 두란노 교회에 남겨주세요. (선택사항) </span> <br />
				<br />
				<div class="animated m-padding20">
					<form method="post" action="#">
						<div class="row contact-row">
							<div class="col-md-12">
								*이름<input type="text" class="form-control" id="name"
									placeholder="Name"> *이메일<input type="email"
									class="form-control" id="email" placeholder="Email"> *제목 <input
									type="text" class="form-control" id="subject"
									placeholder="title">
							</div>
							<div class="col-md-12">
								*전하실 메세지와 기도 제목을 적어주세요.
								<textarea class="form-control" id="message" rows="7" cols="10"
									placeholder="전하실 메세지와 기도 제목을 적어주세요."></textarea>
								<br /> <input class="btn btn-default mail-send-btn form_submit"
									type="submit" id="submit" value="SEND MESSAGE" />
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
	    var url =  "/home/sendMailDonation";
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